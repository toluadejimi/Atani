<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function autocomplete(Request $request)
    {
        $data = Car::select("name")
            ->where("name","LIKE","%{$request->get('query')}%")
            ->get();

        return response()->json($data);
    }


    public function search(Request $request)
    {
        $data = Car::where('name',$request->name)
            ->first();

        return redirect("car-details/$data->id");
    }

    public function search2(Request $request)
    {
        $data = Car::where('name',$request->name)
            ->first();

        return redirect("car-details/$data->id");
    }


    public function book(Request $request){

        $book = new Booking();
        $book->first_name = $request->first_name;
        $book->last_name = $request->last_name;
        $book->car = $request->car;
        $book->email = $request->car;
        $book->phone = $request->phone;
        $book->type = "Test Drive";

        $book->save();


        return back()->with('message', 'Booking successful, one of our agent will get back to you shortly.');


    }

    public function book2(Request $request){

        $book = new Booking();
        $book->first_name = $request->first_name;
        $book->last_name = $request->last_name;
        $book->car = $request->car;
        $book->email = $request->car;
        $book->phone = $request->phone;
        $book->message = $request->message;

        $book->type = "Enquiries";

        $book->save();


        return back()->with('message', 'We received your request, one of our agent will get back to you shortly.');


    }


    public function book3(Request $request){

        $book = new Booking();
        $book->first_name = $request->first_name;
        $book->last_name = $request->last_name;
        $book->car = $request->car;
        $book->email = $request->car;
        $book->phone = $request->phone;
        $book->message = $request->message;
        $book->subject = $request->subject;



        $book->type = "Contact";

        $book->save();


        return back()->with('message', 'We received your request, one of our agent will get back to you shortly.');


    }







}
