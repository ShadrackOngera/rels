<?php

namespace App\Http\Controllers;

use App\Models\HousePublish;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class HousePublishFilterController extends Controller
{
    public function hundredThousand(){

        $query = HousePublish::where('price', '<', 100000 );

//        $userQuery = QueryBuilder::for($query) // start from an existing Builder instance
//        ->withTrashed() // use your existing scopes
//        ->allowedIncludes('posts', 'permissions')
//            ->where('score', '>', 42); // chain on any of Laravel's query builder methods


        $filters = QueryBuilder::for($query)
            ->get();

        return view('rental.offers')->with('rentals' , $filters);
    }

    public function threeHundredThousand(){

        $query = HousePublish::where('price' ,'<', 300000);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('rental.offers')->with('rentals' , $filters);
    }


    public function sevenHundredThousand(){

        $query = HousePublish::where('price', '<', 700000);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('rental.offers')->with('rentals' , $filters);
    }


    public function oneMillion(){

        $query = HousePublish::where('price', '<', 1000000);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('rental.offers')->with('rentals' , $filters);
    }


    public function onePointFiveMillion(){

        $query = HousePublish::where('price', '<', 1500000);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('rental.offers')->with('rentals' , $filters);
    }


    public function twoMillion(){

        $query = HousePublish::where('price', '<', 2000000);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('rental.offers')->with('rentals' , $filters);
    }

    public function twoMillionGreater(){

        $query = HousePublish::where('price', '>', 2000000);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('rental.offers')->with('rentals' , $filters);
    }

    public function myPosts(){

        $query = HousePublish::where('user_name', auth()->user()->name);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('rental.offers')->with('rentals' , $filters);
    }


}
