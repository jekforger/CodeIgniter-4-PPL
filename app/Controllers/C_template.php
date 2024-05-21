<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_alattulis;

class C_template extends BaseController
{
    public function template()
    {
        return view('v_template');
    }

}