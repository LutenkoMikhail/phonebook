<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ResetDataBaseController extends Controller
{
    public function reset()
    {
        Artisan::call('migrate:reset');
        Artisan::call('migrate');
        return redirect()->route('index');
    }

}

