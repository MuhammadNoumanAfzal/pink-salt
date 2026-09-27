<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SitemapController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', true)->get();
        
        $urls = [
            ['url' => url('/'), 'lastmod' => date('Y-m-d'), 'changefreq' => 'daily', 'priority' => '1.0'],
            ['url' => url('/about'), 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => url('/products'), 'lastmod' => date('Y-m-d'), 'changefreq' => 'daily', 'priority' => '0.9'],
            ['url' => url('/certifications'), 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => url('/export-logistics'), 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['url' => url('/contact'), 'lastmod' => date('Y-m-d'), 'changefreq' => 'weekly', 'priority' => '0.9'],
        ];

        foreach ($products as $p) {
            $urls[] = [
                'url' => url('/products#' . $p->slug),
                'lastmod' => $p->updated_at ? $p->updated_at->format('Y-m-d') : date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => '0.8'
            ];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        foreach ($urls as $u) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars($u['url']) . '</loc>';
            $xml .= '<lastmod>' . $u['lastmod'] . '</lastmod>';
            $xml .= '<changefreq>' . $u['changefreq'] . '</changefreq>';
            $xml .= '<priority>' . $u['priority'] . '</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }
}
