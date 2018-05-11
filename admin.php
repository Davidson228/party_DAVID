<?php
session_start();
require 'vendor/autoload.php';

if((isset($_SESSION['hash'])) && ($_SESSION['hash'] == 'qwerty')) {
  require 'connection.php';
  $app = new \atk4\ui\App('База данных');
  $app->initLayout('Centered');



  $crud = $app->layout->add('CRUD');
  $crud->setModel(new Friends($db));

  $button1 = $app->add('Button');
  $button1->set('Logout');
  $button1->link('logout.php');

  $button2 =$app->add('Button');
  $button2->set('Exit');
  $button2->link('index.php');

} else{

header('Location: error.php');

}
