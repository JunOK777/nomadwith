<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    /**
     * Nameで1レコードを取得
     *
     * @var string $name
     * @return object
     */
    public function getFirstRecordByName($name);
}