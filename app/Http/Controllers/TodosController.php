<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index() {//This metond returns the view for our index.blade.php
        return view("todos.index");//We use . to specify the todos folder and the index.blade.php inside of it.
    }
}
