<?php

// app/Http/Controllers/FormController.php
// app/Http/Controllers/FormController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'embed_url' => 'required|url'
        ]);

        Form::create($request->all());

        return redirect()->route('form.create')->with('success', 'フォームが保存されました');
    }

    public function show($id)
    {
        $form = Form::findOrFail($id);
        return view('forms.show', compact('form'));
    }
}
