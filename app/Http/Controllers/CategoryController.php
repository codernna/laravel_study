<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function edit($id) 
    {
    	$data = [
            ["id" => 1, "name" => "News"],
            ["id" => 2, "name" => "Tech"],
        ];

        return view('articles/edit', [
            'categories' => $data
        ]);
    }
}
