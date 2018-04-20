<?php

namespace App\Laatcode;

use Illuminate\Database\Eloquent\Model;

class BasePerson extends Model{

  protected $names;
  protected $surnames;
  protected $taxType;
  protected $taxId;
  protected $birthdate;

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

  function __construct3($names, $surnames, $birthdate){
    $this->names = $names;
    $this->surnames = $surnames;
    $this->birthdate = $birthdate;
  }

  function __construct4($names, $surnames, $taxType, $taxId){
    $this->names = $names;
    $this->surnames = $surnames;
    $this->taxType = $taxType;
    $this->taxId = $taxId;
  }

  function __construct5($names, $surnames, $taxType, $taxId, $birthdate){
    $this->names = $names;
    $this->surnames = $surnames;
    $this->taxType = $taxType;
    $this->taxId = $taxId;
    $this->birthdate = $birthdate;
  }

  // Getters
  function getPerson(){
    return [
      'names' => $this->names,
      'surnames' => $this->surnames,
      'taxType' => $this->taxType,
      'taxId' => $this->taxId,
      'birthdate' => $this->birthdate,
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
    return $this->birthdate;
  }

  //Setters
  function setPerson($person){
    $this->names = $person['names'];
    $this->surnames = $person['surnames'];
    $this->taxType = $person['taxType'];
    $this->taxId = $person['taxId'];
    $this->birthdate = $person['birthdate'];
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

  function setBirth($birthdate){
    $this->birthdate = $birthdate;
  }
}
