<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class PartyPlanningController extends Controller
{
    private $data;

    public function __construct()
    {
        $this->data = collect([
            ['title' => 'Party Bar Rentals Tips', 'image' => '1 - Copy - Copy.jpg'],
            ['title' => 'TENT AND CANOPY RENTAL GUIDE', 'image' => '15e.jfif'],
            ['title' => 'CASINO PARTY RENTALS GUIDE', 'image' => '3 - Copy.jpg'],
            ['title' => 'PARTY CARTERING RENTAL GUIDE', 'image' => '4P.jpg'],
            ['title' => 'Party Chair Rental Guide', 'image' => '5P.jpg'],
            ['title' => 'Party Chinaware Rental Tips', 'image' => '6P.jpg'],
            ['title' => 'Concession Equipment Rental Tips', 'image' => '7p.jpg'],
            ['title' => 'Dance Floor and Bubble Machine Rental Tips', 'image' => '8p.jpg'],
            ['title' => 'Flatware Rental Tips', 'image' => '4P.jpg'],
            ['title' => 'Party Fountain Rental Tips', 'image' => '10P.jpg'],
            ['title' => 'Outdoor Garden Party Rental Ideas', 'image' => '13p.jpg'],
            ['title' => 'Wedding Party Glassware Rentals Tips', 'image' => '14P.jpg'],
            ['title' => 'Outdoor Party Heaters and Coolers Rental Tips', 'image' => '17P.jpg'],
            ['title' => 'Wedding Party Lighting Tips', 'image' => '18P.jpg'],
        ])->map(function ($item) {
            $item['slug'] = Str::slug($item['title']);
            return $item;
        });

    }

    public function index(Request $request)
    {
        $perPage = 6;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $this->data->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $paginated = new LengthAwarePaginator(
            $currentItems,
            $this->data->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('party', compact('paginated')); 
    }

    public function show($slug)
    {
        $item = $this->data->firstWhere('slug', $slug);

        if (!$item) {
            abort(404);
        }
        return view('party-details', compact('item'));
    }
}
