<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __invoke()
    {
      //Route::view('admin.index');
    }

    public function index()
    {
      return 123;
    }

    public function create()
    {
      return 123;
    }
}
