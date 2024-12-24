<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display the products page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Manual product data (replace this with database queries as needed)
        $products = [
            [
                'id' => 1,
                'name' => 'Product Name 1',
                'description' => 'This is a description for product 1.',
                'price' => 29.99,
                'image' => asset('img/product1.png'),
            ],
            [
                'id' => 2,
                'name' => 'Product Name 2',
                'description' => 'This is a description for product 2.',
                'price' => 49.99,
                'image' => asset('img/product2.png'),
            ],
            [
                'id' => 3,
                'name' => 'Product Name 3',
                'description' => 'This is a description for product 3.',
                'price' => 19.99,
                'image' => asset('img/product3.png'),
            ],
            [
                'id' => 4,
                'name' => 'Product Name 4',
                'description' => 'This is a description for product 4.',
                'price' => 39.99,
                'image' => asset('img/product4.png'),
            ],
        ];

        // Pass products data to the view
        return view('product', [
            'products' => $products
        ]);
    }
}