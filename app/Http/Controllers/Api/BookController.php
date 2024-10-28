<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($id) {
    $data = Book::with('authors')->find($id);
    return response()->json($data);
}

}
