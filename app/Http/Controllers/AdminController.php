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
        
        $formFields = $request->validate([
            'title' => 'required',
            'value' => 'required',
            'desc' => 'required'
        ]);
    if($request->hasFile('image')){
        $formFields['image'] = $request->file('image')
        ->store('images', 'public');
    }
    Shop::create($formFields);

        //rozne sposoby:
        //Session::flash('message','Listing Created'); Import potrzebny


        return redirect('/');
    }
}
