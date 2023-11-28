<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoly;

class CategolyController extends Controller
{
   public function index(Categoly $categoly)
    {
        return view('categolies.index')->with(['posts' => $categoly->getByCategoly()]);
    } 
}