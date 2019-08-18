<?php

require __DIR__ . '/autoload.php';
$user = new \App\Models\User();
$user = $user->findById(1);


function sendEmail(\App\Models\User $user, string $message)
{
    echo 'Почта уходит на ' . $user->email;
}

sendEmail($user, 123);