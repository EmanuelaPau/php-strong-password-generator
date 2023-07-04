<?php 
    function createPassword($yourPasswordLenght) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ,.-_=+/?!@#$%^&*(){}[]:;<>';
        $password = '';
        for ($i = 0; $i <= $yourPasswordLenght; $i++ ) {
            $index = rand(0,strlen($characters));
            $password .= $characters[$index];
        }

        return $password;
    }
?>