<?php

namespace App\Laatcode;

class Person{

  public $names;
  public $surnames;
  public $taxType;
  public $taxId;
  public $birth;

  function __construct(){
    $params = func_get_args();
    $numParams = func_num_args();

    $construct = '__construct' . $numParams;

    if (method_exists($this, $construct)) {
      call_user_func_array(array($this, $construct), $params);
    }
  }

  function __construct1($names){
    $this->names = $names;
  }

  function __construct2($names, $surnames){
    $this->names = $names;
    $this->surnames = $surnames;
  }

  function __construct3($names, $surnames, $birth){
    $this->names = $names;
    $this->surnames = $surnames;
    $this->birth = $birth;
  }

  function __construct4($names, $surnames, $taxType, $taxId){
    $this->names = $names;
    $this->surnames = $surnames;
    $this->taxType = $taxType;
    $this->taxId = $taxId;
  }

  function __construct5($names, $surnames, $taxType, $taxId, $birth){
    $this->names = $names;
    $this->surnames = $surnames;
    $this->taxType = $taxType;
    $this->taxId = $taxId;
    $this->birth = $birth;
  }
}
