<?php
class Route {
  public static function new($route, $function){
    if($_GET['url'] == $route){
      $function->invoke();
    }
  }
}
?>
