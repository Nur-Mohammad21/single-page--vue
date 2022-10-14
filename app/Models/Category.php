<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category extends Model
{
    use HasFactory;
    private static $category;
    public static function newCategory($request)
    {
        self::$category = new Category();
        self::$category->titile = $request->title;
        self::$category->description = $request->description;
        self::$category->save();
    }
    public static function updateCategory(Request $request, Category $category)
    {
        self::$category = Category::find($category);
        self::$category->titile = $request->title;
        self::$category->description = $request->description;
        self::$category->save();
    }
}
