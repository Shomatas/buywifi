<?php

namespace App\Domain\User\Store;

use App\Domain\User\Store\DTO\UserRegisterDTO;

interface SaveUserInterface
{
    public function save(UserRegisterDTO $dto): int;
}