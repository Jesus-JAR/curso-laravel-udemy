<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\post\StoreRequest;
use Illuminate\Support\Facades\Validator;

//use App\Http\Requests\post\StoreRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id', 'title');
        return view(
            'dashboard.post.create',
            [
                'categories' => $categories
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        /*$validated = $request->validate(StoreRequest::myRules());

        $validated = Validator::make($request->all(),StoreRequest::myRules());
        if($validated->fails())
        {
            dd($validated->errors());
        }*/
                
        $data = $request->all();
        $data['image'] = ''; // Asegúrate de manejar la imagen correctamente
        dd('stop');

        Post::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
