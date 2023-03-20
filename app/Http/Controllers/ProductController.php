<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductVariation;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = 'Example product';
        $product->description = 'This is an example product';
        $product->image = 'https://example.com/product-image.jpg';
        $product->save();

        $variation1 = new ProductVariation;
        $variation1->product_id = $product->id;
        $variation1->name = 'Small';
        $variation1->sku = 'PROD001-S';
        $variation1->price = 19.99;
        $variation1->save();

        $variation2 = new ProductVariation;
        $variation2->product_id = $product->id;
        $variation2->name = 'Medium';
        $variation2->sku = 'PROD001-M';
        $variation2->price = 24.99;
        $variation2->save();

        $variation3 = new ProductVariation;
        $variation3->product_id = $product->id;
        $variation3->name = 'Large';
        $variation3->sku = 'PROD001-L';
        $variation3->price = 29.99;
        $variation3->save();
/**
 * ProductVariation jodi nirdisto hoy tahole sei onujayi price dite hobe nicher ta nirdisto vabe variation table er udahoron 
 * amake sei onujayi database deisgn korte hobe 
 * ProductVariation database design [
 * name er poriborte: 
 * [
 *      size
 *      color
 *  amr database design link: https://drawsql.app/teams/jahangir-1/diagrams/ecomdatabase
 * ]
 * hobe
 */



        // $product = new Product;
        // $product->name = 'Example Product';
        // $product->description = 'This is an example product with variations.';
        // $product->price = 19.99; // set the default price here
        // $product->save();

        // $variation1 = new Variation;
        // $variation1->product_id = $product->id;
        // $variation1->size = 'Small';
        // $variation1->color = 'Red';
        // $variation1->price = 19.99; // set the variation price here
        // $variation1->stock = 10;
        // $variation1->save();

        // $variation2 = new Variation;
        // $variation2->product_id = $product->id;
        // $variation2->size = 'Medium';
        // $variation2->color = 'Blue';
        // $variation2->price = 24.99; // set the variation price here
        // $variation2->stock = 5;
        // $variation2->save();

    }
}
