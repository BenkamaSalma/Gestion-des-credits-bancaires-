<?php

class LoginController
{
    public function  index($page)
    {
        include('views/'.$page.'.php');
    }
}