<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function product($type)
    {
        $categories = Category::where('type', '=', $type)->first();
        $products = DB::table('products')
            ->leftJoin('categories', 'products.categories_id', '=', 'categories.id')
            ->where('categories.type', '=', $type)
            ->get();

        return view('users.pages.product.product', compact('products', 'categories'));
    }

    public function productCategory($type, $categorySlug)
    {
        $productCategories = Category::where('slug', $categorySlug)->first();

        if (Product::where('categories_id', $productCategories->id)->exists()) {
            $products = Product::where('categories_id', $productCategories->id)->get();

            return view('users.pages.product.product-category', compact('products', 'productCategories'));
        } else {
            return redirect('/')->with('view', 'The link was broken');
        }
    }

    public function productDetail($productSlug)
    {
        if (Product::where('products_slug', $productSlug)->exists()) {
            $products = Product::where('products_slug', $productSlug)->first();

            return view('users.pages.product.product-detail', compact('products'));
        } else {
            return view('users.pages.product.product');
        }
    }
}
