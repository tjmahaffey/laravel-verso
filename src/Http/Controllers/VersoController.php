<?php

namespace App\Http\Controllers;
namespace Tjmahaffey\Verso\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VersoController extends Controller
{

    public function index()
    {
        
        return view('pages.list')->with([ 'pages' => Page::all() ]);
    }
    
    
    public function home()
    {


        return view('front.home')->with(['product' => $product, 'post' => $post, 'page' => $page]);
    }
    
    
    //  CRUD methods.   
    public function create()
    {

        return view('pages.create');
    }
    
    public function store()
    {
        
        $page = new Page();
        $page->title = Input::get('title');
        $page->slug = Input::get('slug');
        $page->content = Input::get('content');
        $page->seo_keywords = Input::get('seo_keywords');
        $page->seo_description = Input::get('seo_description');         
        $page->save();
        Session::flash('msg', 'Content page created.');
        return redirect('page');
    }
    
    public function update($id)
    {
        
        $page = Page::find($id);
        $page->title = Input::get('title');
        $page->slug = Input::get('slug');
        $page->content = Input::get('content');
        $page->seo_keywords = Input::get('seo_keywords');
        $page->seo_description = Input::get('seo_description');         
        $page->save();
        Session::flash('msg', 'Content page updated.');
        return redirect('page');
    }
    
    public function edit($id)
    {
        
        $page = Page::find($id);
        return view('pages.edit')->with('page', $page);
    }
    
    public function show($slug)
    {

        $page = Page::where('slug', '=', $slug)->first();
        return view('front.page')->with(['page' => $page]);
    }

}
