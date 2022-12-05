<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create_page(){
        return view('tools.create');
    }
    public function create_post(Request $request){
        // dd($request->files->all());
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'value' => 'required',
            'desc' => 'required'
        ]);
    if($request->hasFile('images')){
        $files = $request->file('images');
        $link = "";
foreach($files as $image){
    $link .= $image
    ->store('images', 'public')
    . ', ';
             
    }
    $formFields['image']= $link;
    }
    Shop::create($formFields);

        //rozne sposoby:
        //Session::flash('message','Listing Created'); Import potrzebny


        return redirect('/');
    }
}
