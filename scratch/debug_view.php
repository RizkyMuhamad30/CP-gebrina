<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    $services = \App\Models\Service::all();
    $testimonials = \App\Models\Testimonial::all();
    $galleryItems = \App\Models\GalleryItem::all();
    $areasByCity = \App\Models\ServiceArea::all()->groupBy('city');

    $view = view('pages.home', compact('services', 'testimonials', 'galleryItems', 'areasByCity'))->render();
    echo "VIEW_RENDER_SUCCESS\n";
} catch (\Throwable $e) {
    echo "VIEW_ERROR: " . $e->getMessage() . "\n";
    echo "IN FILE: " . $e->getFile() . " ON LINE: " . $e->getLine() . "\n";
    echo $e->getTraceAsString() . "\n";
}
