<?php

namespace Core;

class Router{
    private $controller = 'Registro';
    private $method = 'home';
    private $param = [];
    public function __construct(){
        // 3 Informações importantes do url:
        // - Nome da classe chamada
        // - Nome do metodo
        // - Nome do parametro
        
        $router = $this->url();
        
        if(file_exists('App/Controllers/' . ucfirst($router[0]) . '.php')){
            $this->controller = $router[0];
            unset($router[0]);
        }
        
        $class = "\\App\\Controllers\\" . ucfirst($this->controller);
        $object = new $class;

        if(isset($router[1]) and method_exists($class, $router[1])){
            $this->method = $router[1];
            unset( $router[1]);
        }

        $this->param = $router ? array_values( $router ) : [];

        call_user_func_array([$object, $this->method], $this->param);
    }

    public function url(){
        $parse_url = explode('/', filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));
        return $parse_url;
    }
}

?>