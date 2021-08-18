<?php

function getUserEmails($users)
{
    $emails = [];

    foreach ($users as $user) {
        if ($user->email !== null) {
            $emails[] = $user->email;
        }
    }

    return $emails;
}
