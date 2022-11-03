<?php

namespace App\Http\Controllers;

use App\Models\Publish;
use Illuminate\Http\Request;

class PublishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publish = Publish::orderBy('updated_at', 'DESC')->paginate(10);
        return view('publish.home')->with('publishes', $publish);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'post_id' => 'required',
//            'user_name' => 'required',
//            'title' => 'required',
//            'slug' => 'required',
//            'location' => 'required',
//            'size' => 'required',
//            'price' => ['required','min:1'],
//            'type' => 'required',
//            'deed' => 'required',
//            'deed_img' => '',
//            'land_img' => '',
//            'contact' => '',
//            'description' => 'required',
//        ]);
//
//        return $request;

//        dd($request);

        $publish = Publish::create([
            'post_id' => $request->input('post_id'),
            'user_name' => $request->input('user_name'),
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'location' => $request->input('location'),
            'size' => $request->input('size'),
            'price' => $request->input('price'),
            'type' => $request->input('type'),
            'deed' => $request->input('deed'),
            'deed_img' => $request->input('deed_img'),
            'land_img' => $request->input('land_img'),
            'contact' => $request->input('contact'),
            'description' => $request->input('description'),
        ]);


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $publish = Publish::where('id', $id)->delete();

        return redirect()->back();
    }
}
