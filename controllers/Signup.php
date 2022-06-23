<?php

class SignupController
{
    public function  index($page)
    {
        include('views/'.$page.'.php');
    }
}