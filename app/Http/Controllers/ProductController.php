<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function marbeledugames(){
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">Marbel Edu Games</a>';
    }

    public function marbelandfriendskidsgames(){
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Marbel and Friends Kids Games</a>';
    }

    public function riristorybooks(){
        return '<a href="https://www.educastudio.com/category/riri-story-books">Riri Story Books</a>';
    }

    public function kolakkidssongs(){
        return '<a href="https://www.educastudio.com/category/kolak-kids-songs">Kolak Kids Songs</a>';
    }
}
