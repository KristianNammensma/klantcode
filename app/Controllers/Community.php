<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Community extends BaseController
{
    public function index()
    {
        return view('community', array('title1'=>'Goat mode',
        'title2'=>'Goat mode status:.',
        'content'=>'Goat mode has not been activated yet.',
        'f'=>'Goat mode can be activated once the folowing requirements are applied to the situation'));
    }
}
