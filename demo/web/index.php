<?php
require '../../scoilnetsdk/ScoilnetClient.php';

/**
 * Example of the Scoilnet Search API
 * 
 * @author fluid-rock
 */
class scoilnetExample {
    
    /**
     * The Scoilnet OAuth client object
     * @var \OAuth2\ScoilnetClient
     */
    protected $scoilnetClient;
    
    protected $defaultConfig = array();
    
   /**
    *  Creates the Scoilnet OAuth client. You will need to add the following values 
    *  - client_id: (required) The application ID.
    *  - client_secret: (required) The application secret.
    *  - api_key: (required) The application secret key.
    */
    public function __construct() {
        $config = [
                //demo
                "authorize_uri" =>"https://scoilnetdev.fluid-rock.com/app_dev.php/oauth/v2/auth",
                "access_token_uri" =>"https://scoilnetdev.fluid-rock.com/app_dev.php/oauth/v2/token",
                "base_uri" => "https://scoilnetdev.fluid-rock.com/",
            
                "client_id" =>"15_5azt5nz71r0gwc8ck8wg0kg8cskw0okwg08c0ooscwk0ss8g40",
                "client_secret" =>"2ap47q87tbtw08cg40sc04wgwwgww804kgssck4s404448o0o0",
                "api_key" => "8a30c194508db411f11531338e1dcbdbd45367189d3c89c5b3c77d8fe64c6b74",
                
                //live
                /*"authorize_uri" =>"https://www.scoilnet.ie/oauth/v2/auth",
                "access_token_uri" =>"https://www.scoilnet.ie/oauth/v2/token",
                "base_uri" => "https://www.scoilnet.ie/",
                "client_id" =>"1_4dk0ukekm0mcs4o8g0cok4kc8sgwg4sw88wswkgw880404kk8s",
                "client_secret" =>"48o2xyiar14wscow04swc0ww8ogsg8kgo40wcogwgo4wk4c0ss",
                "api_key" => "71cce7b5a4f7be8bbddff76b88b107052a084bacdf5e704d99ef0940c1746a44",*/
                ];
        
        $this->defaultConfig = array('limit' => '20');
        //$this->defaultConfig = array('school_level'=>'1'); 
        $this->scoilnetClient = new \OAuth2\ScoilnetClient($config);
        $this->scoilnetClient->setCacheFile($this->applicationDirectory().'/Cache/code.secure');
    }
    
    /**
     * Runs the scoilnet search 
     * @return array
     */
    protected function search(){
        
        //$params = $this->getParams();
        $params = array_merge($this->getParams(),$this->defaultConfig );
        
        $response = $this->scoilnetClient->search($params);
        if($response['success'] == false){
            print_r($response);
        }
        
        return $response;
    }
    
    /**
     * Displays the search
     */
    public function display(){
        require_once '../Twig-1.16.0/lib/Twig/Autoloader.php';
        Twig_Autoloader::register();
        require_once '../TwigExtensions/PaginationExtension.php';
        require_once '../TwigExtensions/GroupCurriculumExtension.php';
        
        //print_r($_SERVER['DOCUMENT_ROOT']);
        //Start Twig Templating engine
        $loader = new Twig_Loader_Filesystem($this->applicationDirectory().'/demo/Templates');
        $twig = new Twig_Environment($loader, array(
            'cache' =>  $this->applicationDirectory().'/demo/Cache',
            'debug' => true,
        ));

        //Add Path function to Twig
        $function = new Twig_SimpleFunction('path', function ($route,$param) {
            //print_r($param);
            return $route.'?'.http_build_query($param);
        });
        $twig->addFunction($function);
        
        //Add Pagination extension to Twig
        $twig->addExtension(new TwigExtension\PaginationExtension());
        
        //Add Group Curriculum Extension to Twig
        $twig->addExtension(new TwigExtension\GroupCurriculumExtension());
        $twig->addExtension(new Twig_Extension_Debug());
        //Load the twig template file 
        $template = $twig->loadTemplate('index.html');
        
       
        
        //Runs the search and gets the results
        $results = $this->search();

        //Get the current page the user is on. Default is the first page
        $page = (isset($_GET['page'])?intval($_GET['page']):1);
        
        //Displays the template
        echo $template->render(array('results' => $results
                ,'params'=>$this->getParams()
                ,'route' => '/index.php'
                ,'currentPage' => $page
                ,'defaultConfig' =>$this->defaultConfig)
                );
    }

    /**
     * Gets and filters all paramaters
     * @return array
     */
    protected function getParams(){
        $params = array();
        if(is_array(filter_input_array(INPUT_GET))){
            foreach(filter_input_array(INPUT_GET) as $paramName => $paramValue){
                $params[$paramName] = $paramValue;
            }
        }
       
        return $params;
    }
    
    protected function applicationDirectory(){
        $webRoot = $_SERVER['DOCUMENT_ROOT'];
        $folders = explode('/',$webRoot);
        //array_pop($folders);
        $newFolders = array_slice($folders, 0, -2);
        return implode('/', $newFolders);
    }
    
}

//Creates scoilnet example
$example = new scoilnetExample();

//Displays the search
$example->display();


