<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index()
    {
        echo 'hai';
    }

    function pesan_dunia()
    {
        echo 'halo dunia';
    }
}
