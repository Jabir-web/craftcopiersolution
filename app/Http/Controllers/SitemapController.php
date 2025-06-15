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
            url('/aboutus'),
            url('/contact'),
        ];

        foreach (Blog::all() as $blog) {
            $urls[] = url('/blogs/' . $blog->id);
        }
        foreach (Product::all() as $product) {
            $urls[] = url('/machines/' . $product->id);
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
