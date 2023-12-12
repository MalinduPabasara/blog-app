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
    public function index()
    {
        $result = Blog::all();

        return view('dashboard', ['bogls' => $result]);

        // return response()->json($result);
    }

    public function getAllBlogData()
    {
        $result = Blog::all();

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

        return back();
        // return response()->json($result);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

        return back();

    }

    public function updateView($id) {
        
        return view('update',['id'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Blog::find($id);

        $post->delete();

        return response()->json(['message' => 'Blog Deleted'], 201);
    }

    public function disable(Request $request, $id)
    {
        $blog = Blog::find($id);

        $blog->status = $request->status;

        $blog->save();

        // return response()->json(['message' => 'Status Updated'], 201);

        // return back();

        // Check if the request is coming from Postman
        if ($request->header('User-Agent') === 'PostmanRuntime/7.26.5') {
            return response()->json(['message' => 'Status Updated'], 201);
        }

        // For other requests (web application), return back
        return back();
    }
}
