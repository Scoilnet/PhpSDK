<?php
namespace OAuth2;

require_once('OAuth2Exception.php');
require_once('OAuthClient.php');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ScoilnetClient
 *
 * @author fr_user
 */
class ScoilnetClient extends OAuthClient{
    
    public function __construct($config = array()) {
        
       $config = array_merge([
                "authorize_uri" =>"https://scoilnetdev.fluid-rock.com/app_dev.php/oauth/v2/auth",
                "access_token_uri" =>"https://scoilnetdev.fluid-rock.com/app_dev.php/oauth/v2/token",
                "base_uri" => "https://scoilnetdev.fluid-rock.com/",
                "cookie_support" => false
                ],$config);
       
       $this->setVariable('base_uri', $config['base_uri']);
       unset($config['base_uri']);
       

        // Use predefined OAuth2.0 params, or get it from $_REQUEST.
        foreach (array('code', 'username', 'password') as $name) {
          if (isset($config[$name]))
            $this->setVariable($name, $config[$name]);
          else if (isset($_REQUEST[$name]) && !empty($_REQUEST[$name]))
            $this->setVariable($name, $_REQUEST[$name]);
          unset($config[$name]);
        }

        // Endpoint URIs.
        foreach (array('authorize_uri', 'access_token_uri', 'services_uri') as $name) {
          if (isset($config[$name]))
            if (substr($config[$name], 0, 4) == "http")
              $this->setVariable($name, $config[$name]);
            else
              $this->setVariable($name, $this->getVariable('base_uri') . $config[$name]);
            unset($config[$name]);
        }

        // Other else configurations.
        foreach ($config as $name => $value) {
          $this->setVariable($name, $value);
        } 
    }
    
    /**
    * Get the session object.
    *
    * This will automatically look for a signed session via custom method,
    * OAuth2.0 grant type with authorization_code, OAuth2.0 grant type with
    * password, or cookie that we had already setup.
    *
    * @return
    *   The valid session object with OAuth2.0 infomration, and NULL if not
    *   able to discover any cases.
    */
   public function getSession() {
     if (!$this->getVariable('_session_loaded')) {
       $session = NULL;
       $write_cookie = TRUE;

       // Try obtain login session by custom method.
       $session = $this->getSessionObject(NULL);
       $session = $this->validateSessionObject($session);

       // grant_type == password.
       if (!$session && $this->getVariable('api_key')) {
         $access_token = $this->getAccessTokenFromApiKey($this->getVariable('api_key'));
         $session = $this->getSessionObject($access_token);
         $session = $this->validateSessionObject($session);
       }
       
       // grant_type == authorization_code.
       if (!$session && $this->getVariable('code')) {
         $access_token = $this->getAccessTokenFromAuthorizationCode($this->getVariable('code'));
         $session = $this->getSessionObject($access_token);
         $session = $this->validateSessionObject($session);
       }

       // grant_type == password.
       if (!$session && $this->getVariable('username') && $this->getVariable('password')) {
         $access_token = $this->getAccessTokenFromPassword($this->getVariable('username'), $this->getVariable('password'));
         $session = $this->getSessionObject($access_token);
         $session = $this->validateSessionObject($session);
       }

       // Try loading session from cookie if necessary.
       if (!$session && $this->getVariable('cookie_support')) {
         $cookie_name = $this->getSessionCookieName();
         if (isset($_COOKIE[$cookie_name])) {
           $session = array();
           parse_str(trim(
             get_magic_quotes_gpc()
               ? stripslashes($_COOKIE[$cookie_name])
               : $_COOKIE[$cookie_name],
             '"'
           ), $session);
           $session = $this->validateSessionObject($session);
           // Write only if we need to delete a invalid session cookie.
           $write_cookie = empty($session);
         }
       }

      $this->setSession($session, $write_cookie);
    }

    return $this->getVariable('_session');
  }
  
  /**
   * Get access token from OAuth2.0 token endpoint with basic user
   * credentials.
   *
   * This function will only be activated if both username and password
   * are setup correctly.
   *
   * @param $username
   *   Username to be check with.
   * @param $password
   *   Password to be check with.
   *
   * @return
   *   A valid OAuth2.0 JSON decoded access token in associative array, and
   *   NULL if not enough parameters or JSON decode failed.
   */
  private function getAccessTokenFromApiKey($apiKey) {
    if ($this->getVariable('access_token_uri') && $this->getVariable('client_id') && $this->getVariable('client_secret')) {
      return json_decode($this->makeRequest(
        $this->getVariable('access_token_uri'),
        'POST',
        array(
          'grant_type' => 'http://scoilnet.com/grants/apikey',
          'client_id' => $this->getVariable('client_id'),
          'client_secret' => $this->getVariable('client_secret'),
          'api_key' => $apiKey,
        )
      ), TRUE);
    }
    return NULL;
  }
  
  /**
   * Make an OAuth2.0 Request.
   *
   * Automatically append "oauth_token" in query parameters if not yet
   * exists and able to discover a valid access token from session. Otherwise
   * just ignore setup with "oauth_token" and handle the API call AS-IS, and
   * so may issue a plain API call without OAuth2.0 protection.
   *
   * @param $path
   *   The target path, relative to base_path/service_uri or an absolute URI.
   * @param $method
   *   (optional) The HTTP method (default 'GET').
   * @param $params
   *   (optional The GET/POST parameters.
   *
   * @return
   *   The JSON decoded response object.
   *
   * @throws OAuth2Exception
   */
  protected function makeOAuth2Request($path, $method = 'GET', $params = array()) {
    if ((!isset($params['access_token']) || empty($params['access_token'])) && $oauth_token = $this->getAccessToken()) {
      $params['access_token'] = $oauth_token;
    }
    return $this->makeRequest($path, $method, $params);
  }
  
  /**
   * 
   * @param type $params
   * @return type
   */
  public function search($params){
      $path = '/app_dev.php/api/ac/search';
      return $this->api($path, $method = 'GET', $params);
  }
  
}

?>