<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Image;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Category::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Get all the request field data
        $fields = $request->all();
        // dd($fields);
        $user_id = 0;

        //Add the current user id to the request field list 
        if(\Auth::check()) {
            $user_id = \Auth::user()->id;
        }

        $Categoryl1_image = $request->file('cat_lev_1_img');
        $filename = 'cat-'.date_timestamp_get(date_create()).'.' . $Categoryl1_image->getClientOriginalExtension();
        $destination_path = base_path() . '/public/uploads/category_images/';
        $thumbnail_path = base_path() . '/public/uploads/category_images_thumb/';
        $Categoryl1_image->move($destination_path, $filename);
        Image::make($destination_path.$filename)->fit(300)->save($thumbnail_path.$filename);

         $level1 = [
        'name' => $fields['level1'],
        'level' => 1,
        'parent_id' => 1,
        'order_index' => 1,
        'image' => $filename,
        'updated_by' => $user_id
        ];

        $level2s = $fields['level2s'];

        //Ceate the company 
        $category = Category::create($level1);

        foreach ($level2s as $key => $level2) {
            $name = $level2['name'];
            $Categoryl1_image = $level2['img'];
            $filename = 'cat-'.$key.date_timestamp_get(date_create()).'.' . $Categoryl1_image->getClientOriginalExtension();
            $destination_path = base_path() . '/public/uploads/category_images/';
            $thumbnail_path = base_path() . '/public/uploads/category_images_thumb/';
            $Categoryl1_image->move($destination_path, $filename);
            Image::make($destination_path.$filename)->fit(300)->save($thumbnail_path.$filename);

            $level2 = [
            'name' => $name,
            'level' => 2,
            'parent_id' => $category->id,
            'order_index' => $key,
            'image' => $filename,
            'updated_by' => $user_id
            ];

            Category::create($level2);
        }


        return redirect('categories/create')->with('success_message', 'Category Created'); 
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
