<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStings extends Middleware
{

  /**
   * @var array
   */
  
  protected $except = [
    'current_password',
    'password',
    'password_confirmation'
  ];
}