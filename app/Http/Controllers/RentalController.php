<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        //show all posts page
        $rentals = Rental::orderBy('updated_at', 'DESC')->paginate(20);
        return view('rental.home')->with('rentals', $rentals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {

        //create a post page
        return view('rental.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'house_type' => 'required',
            'price' => ['required','min:1'],
            'time' => 'required',
            'relationship' => 'required',
            'house_image' => '',
            'description' => 'required',
            'contact' => 'required',
            'code' => 'required',
        ]);


        $house_path = $request->file('house_image')->store('houses', 'public');
        $rental = Rental::create([
            'title' => $request->input('title'),
            'slug' => SlugService::createSlug(Rental::class, 'slug', $request->title),
            'location' => $request->input('location'),
            'house_type' => $request->input('house_type'),
            'price' => $request->input('price'),
            'time' => $request->input('time'),
            'relationship' => $request->input('relationship'),
            'house_image' => $house_path,
            'description' => $request->input('description'),
            'contact' => $request->input('contact'),
            'code' => $request->input('code'),
            'user_id' => auth()->user()->id,
        ]);

        $message = 'Success!! Your post has been sent For Review';
        return redirect()->back()->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($slug)
    {


        //->with('chat')->firstOrFail();
//        $post = Post::where('slug', $slug)->with('chat')->firstOrFail();
//        return view('posts.show')->with('post', $post);


        $rental = Rental::where('slug', $slug)->with('houseChat')->firstOrFail();
        return view('rental.show')->with('rental', $rental);
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
        $rental = Rental::where('id', $id)->delete();

        return redirect('/');
    }
}
