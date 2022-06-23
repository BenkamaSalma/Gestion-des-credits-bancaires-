<?php

class LoginmanagerController
{
    public function  index($page)
    {
        include('views/'.$page.'.php');
    }
}