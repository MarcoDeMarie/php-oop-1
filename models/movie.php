<?php

class Movie{

  public $title;
  public $duration;
  
  
  public function __construct($_title, $_duration){
    $this->title = $_title;
    $this->duration = $_duration;
  }
  

  public function getTitle(){
    echo 'Titolo: ' . $this->title;
  }

  public function getDuration(){
    echo 'Durata: ' . $this->duration . ' minuti';
  }
}