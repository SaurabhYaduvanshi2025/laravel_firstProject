<?php

namespace App\Http\Controllers;

class Controller
{
    public function getUser()
    {
        return 'code with saurabh';
    }

    public function commentsUser(): string
    {
        return 'Hello this is Comments Section';
    }

    public function name(): string
    {
        return 'Hello This is name Section ';
    }
}
