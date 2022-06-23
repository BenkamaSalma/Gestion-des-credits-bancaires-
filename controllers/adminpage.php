<?php

class AdminpageController
{
    public function  index($page)
    {
        include('views/'.$page.'.php');
    }
}