<?php 

function show($stuff) {
  echo "<pre>";
  print_r($stuff);
  echo "</pre>";
}

class App {

  protected $controller = "_404";
  protected $method = "index";

  function __construct() {
    $arr = $this->getURL();
    $filename = "../app/controllers/".ucfirst($arr[0]).".php";

    if(file_exists($filename)) {
      require $filename;
      $this->controller = $arr[0];
    } else {
      require "../app/controllers/" . $this->controller . ".php";
    }
  
    $myController = new $this->controller();
    if(method_exists($myController, strtolower($arr[1]))) {
      $this->method = strtolower($arr[1]);
    } 
    call_user_func_array([$myController, $this->method],$arr);
  }

  private function getURL() {
    $url = $_GET["url"] ?? "home";
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $arr = explode("/", $url);
    return $arr;
  }  



}

$app = new App();


