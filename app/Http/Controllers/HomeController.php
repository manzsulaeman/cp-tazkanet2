<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Data produk contoh
        $products = [
            [
                'id' => 1,
                'name' => 'Product 1',
                'image' => asset('img/product1.jpg'),
                'description' => 'Description for product 1',
            ],
            [
                'id' => 2,
                'name' => 'Product 2',
                'image' => asset('img/product2.jpg'),
                'description' => 'Description for product 2',
            ],
        ];

        // Kirim data produk ke view
        return view('home', ['products' => $products]);
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the product page.
     *
     * @return \Illuminate\View\View
     */
    public function product()
    {
        // Data produk contoh
        $products = [
            [
                'id' => 1,
                'name' => 'Product 1',
                'image' => asset('img/product1.jpg'),
                'description' => 'Description for product 1',
            ],
            [
                'id' => 2,
                'name' => 'Product 2',
                'image' => asset('img/product2.jpg'),
                'description' => 'Description for product 2',
            ],
        ];

        // Kirim data produk ke view
        return view('product', ['products' => $products]);
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Handle the form submission from the contact page.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeContact(Request $request)
    {
        // Validasi dan simpan data kontak (contoh implementasi sederhana)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Logika untuk menyimpan data kontak atau mengirim email
        // Anda dapat menambahkan logika ini sesuai kebutuhan aplikasi Anda

        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
