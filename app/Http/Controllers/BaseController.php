<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\UserSessionTrait;


class BaseController extends Controller
{

    //========= for getting current user===========================
    use UserSessionTrait;

}
