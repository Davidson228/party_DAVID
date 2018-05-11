<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('База данных');
$app->initLayout('Centered');
$msg = $app->add(['Message','Ko tu tači ar mani bazare','type'=>'error','icon'=>'warning sign']);

$button = $app->add('Button');
$button->set('Go home');
$button->link('index.php');
 
