<?php 

namespace App\Http\Controllers;
namespace Tjmahaffey\Verso\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Tjmahaffey\Verso\Models\Page;

class VersoController extends Controller
{

    public function index()
    {
        
        return view('Verso::list')->with([ 'pages' => Page::all() ]);
    }
    
    
    // public function home()
    // {

    //     $test = 'sometest';
    //     return view('Verso::home')->with('test', $test);
    // }
    
    
    //  CRUD methods.   
    public function create()
    {

        return view('pages.create');
    }
    
    public function store(Request $request)
    {
        
        $page = new Page();
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->content = $request->content;
        $page->keywords = $request->keywords;
        $page->description = $request->description;         
        $page->save();
        Session::flash('msg', 'Content page created.');
        return redirect('page');
    }
    
    public function update(Request $request, $id)
    {
        
        $page = Page::find($id);
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->content = $request->content;
        $page->keywords = $request->keywords;
        $page->description = $request->description;         
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
