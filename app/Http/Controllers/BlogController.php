<?php namespace App\Http\Controllers;

use Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogPostRequest;
use App\Blog;

class BlogController extends Controller {
    
        /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
        
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{       
		$contents = Blog::all();
                return view('blog.index',compact('contents'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('blog.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(BlogPostRequest $request)
	{       
                return view('blog.create');
                /*
		// validate
                $rules = array(
                    'title' => 'required|max:255',
                    'description' => 'required',
                    'status' => 'required'
                );
                $validator = Validator::make(Input::all(), $rules);

                // process the validation
                if ($validator->fails()) {
                    return Redirect::to('blog/create')
                                    ->withErrors($validator)
                                    ->withInput();
                } else {
                    // store
                    $data = new Category;
                    $data->title = Input::get('title');
                    $data->description = Input::get('description');
                    $data->status = Input::get('status');
                    $data->save();

                    // redirect
                    Session::flash('fl_msg', 'Blog post added successfully!');
                    return Redirect::to('blog');
                }
                 */
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
