<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Book;
use App\Models\User;
class StoreController extends Controller
{
    public function index() {
        // if (Auth::id()) {
        //     $usertype = Auth()->user->usertype;
        //     if ($usertype == 'user') {
        //         return view('index');
        //     }
        //     else{
        //         return view('admin');
        //     }
        // }
        return view('index');
        
    }

    public function cart($id) {
        return view('cart', ['id' => $id]);
    }
    public function about()
    {
        return view('about');
    }

    protected function shop(){
        return view('shop');
    }

    
    protected function contact(){
        return view('contact');
    }

    protected function admin(){
        return view('admin');
    }

    protected function addBook(){
        return view('addBook');
    }

    protected function addBookData(Request $request){
        $book = new Book;
        $book->title = $request['title'];
        $book->author = $request['author'];
        $book->price = $request['price'];
        $book->save();
        $data = book::all();
        return view('viewBook', compact('data'));
    }

    protected function addCustomer(){
        return view('addCustomer');
    }

    protected function addCustomerData(Request $request){
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->contact = $request['contact'];
        $customer->username = $request['username'];
        $customer->password = $request['password'];
        $customer->save();
        $data = customer::all();
        return view('viewCustomer', compact('data'));
        
    }

    protected function updateBook($id){
        $book = Book::find($id);
        return view('updateBook', compact('book'));
    }

    protected function editBook(Request $request, $id){
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->price = $request->input('price');
        $book->update();
        $data = book::all();
        return view('viewBook', compact('data'));
    }

    protected function updateCustomer($id){
        $customer = Customer::find($id);
        return view('updateCustomer', compact('customer'));
    }
    protected function editCustomer(Request $request, $id){
        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->contact = $request->input('contact');
        $customer->username = $request->input('username');
        $customer->password = $request->input('password');
        $customer->update();
        $data = customer::all();
        return view('viewCustomer', compact('data'));
    }

    protected function deleteBook(){
        return view('deleteBook');
    }

    protected function deleteCustomer(){
        return view('deleteCustomer');
    }


    protected function signup(){
        return view('signup');
    }

    public function signUpData(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->contact = $request['contact'];
        $customer->username = $request['username'];
        $customer->password = $request['password'];
        $customer->save();
        return view('index',['username'=>$request['username']]);
    }

    protected function signin(){
        return view('signin');
    }

}
