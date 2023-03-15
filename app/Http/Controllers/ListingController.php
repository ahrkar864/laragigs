<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{   
    // Show all listings
    public function index(){

        return view('listings.index',[
            // 'heading' => 'Latest listing',
            'listings' => Listing::latest()->filter(request(['tag' , 'search']))->paginate(6)   
        ]);

    }
    //
    // Show single listing     
    public function show(Listing $listing){
        return view('listings.show',[
            'listing' => $listing
        ]);

    }

    //show create form
    public function create(){
        return view('listings.create');
    }

    //Store listing data
    public function store(Request $request){

        // dd($request->file('logo'));
        $formFields = $request->validate([

            'title'=>'required',
            'company'=>['required' , Rule::unique('listings' , 'company')],
            'location'=>'required',
            'salary'=>'required',
            'website'=>'required',
            'email'=>['required' , 'email'],
            'tags'=>'required',
            'description'=>'required',
            'requirements'=>'required'

        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos' , 'public');

        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);
        return redirect('/')->with('message' , 'Listing created successfully!');

    }

    //Show edit form
    public function edit(Listing $listing){
        // dd($listing->title);
        return view('listings.edit' , ['listing' => $listing]);
    }

    //update listing data
    public function update(Request $request , Listing $listing){

        //Make sure loggin user is owner
        if($listing->user_id != auth()->id()){
            abort(403, 'Unthorized Action');

        }

        // dd($request->file('logo'));
        $formFields = $request->validate([

            'title'=>'required',
            'company'=>['required'],
            'location'=>'required',
            'salary'=>'required',
            'website'=>'required',
            'email'=>['required' , 'email'],
            'tags'=>'required',
            'description'=>'required',
            'requirements'=>'required'

        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos' , 'public');

        }

        $listing->update($formFields);
        return back()->with('message' , 'Listing updated successfully!');

    }
    
    //delete listing
    public function destroy(Listing $listing) {
        
        //Make sure loggin user is owner
        if($listing->user_id != auth()->id()){
            abort(403, 'Unthorized Action');       
        }

        $listing->delete();
        return redirect('/')->with('message' , 'listing deleted Successfully');

    }

    //manage listing
    public function manage(){
        return view('listings.manage' , ['listings' => auth()->user()->listings()->get()]);
    }

    public function view(){
        return view('listings.view' , ['listings' => auth()->user()->listings()->get()]);
    }

    // Show all listings
    public function contact(){

        return view('listings.contact');


    
    }
}