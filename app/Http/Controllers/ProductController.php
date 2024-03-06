<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
   
    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $products = Product::all();
        $products = Arr::sortDesc($products);

        return view('products.index', ['products' => $products]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('products.create', ['categories' => $categories, 'suppliers' => $suppliers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Product::create($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $product = Product::where('id', $id)->first();

        $categories = Category::all();
        $suppliers = Supplier::all();

        if(empty ($product)){
            return 'Produto não exixte';
        }

        return view('products.show', ['product' => $product, 'categories' => $categories, 'suppliers' => $suppliers]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::where('id', $id)->first();

        $categories = Category::all();
        $suppliers = Supplier::all();

        if(empty ($product)){
            return 'Produto não exixte';
        }

        return view('products.edit', ['product' => $product, 'categories' => $categories, 'suppliers' => $suppliers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nome' => $request -> nome,
            'valor' => $request -> valor,
            'quantidade' => $request -> quantidade,
            'category_id' => $request -> categoria,
            'supplier_id' => $request -> fornecedor,
        ];

        Product::where('id', $id)->update($data);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'Product destroy ok';
    }
}
