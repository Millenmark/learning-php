<?php 

class Validator
{
  public function string($value) 
  {
    return strlen($_POST["body"]) === 0
  }
}