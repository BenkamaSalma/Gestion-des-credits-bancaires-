<?php

class AdminloginController
{
    public function  index($page)
    {
        include('views/'.$page.'.php');
    }
}