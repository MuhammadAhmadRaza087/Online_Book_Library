<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Customer;
class ShowController extends Controller
{
    protected function viewBook(){
        $data = book::all();
        return view('viewBook', compact('data'));
    }

    protected function deleteBook($id){
        $book = Book::find($id);
        $book->delete();
        return redirect("/viewBook")->with('status', "Book Deleted Successfully");
    }

    protected function viewCustomer(){
        $data = customer::all();
        return view('viewCustomer', compact('data'));
    }

    protected function deleteCustomer($id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect("/viewCustomer")->with('status', "Data Deleted Successfully");
    }
    protected function allBooks(){
        $data = Book::all();
        return view('allBooks', compact('data'));
    }
    
}
