<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();

        $urls = [
            ['loc' => route('home'), 'lastmod' => now()->toAtomString(), 'changefreq' => 'daily', 'priority' => '1.0'],
            ['loc' => route('about'), 'lastmod' => now()->toAtomString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => route('services.index'), 'lastmod' => now()->toAtomString(), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => route('areas'), 'lastmod' => now()->toAtomString(), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => route('gallery'), 'lastmod' => now()->toAtomString(), 'changefreq' => 'weekly', 'priority' => '0.7'],
            ['loc' => route('contact'), 'lastmod' => now()->toAtomString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
        ];

        foreach ($services as $service) {
            $urls[] = [
                'loc' => route('services.show', $service->slug),
                'lastmod' => $service->updated_at->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.8',
            ];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars($url['loc']) . '</loc>';
            $xml .= '<lastmod>' . $url['lastmod'] . '</lastmod>';
            $xml .= '<changefreq>' . $url['changefreq'] . '</changefreq>';
            $xml .= '<priority>' . $url['priority'] . '</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
