<?php

namespace App\Http\Controllers;

use App\Anime;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimeController extends Controller
{   
    public function show_all(){
        $products = Anime::
            join(DB::raw("(SELECT 
                p.*, c.categ_name, c.slug as categ_slug
                FROM products p
                INNER JOIN categories c ON p.category_id = c.id
                where p.type = 'ANIME'
                ) as product_stock"), function($join){
                $join->on('animes.product_id', '=', 'product_stock.id');
            })
            ->orderBy('animes.created_at', 'desc')
            ->paginate(18);
        return view('pages.animes.all', compact('products'));
    }

    public function by_category($slug){
        $category = Category::where('slug', $slug)->value('categ_name');
        $products = Anime::
            join(DB::raw("(SELECT 
                p.*, c.categ_name, c.slug as categ_slug
                FROM products p
                INNER JOIN categories c ON p.category_id = c.id
                where p.type = 'ANIME' AND
                c.slug = '".$slug."'
                ) as product_stock"), function($join){
                $join->on('animes.product_id', '=', 'product_stock.id');
            })
            ->orderBy('animes.created_at', 'desc')
            ->paginate(18);
        return view('pages.animes.by_category', compact('products'))->with(['category' => $category]);
    }

    public function show_premiere(){
        $products = Anime::
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
            ->paginate(18);
        return view('pages.animes.premiere', compact('products'));
    }

    public function audio($audio){
        switch ($audio) {
            case 'jap':
                $audio = 'JAPONES';
                break;
            case 'cast':
                $audio = 'CASTELLANO';
                break;
            case 'lat':
                $audio = 'LATINO';
                break;
            default:
                $audio = 'JAPONES';
                break;
        }
        $products = Anime::
            join('products', 'products.id', '=', 'animes.product_id')
            ->join('categories', 'categories.id', '=', 'animes.category_id')
            ->select('products.name', 'products.slug', 'products.sale_price', 'products.folder_image', 'products.image')
            ->addselect('animes.*', 'categories.categ_name')
            ->where([
                // ['type', 'ANIME'],
                ['audio', $audio],
            ])
            ->orderBy('animes.created_at', 'desc')
            ->paginate(18);
        $audio = strtolower($audio);
        return view('pages.animes.audio', compact('products'))->with(['audio' => $audio]);
    }

    public function details($slug){
        $product = Anime::
            join(DB::raw("(SELECT 
                p.id, p.name, p.slug, p.sale_price, p.image,  
                c.categ_name, c.slug as categ_slug
                FROM products p
                INNER JOIN categories c ON p.category_id = c.id
                where p.type = 'ANIME'
                ) as product_stock"), function($join){
                $join->on('animes.product_id', '=', 'product_stock.id');
            })
            // ->addSelect('type')
            ->where([
                ['slug', '=', $slug],
                // ['type', '=', 'ANIME'],
            ])
            ->first();
        if(is_null($product))
            return view('errors.404');
        return view('pages.animes.details', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anime = new Anime;
        $options = options_state();
        return view('animes/create', compact(['anime', 'options']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Product
            'name' => 'required',
            'description' => 'required',
            'purchase_price' => 'required',
            'sale_price' => 'required',

            // Anime
            'episodes' => 'required',
            'state' => 'required',
        ]);

        $product = new Product;
        $product->name = request('name');
        $product->slug = str_slug($product->name);
        $product->barcode = '123468648521'; // Generar automáticamente
        $product->category_id = 1; // Categoria Anime
        $product->description = request('description');
        $product->purchase_price = request('purchase_price');
        $product->sale_price = request('sale_price');
        $product->save();

        $anime = new Anime;
        $anime->product_id = $product->id;
        $anime->synopsis = request('synopsis');
        $anime->episodes = request('episodes');
        $anime->release_date = request('release_date');
        $anime->state = request('state');
        $anime->save();

        return redirect()->route('animes.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            ->select('product_stock.name', 'product_stock.slug', 'animes.*')
            ->orderBy('animes.created_at', 'desc')
            ->paginate(25);
        return view('admin.animes.index', compact('animes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $anime = Anime::
            join('products as p', 'p.id', '=', 'animes.product_id')
            ->select('p.name', 'p.slug', 'p.description', 'p.barcode', 'p.purchase_price', 'p.sale_price', 'p.image')
            ->addSelect('animes.*')
            ->where('p.slug', $slug)
            ->first();

        return view('admin.animes.show', compact('anime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $anime = DB::table('animes')
            ->select('products.name', 'products.description', 'products.barcode', 'products.purchase_price', 'products.sale_price', 'animes.*')
            ->where('slug', $slug)
            ->join('products', 'products.id', '=', 'animes.product_id')
            ->first();

        $options = options_state();
        return view('animes/edit', compact(['anime', 'options']));
        // var_dump($anime);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $anime = Anime::findOrFail($id);
        $product = Product::findOrFail($anime->product_id);
        // var_dump($anime);
        // var_dump($product);
        // var_dump($request->request);
        $validatedData = $request->validate([
            // Product
            'name' => 'required',
            'description' => 'required',
            'purchase_price' => 'required',
            'sale_price' => 'required',

            // Anime
            'episodes' => 'required',
            'state' => 'required',
        ]);

        // $product = new Product;
        $product->name = request('name');
        $product->slug = str_slug($product->name);
        // $product->barcode = '123468648521'; // Generar automáticamente
        // $product->category_id = 1; // Categoria Anime
        $product->description = request('description');
        $product->purchase_price = request('purchase_price');
        $product->sale_price = request('sale_price');
        $product->save();

        // $anime = new Anime;
        // $anime->product_id = $product->id;
        $anime->synopsis = request('synopsis');
        $anime->episodes = request('episodes');
        $anime->release_date = request('release_date');
        $anime->state = request('state');
        $anime->save();

        return redirect()->route('animes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anime $anime)
    {
        //
    }
}
