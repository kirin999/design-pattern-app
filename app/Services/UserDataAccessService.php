<?php
namespace App\Services;

use App\Models\User;
use App\Repositories\User\UserDataAccessRepositoryInterface AS UserDataAccess;


class UserDataAccessService
{
    protected $User;

    public function __construct(UserDataAccess $UserDataAccess)
    {
        $this->User = $UserDataAccess;
    }

    public function getUserData()
    {
        $data = $this->User->getAll();
        return $data;
    }
}