<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($id)
    {
        return view("page.{$id}");
    }
}
