<?php
require '../sdk/ScoilnetClient.php';

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
    
    protected $defaultConfig;
    
   /**
    *  Creates the Scoilnet OAuth client. You will need to add the following values 
    *  - client_id: (required) The application ID.
    *  - client_secret: (required) The application secret.
    *  - api_key: (required) The application secret key.
    */
    public function __construct() {
        $config = [
                "client_id" =>"12_5puyy2aa6nsw0k08coowgc00gc80ss8wow8wgcg8wssso8sgws",
                "client_secret" =>"4obcqlffjk840swcwcw4g0gkk4gg4848sggswowsgco4wck4w8",
                "api_key" => "d0d588d94c05b3e1e4e37159f1cf5458f645193f5b45f092874d5747628ce8a3",
                ];
        
       // $this->defaultConfig = array('school_discipline' => '40,50');
        $this->defaultConfig = array(); 
        $this->scoilnetClient = new \OAuth2\ScoilnetClient($config);
        
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

        //Start Twig Templating engine
        $loader = new Twig_Loader_Filesystem('/home/sites/searchAPI/Templates');
        $twig = new Twig_Environment($loader, array(
            'cache' => '/home/sites/searchAPI/Cache',
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
    
    
    
}

//Creates scoilnet example
$example = new scoilnetExample();

//Displays the search
$example->display();


