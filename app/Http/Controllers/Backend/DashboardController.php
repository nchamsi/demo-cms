<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/16/2018
 * Time: 1:43 PM
 */

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function __construct()
    {

    }

    function index(){
        echo 'dcm';die();
        return view('backend.dashboard.index');
    }
}