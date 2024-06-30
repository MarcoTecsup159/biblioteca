<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Book;
use App\Models\Loan;
use App\Http\Request\BookFormRequests;
use DB;

class BookController extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $libros = DB::table('books')->where('titulo', 'LIKE', '%'.$query.'%')
            ->paginate(10);

            foreach ($libros as $libro) {
                $libro->prestamos = Loan::where('book_id', $libro->id)->get();
            }

            return view('books.index', ["libros"=>$libros, "searchText"=>$query]);
        }
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $book= new Book;
        $book -> titulo = $request -> get('titulo');
        $book -> año = $request -> get('año');
        $book -> autor = $request -> get('autor');
        $book -> editorial = $request -> get('editorial');
        $book -> save();
        return Redirect::to('books');
    }
}
