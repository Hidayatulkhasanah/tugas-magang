<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function fetchData()
    {
    }


    public function showProducts()
    {
        // Fetch products from the API
        $response = Http::get('https://b335-116-206-14-20.ngrok-free.app/api/v1/product/'); //ini buat get nya 
        $products = $response->json()['data']; // Adjust this based on the actual structure of your API response

        // Pass the products to the view
        return view('pelanggan.product.index', compact('product'));
    }
    public function index()
    {
        // buat get dari API yang menghasilkan response
        $response = Http::get('https://b335-116-206-14-20.ngrok-free.app/api/v1/product/');
        $data = $response->json();

        // Ambil data dari response
        return view('pelanggan.page.home', [
            'data' => $data,
            'title' => 'Home',
        ]);
    }

    public function shop()
    {
        // buat get dari API yang menghasilkan response
        $response = Http::get('https://b335-116-206-14-20.ngrok-free.app/api/v1/product/');
        $data = $response->json();

        // Ambil data dari response
        return view('pelanggan.page.shop', [
            'data' => $data,
            'title' => 'Shop',

        ]);
    }


    public function contact()
    {
        return view('pelanggan.page.contact', [
            'title' => 'Contact Us',
        ]);
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function productList()
    {
        // buat get dari API yang menghasilkan response
        $response = Http::get('https://b335-116-206-14-20.ngrok-free.app/api/v1/product/');
        $data = $response->json();

        // Ambil data dari response
        return view('admin.shop.index', [
            'data' => $data,
            'title' => 'Product',
        ]);
    }
    public function Addproduct()
    {
        return view('admin.shop.product', [
            'title' => 'Addproduct',
        ]);
    }

    public function Editproduct()
    {
        
        return view('admin.shop.edit', [
            'title' => 'Editproduct',
        ]);
    }
}
