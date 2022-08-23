<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    //

    public function newspaper($id)
    {
        $new = DB::table('news')->find($id);
        $news = DB::table('news')->get();
        $category = DB::table('news')->join('categories', 'news.category_id', '=', 'categories.id')->first();
        return view('vera_views.tin-tuc-chi-tiet')->with(compact('new','news','category'));
    }

    public function listing()
    {
        $new = DB::table('news')->get();
        return view('auth.listing')->with(compact('new'));
    }

    public function edit($id)
    {

        $category = DB::table('categories')->where('type','tin')->get();
        $new = DB::table('news')->where('id',$id)->first();
        return view('auth.edit')->with(compact('new','category'));
    }
    public function update(Request $request,$id)
    {
                    DB::table('news')->where('id',$id)->update([
                        'name' => $request->input('name'),
                        'content' => $request->input('content'),
                        'title' => $request->input('title'),
                        'description' => $request->input('description'),
                        'category_id' => $request->input('category_id'),
                        'thumbnail' => Storage::url($path)
                ]);

    }



    public function news()
    {
        $category = DB::table('news')->join('categories', 'news.category_id', '=', 'categories.id')->first();
        $all = DB::table('news')->get();
        $suKien = DB::table('news')->where('category_id', '1')->get();
        $duAn = DB::table('news')->where('category_id', '2')->get();
        $BDS = DB::table('news')->where('category_id', '3')->get();
        return view('vera_views.tin-tuc')->with(compact('category','all','suKien','duAn','BDS'));
    }

    public function ThuVien()
    {
        // $category = DB::table('library')->join('categories', 'news.category_id', '=', 'categories.id')->first();
        $all = DB::table('library')->get();
        $suKien = DB::table('library')->where('category_id', '4')->get();
        $thietKe = DB::table('library')->where('category_id', '5')->get();
        $khac = DB::table('library')->where('category_id', '6')->get();
        return view('vera_views.thu-vien')->with(compact('all','suKien','thietKe','khac'));
    }

    public function cate()
    {
        return view('input-cate');
    }
    public function storeCate(Request $request)
    {
        DB::table('categories')->insertGetId([
            'name' => $request->input('name')
        ]);
    }


    public function new()
    {
        $category = DB::table('categories')->where('type','tin')->get();
        return view('auth.input-new')->with(compact('category'));
    }

    public function storeNew(Request $request)
    {
        $path=$request->file('thumbnail')->store('/','public');
        DB::table('news')->insertGetId([
            'name' => $request->input('name'),
            'content' => $request->input('content'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'thumbnail' => Storage::url($path)
        ]);

    }

    public function libStore(Request $request)
    {
        $path=$request->file('image')->store('/','public','library');
        DB::table('library')->insertGetId([
            'category_id' => $request->input('category_id'),
            'image' => Storage::url($path)
        ]);

    }


    public function delete(Request $request)
    {
        $news = DB::table('news')->where('id',$request->id)->delete();
        return 1;
    }
}
