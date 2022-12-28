<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryComponent extends Component
{



    public function render()
    {

        $category = Category::orderBy('name')->paginate(18);
        return view('livewire.category-component', compact('category'))->extends('apps.master')->section('master');
    }
}
