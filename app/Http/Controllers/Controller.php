<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showProducts()
{
    // Fetch products from the API
    $response = Http::get('https://6651-114-122-108-157.ngrok-free.app/api/v1/product/');
    $products = $response->json()['data']; // Adjust this based on the actual structure of your API response

    // Pass the products to the view
    return view('pelanggan.product.index', compact('product'));
}
    public function index()
    {
        return view('pelanggan.page.home', [
            'title' => 'Home',
        ]);
    }

    public function shop()
    {
        return view('pelanggan.page.shop', [
            'title' => 'Shop',
        ]);
    }

    public function transaksi()
    {
        return view('pelanggan.page.transaksi', [
            'title' => 'Transaksi',
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

    public function product()
    {
        return view('admin.shop.index');
    }
}

// Gunakan nama kelas yang berbeda jika ingin membuat dua kelas dengan nama yang sama
class ApiController extends Controller
{
    public function fetchData()
    {
        // Menggunakan Guzzle HTTP client
        $response = Http::get('https://6651-114-122-108-157.ngrok-free.app/api/v1/product/');
        $data = $response->json();

 // Ambil data dari response
        return view('view_name', ['data' => $data]);
    }
}
