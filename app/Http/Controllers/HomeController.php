<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $services = Service::where('published',true)->get();
        $portfolios = Portfolio::where('published',true)->get();
        $clients = Client::where('visible',true)->get();
        return view("main.home",compact('services','portfolios','clients'));
    }
}
