<?php

use App\Http\Controllers\AccessoryRequestController;
use App\Http\Controllers\ClientRentalController;
use App\Http\Controllers\ClientRepairController;
use App\Http\Controllers\SitemapController;
use App\Livewire\AboutPage;
use App\Livewire\BlogPage;
use App\Livewire\ContactPage;
use App\Livewire\HomePage;
use App\Livewire\MachinePage;
use App\Livewire\ServicePage;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

// Route::get('/', function () {
//     return view('welcome');
// });


// for home page routes
Route::get('/',HomePage::class)->name('homepage');
Route::get('/aboutus',AboutPage::class)->name('aboutpage');
Route::get('/contact',ContactPage::class)->name('contactpage');
Route::get('/machines/{product_id?}', MachinePage::class)->name('machines');
Route::get('/services/{service_id?}', ServicePage::class)->name('services');
Route::get('/blogs/{title?}', BlogPage::class)->name('blogpage');
Route::post('/accessory-requests', [AccessoryRequestController::class, 'store'])->name('accessory-requests.store');
Route::post('/client-rentals', [ClientRentalController::class, 'store'])->name('client-rentals.store');
Route::post('/client-repairs', [ClientRepairController::class, 'store'])->name('client-repairs.store');
Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/aboutus'))
        ->add(Url::create('/contact'));
    // Add dynamic URLs as needed, e.g.:
    // foreach (App\Models\Blog::all() as $blog) {
    //     $sitemap->add(Url::create('/blogs/' . $blog->id));
    // }
    return $sitemap->toResponse(request());
});


Route::get('/storage/{path}', function ($path) {
    $file = storage_path('app/public/' . $path);

    if (!file_exists($file)) {
        abort(404); // Show 404 page if the file is missing
    }

    return response()->file($file);
})->where('path', '.*'); // 🔥 This allows subfolders like uploads/machine/image.jpg