<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Services\BlogService;

class BlogController extends Controller
{

    /**
     * @var BlogService
     */
    protected BlogService $blogService;

    /**
     * @param BlogService $blogService
     */
    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $result = Blog::all();

        return view('dashboard', ['bogls' => $result]);
    }

    public function getAllBlogData()
    {
        $result = Blog::paginate(10);

        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'blog_content' => 'required',
            'tag' => 'required',
            'date' => 'required'
        ]);

        $result = $this->blogService->addBlog($request);

        return response()->json($result);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Blog::find($id);

        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|string',
            'blog_content' => 'required',
            'tag' => 'required',
            'date' => 'required',
            'status' => 'required'
        ]);

        $result = $this->blogService->updateBlog($request, $id);

        return response()->json($result);
    }

    public function updateView($id)
    {

        return view('update', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $post = Blog::find($id);

        $post->delete();

        return response()->json(['message' => 'Blog Deleted Id->' . $post->id], 201);
    }

    public function disable(Request $request, $id)
    {
        $blog = Blog::find($id);

        $blog->status = $request->status;

        $blog->save();

        return response()->json(['message' => 'Status Updated'], 201);
    }
}
