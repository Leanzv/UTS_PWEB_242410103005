<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        
        $menus = [
            [
                'id' => 1,
                'nama' => 'Butter Coffee',
                'kategori' => 'Kopi',
                'harga' => 10000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 2,
                'nama' => 'Irish Coffee Milk',
                'kategori' => 'Kopi',
                'harga' => 10000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 3,
                'nama' => 'Hazelnut Coffee Milk',
                'kategori' => 'Kopi',
                'harga' => 10000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 4,
                'nama' => 'Caramel Coffee Milk',
                'kategori' => 'Kopi',
                'harga' => 10000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 5,
                'nama' => 'Kopi Robusta Tubruk',
                'kategori' => 'Kopi',
                'harga' => 5000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 6,
                'nama' => 'Kopi Arabika Tubruk',
                'kategori' => 'Kopi',
                'harga' => 7000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 7,
                'nama' => 'Kopi Susu Tubruk',
                'kategori' => 'Kopi',
                'harga' => 6000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 8,
                'nama' => 'Strawberry Milk',
                'kategori' => 'Non-Kopi',
                'harga' => 10000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 9,
                'nama' => 'Chocolate Milk',
                'kategori' => 'Non-Kopi',
                'harga' => 10000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 10,
                'nama' => 'Green Tea Milk',
                'kategori' => 'Non-Kopi',
                'harga' => 10000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 11,
                'nama' => 'Taro Milk',
                'kategori' => 'Non-Kopi',
                'harga' => 10000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 12,
                'nama' => 'Java Tea',
                'kategori' => 'Non-Kopi',
                'harga' => 6000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 13,
                'nama' => 'Milk Tea',
                'kategori' => 'Non-Kopi',
                'harga' => 8000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 14,
                'nama' => 'Joshua',
                'kategori' => 'Non-Kopi',
                'harga' => 6000,
                'stok' => 'Tersedia'
            ],
            [
                'id' => 15,
                'nama' => 'Passion Fruit',
                'kategori' => 'Squash',
                'harga' => 10000,
                'stok' => 'Habis'
            ],
            [
                'id' => 16,
                'nama' => 'Coco Pandan',
                'kategori' => 'Squash',
                'harga' => 10000,
                'stok' => 'Habis'
            ],
            [
                'id' => 17,
                'nama' => 'Orange Coffee',
                'kategori' => 'Squash',
                'harga' => 10000,
                'stok' => 'Habis'
            ],
            [
                'id' => 18,
                'nama' => 'Coffee Beer',
                'kategori' => 'Squash',
                'harga' => 8000,
                'stok' => 'Habis'
            ]
        ];
        
        return view('pengelolaan', compact('menus', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        
        return view('profile', compact('username'));
    }
}