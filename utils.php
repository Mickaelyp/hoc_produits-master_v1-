<?php
namespace App;
class utils{
    public static function redirect (string $location): void
        {
            header('Location: index.php');
            exit;
        }

}
