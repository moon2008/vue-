<?php
  namespace controllers;

  class BaseControllers {

    protected $twig = null;
    protected $data = [];

    public function __construct() {
      $loader = new \Twig\Loader\FilesystemLoader( TEMPDIR.'/app/views');
      $this->twig = new \Twig\Environment($loader, [
        //cache => '/path/to/compilation/cache,

      ]);
    }

    protected function assign($var, $value=null) {
      if(is_array($var)) {
        $this ->data = array_merge($this->data, $var);
      } else {
        $this -> data[$var] = $value;
      }
    }

    protected function display($template) {
      echo $this->twig->render($template.'.html', $this->data);
    }

    protected function success($url, $mess) {
      echo "<script>";
      echo "alert('{$mess}')";

      if(!empty($url)) {
        echo "location.href='{$url}'";
      }

      echo "</script>";
    }

    protected function error($url, $mess) {
      echo "<script>";
      echo "alert('ERROR:{$mess}')";

      if(!empty($url)) {
        echo "location.href='{$url}'";
      }

      echo "</script>";
    }
  }
