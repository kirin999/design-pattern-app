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
        // 結果出力
        var_dump($result);
    }
}