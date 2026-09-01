<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use App\Models\Service;
use App\Models\ServiceArea;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $services = Service::orderBy('order', 'asc')->get();
        $testimonials = Testimonial::latest()->get();
        $galleryItems = GalleryItem::latest()->take(6)->get();
        
        $areasByCity = ServiceArea::all()->groupBy('city');

        return view('pages.home', compact('services', 'testimonials', 'galleryItems', 'areasByCity'));
    }
}
