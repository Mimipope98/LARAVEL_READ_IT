<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;

class TagsController extends Controller
{
    public function show (Post $post) {
        return view ('posts.show', compact ('post'));
    }
}
