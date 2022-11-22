<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = Book::paginate(9);

        if ($request->ajax()) {
            return view('pagination', compact('data'));
        }

        return view('index',compact('data'));
    }
}
