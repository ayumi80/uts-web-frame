<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('home.home');
    }

    public function users()
    {
        $users = [
            ['username' => 'user1', 'name' => 'John Doe', 'email' => 'john@example.com'],
            ['username' => 'user2', 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
        ];
        return view('user.user', compact('users'));
    }

    public function categories()
    {
        $categories = [
            ['name' => 'Electronics'],
            ['name' => 'Furniture'],
            ['name' => 'Stationery'],
        ];
        return view('categories.categories', compact('categories'));
    }

    public function items()
    {
        $items = [
            ['code' => 'BRG001', 'name' => 'Laptop', 'category' => 'Electronics', 'price' => 15000000, 'stock' => 10],
            ['code' => 'BRG002', 'name' => 'Chair', 'category' => 'Furniture', 'price' => 500000, 'stock' => 50],
        ];
        return view('items.items', compact('items'));
    }

    public function reports()
    {
        $reports = [
            ['code' => 'BRG001', 'name' => 'Laptop', 'category' => 'Electronics', 'date' => '2024-01-01', 'quantity' => 5],
            ['code' => 'BRG002', 'name' => 'Chair', 'category' => 'Furniture', 'date' => '2024-01-02', 'quantity' => 15],
        ];
        return view('reports.reports', compact('reports'));
    }


}
