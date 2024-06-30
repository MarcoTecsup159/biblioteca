<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    public function index()
    {
        $prestamos = Loan::with('book')->paginate(10);
        return view('loans.index', ["prestamos" => $prestamos]);
    }
    
    public function create()
    {
        $books = Book::all();
        return view('loans.create', ["books" => $books]);
    }

    public function store(Request $request)
    {
        $loan = new Loan;
        $loan->user_id = Auth::id();
        $loan->book_id = $request->get('book_id');
        $loan->fecha_inicio = $request->get('fecha_inicio');
        $loan->fecha_devolucion = $request->get('fecha_devolucion');
        $loan->devuelto = false;
        $loan->save();

        return Redirect::to('loans');
    }

    public function edit($id)
    {
        $loan = Loan::findOrFail($id);
        return view('loans.edit', ["loan" => $loan]);
    }

    public function update(Request $request, $id)
    {
        $loan = Loan::findOrFail($id);
        $loan->devuelto = $request->get('devuelto');
        $loan->save();

        return Redirect::to('loans');
    }
}



