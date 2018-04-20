<?php

namespace App;

use App\Laatcode\BasePerson;

class Person extends BasePerson{

  protected $guarded = ['id', 'created_at', 'updated_at'];
  
}
