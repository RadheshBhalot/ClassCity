<?php

use App\Http\Controllers\AddCartViewController;
use App\Http\Controllers\BillingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartyPlanningController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/aboutUs',function(){
return view('About');
})->name('about');

Route::get('/products',function(){
    return view('products');
})->name('products');

Route::get('/portfolio',function(){
return view('protfolio');
})->name('portfolio');


Route::get('/party', [PartyPlanningController::class, 'index'])->name('party.index');
Route::get('/party/{slug}', [PartyPlanningController::class, 'show'])->name('party.show');

Route::get('/servie',function(){
    return view('service');
})->name('service');

Route::get('/contact',function(){
return view('contact');
})->name('contact');
Route::post('/contact',[ContactController::class,'store'])  ->name('contact.store');

Route::get('/products/bars',function(){
    return view('productbars');
})->name('product.bars');   

Route::get('/product/casino',function(){
return view('Casino');
})->name('product.casino');

Route::get('/product/catering-equipment',function(){
    return view('productcatering-equipment');
})->name('products.catering-equipment');

Route::get('product/chairs',function(){
return view('productchairs');
})->name('products.charis');

Route::get('products/china',function(){
return view('productschina');
})->name('products.china');

Route::get('/product/ConcessionsSupplies',function(){
    return view('productsConcessions');
})->name('product.Concessions');

Route::get('product/Convention Meeting',function(){
    return view('productsConvention');
})->name('product.Convention');

Route::get('product/Entertainment',function(){
    return view('productEntertainment');
})->name('product.Entertainment');


Route::get('/products/Flatware',function(){
    return view('productFlatware');
})->name('product.Flatware');

Route::get('products/Glassware',function(){
    return view('productGlassware');
})->name('product.Glassware');

Route::get('product/HeartFans',function(){
    return view('productsHeartFans');
})->name('product.HeartFans');

Route::get('product/light',function(){
    return view('productLights');
})->name('product.light');

Route::get('/product/outdoor-equipment',function(){
return view('productoutdoorequipment');
})->name('product.outdoor');

Route::get('/product/punch-fountains-bowls',function(){
    return view('productpunchfountainsbowls');
})->name('product.Punch');

Route::get('/product/serving-pieces',function(){
    return view('productservice');
})->name('product.service');

Route::get('/product/tables',function(){
return view('producttables');
})->name('product.tables');

Route::get('/product/wedding-supplies',function(){
return view('productwedding-supplies');
})->name('product-wedding');

Route::get('/product/lenin',function(){
return view('productlenin');
})->name('product.lenin');

Route::get('/product/Tents-or-Canopies',function(){
return view('productTents');
})->name('product.Tents');

Route::get('/product/side-walls',function(){
return view('productsidewalls');
})->name('product.side-walls');

Route::post('/cart-add', [AddCartViewController::class, 'AddCart'])->name('cart.add');
Route::get('/viewcart/details',function(){
    return view('ShoppingcartView');
})->name('viewcart');
Route::get('viewcart/delete/{id}', [AddCartViewController::class, 'delete'])->name('delete');
Route::get('viewcart', [AddCartViewController::class, 'view'])->name('shoppingcart.view');

Route::get('product/billing-information', [AddCartViewController::class, 'billing'])->name('billing');

Route::get('/billingcheck', [AddCartViewController::class, 'billing'])->name('checkout');

// Form POST
Route::post('product/billing', [BillingController::class, 'storeBill'])->name('bill');


// Route::get('/product/tips/Choosing-party-bar-rentals',function(){
//     return view('party-bar-rental');
// })->name('trip.barrentals');
// Route::get('/countview',[AddCartViewController::class,'countview'])->name('viww');
