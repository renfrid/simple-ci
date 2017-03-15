<?php

/**
 * Created by PhpStorm.
 * User: renfrid
 * Date: 3/15/17
 * Time: 11:14 AM
 */
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        echo "Dashboard index page";
    }

}