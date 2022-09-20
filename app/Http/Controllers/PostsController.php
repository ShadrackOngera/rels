<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Image;

class PostsController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['except' =>['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        dd(Post::latest()->first());
        return view('posts.home')->with('posts', Post::orderBy('updated_at', 'DESC')->paginate(8));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        //create a post

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'size' => 'required',
            'deed' => 'required',
            'type' => 'required',
            'price' => ['required','min:1'],
        ]);

//        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

//        $size = $request->file('deed')->getSize();
//        $name = $request->file('deed')->getClientOriginalName();
//        $path = $request->file('deed')->store('public/images');

//        $file = $request->file('deed');
//        $image = Image::make($file->path());
//        $path = Storage::put('/images', $file);
//        Storage::url($path);

        $path = $request->file('deed')->store('title-deeds', 'public');
//        $path = Storage::put('/title-deeds', $request->file('deeds'));

        info('File path', [$path]);


        $post = Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'location' => $request->input('location'),
            'size' => $request->input('size'),
            'price' => $request->input('price'),
            'deed' => $path,
            'type' => $request->input('type'),
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/');
    }

    private function storeMedia(UploadedFile $file): array
    {
        $image = Image::make($file->path());

        $path = Storage::put('/media', $file);

        return [
            Storage::url($path)
        ];

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($slug)
    {
        //show specific post

        $post = Post::where('slug', $slug)->with('chat')->firstOrFail();

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($slug)
    {
        //edit a post

        return view('posts.edit')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $slug)
    {
        Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
                'location' => $request->input('location'),
                'size' => $request->input('size'),
                'price' => $request->input('price'),
                'deed' => $request->input('deed'),
                'type' => $request->input('type'),
                'user_id' => auth()->user()->id,
            ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::where('id', $id)->delete();
//        echo 'Successfully deleted';

        return redirect('/');
    }
}
