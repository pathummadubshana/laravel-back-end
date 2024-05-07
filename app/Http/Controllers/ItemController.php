<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
         $item= Item::all();
        return view('manger.manager',compact($item));


    }

    public function create(){
        return view('owner.owner');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>['required','string'],
            'qty'=>['required','integer'],
            'type'=>['required','string']

        ]);
        $item=Item::create([
            'name'=>$request->input('name'),
            'qty'=>$request->input('qty'),
            'type'=>$request->input('type')

        ]);

        $item->save();
        return response()->json($item);

        if(!$item){
            return redirect()->back()->with('error','success');

        }
        return redirect()->route('owner.owner')->with('success','save success');
    }

    public function edit($id){

       $data= Item::find($id);
        return view('cashier.cashier',compact($data));



    }

    public function update($id,Request $request){
        $data = Item::find($id);

        $data->name=$request->input('name');
        $data->email=$request->input('qty');
        $data->contact=$request->input('type');

        $data->save();
        return response()->json($data);
        return redirect()->back();

    }

    public function destroy($id){
        Item::destroy($id);

         return back();
     }

}
