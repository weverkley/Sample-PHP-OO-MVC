<?php

/**
 *
 */
class UsuarioController
{
  private $db;
  private $model;
  private $template;

  public function __construct()
  {
    $this->db = new Database();
    $this->template = new Template();
  }

  public function listar()
  {
    $this->model = new UsuarioModel($this->db);
    $this->template->data = $this;
    $this->template->var1 = 'Lorem Ipsum';
    $this->template->var2 = 'Hello World';

    $this->template->renderView('usuario', 'listar');
  }
}
