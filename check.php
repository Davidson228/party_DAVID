<?php
session_start();
require 'vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App('База данных'); 
$app->initLayout('Centered');

$check = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));
$check->addField('password',['type'=>'password','required'=>TRUE]);

$soso = 'mallorca2013';
$form = $app->layout->add('Form');
$form->setModel($check);


$form->onSubmit(function($form) use($soso) {
  if($form->model['password'] ==  $soso) {

$_SESSION['hash'] = 'qwerty';


     return new \atk4\ui\jsExpression('document.location = "admin.php" ');
     //return $form->success('Record upadate');
   } else {
  // return $form->error('age','-_-');
  return new \atk4\ui\jsExpression('document.location = "index.php" ');


 }
});
