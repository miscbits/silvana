<?php

namespace App\Http\Controllers\Quarx;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Quarx\Modules\Products\Services\ProductService;

class ProductsController extends Controller
{
    public function __construct(ProductService $productService)
    {
        $this->service = $productService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = $this->service->paginated();
        return view('quarx-frontend::products.all')->with('products', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->service->find($id);
        return view('quarx-frontend::products.show')->with('product', $product);
    }
}
