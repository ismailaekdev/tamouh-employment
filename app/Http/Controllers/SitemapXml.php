<?php

namespace App\Http\Controllers;

use App\Enums\Locale;
use Illuminate\Http\Response;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapXml extends Controller
{
    public function __invoke(): Response
    {
        $sitemap = Sitemap::create();

        $routes = [
            'front.home',
            'front.contact',
            'front.services',
        ];

        foreach (Locale::cases() as $locale) {
            foreach ($routes as $route) {
                $sitemap->add(Url::create(route($route, ['locale' => $locale])));
            }
        }

        return response($sitemap->render(), 200)
            ->header('Content-Type', 'application/xml');
    }
}
