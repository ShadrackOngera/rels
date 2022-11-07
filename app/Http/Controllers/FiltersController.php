<?php

namespace App\Http\Controllers;

use App\Models\Publish;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class FiltersController extends Controller
{
    public function hundredThousand(){

        $query = Publish::where('price', '<', 100000 );

//        $userQuery = QueryBuilder::for($query) // start from an existing Builder instance
//        ->withTrashed() // use your existing scopes
//        ->allowedIncludes('posts', 'permissions')
//            ->where('score', '>', 42); // chain on any of Laravel's query builder methods


        $filters = QueryBuilder::for($query)
            ->get();

        return view('publish.home')->with('publishes' , $filters);
    }

    public function threeHundredThousand(){

        $query = Publish::where('price' ,'<', 300000);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('publish.home')->with('publishes' , $filters);
    }


    public function sevenHundredThousand(){

        $query = Publish::where('price', '<', 700000);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('publish.home')->with('publishes' , $filters);
    }


    public function oneMillion(){

        $query = Publish::where('price', '<', 1000000);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('publish.home')->with('publishes' , $filters);
    }


    public function onePointFiveMillion(){

        $query = Publish::where('price', '<', 1500000);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('publish.home')->with('publishes' , $filters);
    }


    public function twoMillion(){

        $query = Publish::where('price', '<', 2000000);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('publish.home')->with('publishes' , $filters);
    }

    public function myPosts(){

        $query = Publish::where('user_name', auth()->user()->name);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('publish.home')->with('publishes' , $filters);
    }

    public function twoMillionGreater(){

        $query = Publish::where('price', '>', 2000000);



        $filters = QueryBuilder::for($query)
            ->get();

        return view('publish.home')->with('publishes' , $filters);
    }


}
