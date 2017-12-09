<?php

namespace utility;


class registration
{
    public static function setPassword($password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        return $password;
    }

}

?>