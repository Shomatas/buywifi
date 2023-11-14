<?php

namespace App\Domain\User;

use App\Domain\User\Store\DTO\UserRegisterDTO;
use App\Domain\User\Store\SaveUserInterface;

class UserRegistration
{

    public function __construct(
        private SaveUserInterface $userSaver,
    )
    {

    }
    public function register(User $user): void
    {
        error_reporting(E_ALL);
        $dto = new UserRegisterDTO();
        $data = $this->userSaver->save($dto);
        var_dump($data);
    }
}