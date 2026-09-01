<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use App\Models\ServiceArea;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function areas()
    {
        $areasByCity = ServiceArea::all()->groupBy('city');
        return view('pages.areas', compact('areasByCity'));
    }

    public function gallery(Request $request)
    {
        $category = $request->query('category');
        
        $query = GalleryItem::latest();
        if ($category && $category !== 'all') {
            $query->where('category', $category);
        }

        $galleryItems = $query->get();
        $categories = [
            'all' => 'Semua Foto',
            'sedot-wc' => 'Sedot WC',
            'saluran-mampet' => 'Saluran Mampet',
            'septic-tank' => 'Septic Tank',
            'limbah-industri' => 'Limbah & Restoran',
            'armada' => 'Armada & Tim',
        ];

        return view('pages.gallery', compact('galleryItems', 'categories', 'category'));
    }
}
