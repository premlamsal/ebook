<?php

namespace App\Http\Controllers;

use App\Book;
use App\MyBook;
use App\User;
use Auth;
use Illuminate\Http\Request;
use URL;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isset(Auth::user()->id)) {

            $user_id  = Auth::user()->id;
            $userName = Auth::user()->name;
            //$my_books=MyBook::where('user_id',$user_id)->get();
            $my_books = Book::join('my_books', 'my_books.book_id', 'books.id')
                ->where('my_books.user_id', $user_id)
                ->select('books.*')
                ->get();
            return view('customer.index')->with(['userName' => $userName, 'my_books' => $my_books]);
        } else {
            print_r("Please Login!!!");
        }

    }

    public function readBook()
    {
        $filename = URL::to('/uploads/file.swf');
        return view('customer.readBook')->with('filename', $filename);
    }
    public function profileSettings()
    {

        if (Auth::user()) {

            //get logged in user id
            $user_id = Auth::user()->id;
            $user    = User::find($user_id);

            return view('customer.settings')->with('user', $user);
        } else {
            return redirect('/');
        }

    }
    public function profileSettingsUpdate(Request $request)
    {

        $this->validate($request, [
            'name'     => 'required',
            'email'    => 'required',
            'address'  => 'required',
            'phone'    => 'required',
            'interest' => 'required',
        ]);

        $user_id = $request->input('id');

        $user           = User::find($user_id);
        $user->name     = $request->input('name');
        $user->email    = $request->input('email');
        $user->address  = $request->input('address');
        $user->phone    = $request->input('phone');
        $user->interest = $request->input('interest');
        $user->save();

        if ($user_id) {
            return redirect('/customer/profile/settings')->with('message', 'Profile Updated');
        } else {
            return redirect('/customer/profile/settings')->with('message', 'Profile Updated Failed');
        }

    }

    public function ShowReadPage($book_id, Request $request)
    {
        if (isset(Auth::user()->id)) {
            if ($book_id) {
                $user_id = Auth::user()->id;
                $fetch   = MyBook::where(['user_id' => $user_id, 'book_id' => $book_id])->get();
                if ($fetch->first()) {

                    $bookFile = Book::find($book_id);
                    if ($bookFile) {
                        // $bookFile  = $bookFile->book_file;
                        $publicURL = url('/');

                        $random=Str::random(60);//generates random sting of length 60
                        $filePath  = '/getBookFile/'.$book_id.'/'.$random;

                        return view('customer.readBook')->with('filePath', $filePath);

                    } else {
                        return abort(404);
                    }

                } else {
                    return abort(404);
                }

            } else {
                return abort(404);
            }
        } else {
            print_r("Please Login");
        }
    }

}
