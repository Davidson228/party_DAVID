<?php
session_start();
require '../vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App('База данных');
$app->initLayout('Centered');


 

/*if(isset($_SESSION)){
$text = $app->add(['Text',$_SESSION['name']]);
}*/
$form = $app->layout->add('Form');
$form->setModel(new Friends($db));
$form->onSubmit(function($form) {
  if($form->model['age'] > 13) {
     $form->model->save();
     $_SESSION['name'] = $form->model['name'];


     return new \atk4\ui\jsExpression('document.location = "success.php" ');
     //return $form->success('Record upadate');
   } else {
  // return $form->error('age','-_-');
  return new \atk4\ui\jsExpression('document.location = "error.php" ');


 }
});

$grid = $app->layout->add('Grid');
$grid->setModel(new Friends($db));
$grid->addQuickSearch(['name','surname','phone_number']);

//$_SESSION['name'] = '';
unset($_SESSION['name']);

$button = $app->add('Button');
$button->set('Admin');
$button->link('check.php');
