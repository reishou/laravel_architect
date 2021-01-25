<?php

namespace App\Core\Component\User\Domain;

use App\Core\SharedKernel\Component\User\Domain\UserId;
use Serializable;

/**
 * Class User
 *
 * @package App\Core\Component\User\Domain
 */
class User implements Serializable
{
    /**
     * @var UserId
     */
    private UserId $id;
    /**
     * @var string
     */
    private string $email;
    /**
     * @var string
     */
    private string $password;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->id = new UserId();
    }

    public static function create(
        string $email
    ) {
        $user = new self();
        $user->setEmail($email);
    }

    /**
     * @return UserId
     */
    public function getId(): UserId
    {
        return $this->id;
    }

    /**
     * @param UserId $id
     */
    public function setId(UserId $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function serialize()
    {
        // TODO: Implement serialize() method.
    }

    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
    }
}
