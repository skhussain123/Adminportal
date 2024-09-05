<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {

        return View('Writers.index');
    }
}
