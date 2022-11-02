<?php

namespace App\Http\Controllers;

use App\Models\HousePublish;
use Illuminate\Http\Request;

class HousePublishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //

        $rentals = HousePublish::orderBy('created_at', 'DESC')->paginate(10);
        return view('rental.offers')->with('rentals', $rentals);
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
//            'rental_id' => 'required',
//            'user_name' => 'required',
//            'title' => 'required',
//            'slug' => ['required','min:1'],
//            'location' => 'required',
//            'house_type' => 'required',
//            'price' => 'required',
//            'time' => 'required',
//            'relationship' => 'required',
//            'house_image' => 'required',
//            'description' => 'required',
//            'contact' => 'required',
//        ]);


        $housePublish = HousePublish::create([
            'rental_id' => $request->input('rental_id'),
            'user_name' => $request->input('user_name'),
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'location' => $request->input('location'),
            'house_type' => $request->input('house_type'),
            'price' => $request->input('price'),
            'time' => $request->input('time'),
            'relationship' => $request->input('relationship'),
            'house_image' => $request->input('house_image'),
            'description' => $request->input('description'),
            'contact' => $request->input('contact'),
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $post = HousePublish::where('id', $id)->delete();

        return redirect()->back();
    }
}
