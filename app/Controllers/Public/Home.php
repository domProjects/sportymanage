<?php

namespace App\Controllers\Public;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        // Render page
        $this->viewPublic('home');
    }
}
