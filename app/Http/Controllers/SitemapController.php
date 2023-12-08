<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $pages = [
            ['url' => route('landing.index'), 'lastmod' => '2023-12-09', 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['url' => route('landing.about'), 'lastmod' => '2023-12-09', 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['url' => route('landing.contact'), 'lastmod' => '2023-12-09', 'changefreq' => 'weekly', 'priority' => '1.0'],
        ];

        $xml = new \XMLWriter();
        $xml->openMemory();
        $xml->startDocument('1.0', 'UTF-8');
        $xml->startElement('urlset');
        $xml->writeAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

        foreach ($pages as $page) {
            $xml->startElement('url');
            $xml->writeElement('loc', $page['url']);
            $xml->writeElement('lastmod', $page['lastmod']);
            $xml->writeElement('changefreq', $page['changefreq']);
            $xml->writeElement('priority', $page['priority']);
            $xml->endElement();
        }

        $xml->endElement();
        $xml->endDocument();

        return Response::make($xml->outputMemory(), 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
