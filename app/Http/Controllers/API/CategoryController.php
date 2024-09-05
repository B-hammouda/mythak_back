<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Article;

class CategoryController extends Controller
{
    function index() {
        $categories = Category::with(['subCategories'])->get();
        return response()->json([
            'categories'=>$categories
        ],200);;
    }
    function categoryArticles(Category $category) {
        $articles = Article::where('category_id', $category->id)->get();
        return response()->json([
            "articles"=>$articles
        ]);
        
    }
    function subcCPategoryArticles(SubCategory $sub_category) {
        $articles = Article::where('sub_category_id', $sub_category->id)->get();
        return response()->json([
            "articles"=>$articles
        ]);
        
    }
}
