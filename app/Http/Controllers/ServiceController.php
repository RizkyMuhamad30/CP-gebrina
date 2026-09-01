<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order', 'asc')->get();
        return view('pages.services.index', compact('services'));
    }

    public function show(Service $service)
    {
        $otherServices = Service::where('id', '!=', $service->id)->orderBy('order', 'asc')->get();
        return view('pages.services.show', compact('service', 'otherServices'));
    }
}
