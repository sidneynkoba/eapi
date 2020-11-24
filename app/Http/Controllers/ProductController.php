<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\ProductCollection;


class ProductController extends Controller
{

  public function index()
  {
    return ProductCollection::collection(Product::all());
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    //
  }

  public function show(Product $product)
  {
    return new ProductResource($product);
  }

  public function edit(Product $product)
  {
    //
  }



}
