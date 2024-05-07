<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    //
    public function index(){
        $customer= Customer::all();
       return view('manger.manager',compact($customer));

    }

    public function create(){
        return view('owner.owner');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>['required','string'],
            'email'=>['required','string'],
            'contact'=>['required','string']

        ]);
        $customer=Customer::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'contact'=>$request->input('contact')

        ]);

        $customer->save();
        return response()->json($customer);

        if(!$customer){
            return redirect()->back()->with('error','success');

        }
        return redirect()->route('owner.owner')->with('success','save success');
    }

    public function edit($id){
       $data = Customer::find($id);

       return view('manager.manager', compact($data));

    }

    public function update($id,Request $request){
        $data = Customer::find($id);

        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->contact=$request->input('contact');

        $data->save();
        return response()->json($data);
        return redirect()->back();

    }

    public function destroy($id){
       Customer::destroy($id);

        return back();
    }



}
