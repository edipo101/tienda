<?php

namespace App\Http\Controllers;

use App\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
    	$animes = Anime::
            join(DB::raw("(SELECT 
                p.*, c.categ_name, c.slug as categ_slug
                FROM products p
                INNER JOIN categories c ON p.category_id = c.id
                where p.type = 'ANIME'
                ) as product_stock"), function($join){
                $join->on('animes.product_id', '=', 'product_stock.id');
            })
            ->where('animes.premiere', 1)
            ->orderBy('animes.created_at', 'desc')
            ->limit(10)
            ->get();
        $dramas = Anime::
            join(DB::raw("(SELECT 
                p.*, c.categ_name, c.slug as categ_slug
                FROM products p
                INNER JOIN categories c ON p.category_id = c.id
                where p.type = 'ANIME'
                ) as product_stock"), function($join){
                $join->on('animes.product_id', '=', 'product_stock.id');
            })
            ->where('animes.premiere', 1)
            ->orderBy('animes.created_at', 'desc')
            ->limit(4)
            ->get();

        return view('home', compact(['animes', 'dramas']));
    }

    public function admin_home(){
        return view('admin.home');
    }
}
