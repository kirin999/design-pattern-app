<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserDataAccessService AS UserDataAccess;

class SampleController extends Controller
{
    protected $User;

    public function __construct(UserDataAccess $UserDataAccessService)
    {
        $this->User = $UserDataAccessService;
    }

    public function index()
    {
        $result = $this->User->getUserDataTime();
        // η΅ζεΊε
        var_dump($result);
    }
}