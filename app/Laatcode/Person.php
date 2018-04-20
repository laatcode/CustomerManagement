<?php

namespace App\Laatcode;

class Person extends Model{

  protected $names;
  protected $surnames;
  protected $taxType;
  protected $taxId;
  protected $birth;

  // Constructors
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

  // Getters
  function getPerson(){
    return [
      'names' => $this->names,
      'surnames' => $this->surnames,
      'taxType' => $this->taxType,
      'taxId' => $this->taxId,
      'birth' => $this->birth,
    ];
  }

  function getNames(){
    return $this->names;
  }

  function getSurnames(){
    return $this->surnames;
  }

  function getTaxType(){
    return $this->taxType;
  }

  function getTaxId(){
    return $this->taxId;
  }

  function getBirth(){
    return $this->birth;
  }

  //Setters
  function setPerson($person){
    $this->names = $person['names'];
    $this->surnames = $person['surnames'];
    $this->taxType = $person['taxType'];
    $this->taxId = $person['taxId'];
    $this->birth = $person['birth'];
  }

  function setNames($names){
    $this->names = $names;
  }

  function setSurnames($surnames){
    $this->surnames = $surnames;
  }

  function setTaxType($taxType){
    $this->taxType = $taxType;
  }

  function setTaxId($taxId){
    $this->taxId = $taxId;
  }

  function setBirth($birth){
    $this->birth = $birth;
  }
}
