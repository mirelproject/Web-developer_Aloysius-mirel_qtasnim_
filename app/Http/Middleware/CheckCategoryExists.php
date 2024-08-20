<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Category;

class CheckCategoryExists
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $categoryId = $request->route('id');

        if (!Category::find($categoryId)) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        return $next($request);
    }
}
