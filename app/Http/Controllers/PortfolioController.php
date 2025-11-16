<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function details(Portfolio $portfolio)
    {
        // return implode(',',$portfolio->category);
        return view("main.details", compact("portfolio"));
    }
}
