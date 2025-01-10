<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

abstract class Controller
{
    protected $authUser;

    public function __construct()
    {
        $this->authUser = Auth::user();
    }
}
