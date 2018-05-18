<?php


$db = new
\atk4\data\Persistence_SQL('mysql:dbname=heroku_35a63eb77fee245;host=eu-mm-auto-fra-02-c.cleardb.net','bfa11752c77b7d','77c43c35');
class Friends extends \atk4\data\Model {
 public $table = 'david';
 function init() {
   parent::init();
   $this->addField('name');
   $this->addField('surname');
   $this->addField('phone_number',['default'=>+371]);
   $this->addField('email');
   $this->addField('age');
 //  $this->addField('password',['type']);
 $this->addField('birthsday',['type'=>'date']);
   $this->addField('notes',['type'=>'text']);
 }
}
