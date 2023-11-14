<?php

class UserRegistrationTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function register(): void
    {
        $this->expectNotToPerformAssertions();
        $userSaverMock = $this->createMock(\App\Domain\User\Store\SaveUserInterface::class);
        $userRegister = new \App\Domain\User\UserRegistration($userSaverMock);
        $userRegister->register(new \App\Domain\User\User());
    }
}