<?php

namespace App\Http\Controllers;

class RobotsController extends Controller
{
    public function __invoke()
    {
        $content = "User-agent: *\n";
        $content .= "Allow: /\n\n";
        $content .= "Sitemap: " . route('sitemap') . "\n";

        return response($content, 200, [
            'Content-Type' => 'text/plain',
        ]);
    }
}
