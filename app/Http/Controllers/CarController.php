<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(request $request)
    {
        $data['cars'] = Car::all();
        $data['random'] = Car::inRandomOrder()->get();
        $data['model'] = Category::all();


        return view('welcome', $data);


    }

    public function category_view($cars)
    {
        $data['cars'] = Car::where('model', $cars)->get();
        $data['name'] = $cars;
        $data['cat'] = Category::where('name', $cars)->first();
        $data['randomcars'] = Car::all();


        return view('category', $data);


    }


    public function car_details($id)
    {
        $data['car'] = Car::where('id', $id)->first();
        $data['cars'] = Car::all();
        $data['cat'] = Category::where('name', $data['car']->model)->first();


        return view('car-details', $data);

    }

    public function all_cars()
    {
        $data['randomcars'] = Car::all();
        $data['cars'] = Car::all();
        return view('all-cars', $data);
    }
}
