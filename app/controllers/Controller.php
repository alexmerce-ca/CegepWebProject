<?php
namespace controllers;

use app\Session;

class Controller {

    private $router;
    private $db;

    public function __construct($router, $db){
        $this->router = $router;
        $this->db = $db;
    }

    protected function view(String $view, Array $data = []) {
        // Declare each key/value pair as a variable
        extract($data);

        // Construct the view with the variables
        try {
            ob_start();
            require __DIR__ . '/../../src/views/' . $view . '.php';
            $content = ob_get_clean();
            require __DIR__ . '/../../src/views/layouts/layout.php';
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
        return true;
    }

    protected function getRouter() {
        return $this->router;
    }

    protected function getDatabase() {
        return $this->db;
    }

    protected function redirectToUrl(String $url, Array $data = []) {
        foreach($data as $k => $v) {
            Session::put($k, $v);
        }

        header('Location: '.$url);
    }

    protected function redirectToRoute(String $route, Array $data = []) {
        $url = $this->router->generate($route);

        foreach($data as $k => $v) {
            Session::put($k, $v);
        }

        header('Location: '.$url);
        return true;
    }

}