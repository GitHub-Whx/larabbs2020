<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function run(Request $request) {
        return $this->view('pages.root');
    }
}
