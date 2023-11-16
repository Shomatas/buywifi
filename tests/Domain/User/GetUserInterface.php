<?php

namespace Test\Domain\User;

use App\Domain\User\Store\DTO\UserDTO;

interface GetUserInterface
{
    public function get(int $id): UserDTO;
}