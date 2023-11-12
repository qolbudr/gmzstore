<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Site;

class TenantWebController extends Controller
{
    public function index()
    {
        $theme = config('config.theme');
        return view('tenant.'.$theme.'.index');
    }
}
