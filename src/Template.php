<?php

/**
 *
 */
class Template
{

  private $vars;

  public function __set($index, $value) {
	    $this->vars[$index] = $value;
	}

  public function renderView($view, $method) {
    extract($this->vars);
    $file = BASE_URL.'/view/'.$view.'/'.$method.'.html';
    if (file_exists($file)) require_once $file;
  }
}
