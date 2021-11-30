<?php

namespace App\Http\Controllers;

use App\Models\Source;
use Illuminate\Http\Request;
use App\Models\Country;

class SourcesController extends Controller
{
    public function index() {

        return view("sources.donate",[]);
    }

    public function sources() {

    return view("sources.index",[
        "sources" => Source::with('Country')->get()
    ]);
}
}
