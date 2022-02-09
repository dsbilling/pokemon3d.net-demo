<?php

namespace App\Http\Controllers;

use AliBayat\LaravelCategorizable\Category;
use App\Models\Resource;
use App\Rules\StrNotContain;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resources.index', [
            'categories' => Category::all(),
            'resources' => Resource::orderBy('name')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('resources.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', new StrNotContain('official')],
            'brief' => ['required', 'string'],
            'category' => ['required', 'integer'],
            'description' => ['required', 'string'],
        ]);

        $resource = Resource::create([
            'name' => $request->name,
            'brief' => $request->brief,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
        ]);
        $category = Category::find($request->category);
        $resource->attachCategory($category);
        return redirect()->route('resource.show', ['resource' => $resource]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        views($resource)
            ->cooldown(60)
            ->record();
        return view('resources.show', [
            'resource' => $resource,
        ]);
    }
}