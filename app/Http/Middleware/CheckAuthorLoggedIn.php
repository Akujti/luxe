<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Feed\Post;
use Illuminate\Http\Request;

class CheckAuthorLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $post = Post::findOrFail($request->route('id'));

        if($post->agent_id !== auth()->id())
            return back()->with('error', 'You don\'t have access');
        return $next($request);
    }
}
