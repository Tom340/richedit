<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\richedit;

class EditController extends Controller
{
    public function index()
    {
        $richedit = richedit::all();
        return view('index', ["richedit" => $richedit]);
    }

    public function create(Request $request)
    {
        if (isset($request->id)) {
            // 編集
            $richedit = richedit::find($request->id);
            return view('create', ["richedit" => $richedit]);
        }
        return view('create', ["richedit" => ""]);
    }

    public function store(Request $request)
    {
        $richedit = new richedit();
        $richedit->fill([
            'title'=> $request->title,
            'body' => $request->body
        ]);
        $richedit->save();
        
        return redirect('/');
    }
}
