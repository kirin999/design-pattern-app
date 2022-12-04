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

    public function getUserDataTime()
    {
        $start = microtime(true);
        $memory = memory_get_usage();

        //データ取得
        $data = $this->User->getAll();

        $result = [
            // どちらのリポジトリを使用しているかわかるように
            'name'      => get_class($this->User),
            // 実行時間
            'time'      => microtime(true) - $start,
            // 使用メモリ
            'memory'    => (memory_get_peak_usage() - $memory) / (1024 * 1024)
        ];

        return $result;
    }
}