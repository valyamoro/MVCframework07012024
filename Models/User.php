<?php

namespace app\Models;


use app\Core\Model;

class User extends Model
{
    const TABLE_NAME = 'users3';

    public string $id;
    public string $email;
    public string $firstName;
    public string $lastName;
    public string $password;

    public function add(): bool
    {
        $query = 'INSERT INTO ' . static::TABLE_NAME . ' (email, firstName, lastName, password) VALUES (:email, :firstName, :lastName, :password)';

        $sth = $this->connectionDB()->prepare($query);
        $sth->execute([
            'email' => $this->email,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'password' => $this->password
        ]);

        return (bool)$sth->rowCount();
    }

    public function getPasswordByEmail(string $email): array
    {
        $query = 'SELECT password FROM ' . static::TABLE_NAME . ' WHERE email=?';

        $sth = $this->connectionDB()->prepare($query);
        $sth->execute([$email]);

        return $sth->fetch();
    }

}
