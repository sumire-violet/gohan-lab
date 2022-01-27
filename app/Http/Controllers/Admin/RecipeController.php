<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{
    //
    public function add()
    {
        return view('admin.recipe.create');
    }

    public function create()
    {
        return redirect('admin/recipe/create');
    }

    public function edit()
    {
        return view('admin.recipe.edit');
    }

    public function update()
    {
        return redirect('admin/recipe/edit');
    }
}
