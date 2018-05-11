<?php
session_start();
require 'vendor/autoload.php';
$app = new \atk4\ui\App('База данных');
$app->initLayout('Centered');

if(isset($_SESSION['name'] )){
$msg = $app->add(['Message','Добро пожаловать '.$_SESSION['name'],'type'=>'success','icon'=>'checkmark']);
}else{
  $msg = $app->add(['Message','Ты не зарегистрирован','type'=>'error','icon'=>'remove circle']);
}
$button1 = $app->add('Button');
$button1->set('logout');
$button1->link(['logout']);
