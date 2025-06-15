<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Service;
use App\Models\Machine;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            url('/'),
            url('/about'),
            url('/contact'),
            // Add other static pages here
        ];

        // Dynamic URLs
        foreach (Blog::all() as $blog) {
            $urls[] = url('/blog/' . $blog->id);
        }
        foreach (Product::all() as $product) {
            $urls[] = url('/products/' . $product->id);
        }
        foreach (Service::all() as $service) {
            $urls[] = url('/services/' . $service->id);
        }
        foreach (Machine::all() as $machine) {
            $urls[] = url('/machines/' . $machine->id);
        }

        $xml = view('sitemap', compact('urls'))->render();
        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
