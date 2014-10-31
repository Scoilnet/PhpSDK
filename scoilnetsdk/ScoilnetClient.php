<?php
namespace ScolinetSDK;

require_once('OAuth2/OAuth2Exception.php');
require_once('OAuth2/OAuthClient.php');

/**
 * Extends OAuthClient for Scoilnet grant type.s
 *
 * @author paul schweppe
 */
class ScoilnetClient extends OAuthClient{
    
    protected $cacheFile = '';
    
    public function __construct($config = array()) {
       
       $config = array_merge([
                "authorize_uri" =>"https://www.scoilnet.ie/app_dev.php/oauth/v2/auth",
                "access_token_uri" =>"https://www.scoilnet.ie/app_dev.php/oauth/v2/token",
                "base_uri" => "https://www.scoilnet.ie/",
           
                "cookie_support" => FALSE,
                "use_file_cache" => TRUE
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

       // grant_type == scoilnet.

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
       
       if($this->getVariable('use_file_cache') == TRUE){
            $this->setSessionInFileCache($session);
       }
       
    }

    return $this->getVariable('_session');
  }
  
    /**
   * Try to get session object from custom method.
   *
   * By default we generate session object based on access_token response, or
   * if it is provided from server with $_REQUEST. For sure, if it is provided
   * by server it should follow our session object format.
   *
   * Session object provided by server can ensure the correct expires and
   * base_domain setup as predefined in server, also you may get more useful
   * information for custom functionality, too. BTW, this may require for
   * additional remote call overhead.
   *
   * You may wish to override this function with your custom version due to
   * your own server-side implementation.
   *
   * @param $access_token
   *   (optional) A valid access token in associative array as below:
   *   - access_token: A valid access_token generated by OAuth2.0
   *     authorization endpoint.
   *   - expires_in: (optional) A valid expires_in generated by OAuth2.0
   *     authorization endpoint.
   *   - refresh_token: (optional) A valid refresh_token generated by OAuth2.0
   *     authorization endpoint.
   *   - scope: (optional) A valid scope generated by OAuth2.0
   *     authorization endpoint.
   *
   *  @return
   *    A valid session object in associative array for setup cookie, and
   *    NULL if not able to generate it with custom method.
   */
  protected function getSessionObject($access_token = NULL) {
    $session = NULL;

    // Try generate local version of session cookie.
    if (!empty($access_token) && isset($access_token['access_token'])) {
      $session['access_token'] = $access_token['access_token'];
      $session['base_domain'] = $this->getVariable('base_domain', self::DEFAULT_BASE_DOMAIN);
      $session['expires'] = isset($access_token['expires_in']) ? time() + $access_token['expires_in'] : time() + $this->getVariable('expires_in', self::DEFAULT_EXPIRES_IN);
      $session['refresh_token'] = isset($access_token['refresh_token']) ? $access_token['refresh_token'] : '';
      $session['scope'] = isset($access_token['scope']) ? $access_token['scope'] : '';
      $session['secret'] = md5(base64_encode(pack('N6', mt_rand(), mt_rand(), mt_rand(), mt_rand(), mt_rand(), uniqid())));

      // Provide our own signature.
      $sig = self::generateSignature(
        $session,
        $this->getVariable('client_secret')
      );
      $session['sig'] = $sig;
    }

    // Try loading session from $_REQUEST.
    if (!$session && isset($_REQUEST['session'])) {
      $session = json_decode(
        get_magic_quotes_gpc()
          ? stripslashes($_REQUEST['session'])
          : $_REQUEST['session'],
        TRUE
      );
    }
    
    //Try and get session from file cache
    if(!$session && $this->getVariable('use_file_cache') == TRUE){
        $session = $this->getSessionFromFileCache();  
    }

    return $session;
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
  
  protected function getSessionFromFileCache(){
      if(file_exists($this->cacheFile)){
          $sessionData = file_get_contents($this->cacheFile);
          $session = unserialize($sessionData);
          if($session['expires'] > (time()-30)){
              return $session;
          }else{
              return NULL;
          }
      }
      
      return false; 
  }
  
  protected function setSessionInFileCache($session){
      if($this->cacheFile != ""){
          file_put_contents($this->cacheFile, serialize($session));
      }
  }
  
  public function getCacheFile() {
      return $this->cacheFile;
  }

  public function setCacheFile($cacheFile) {
      $this->cacheFile = $cacheFile;
  }


}

?>