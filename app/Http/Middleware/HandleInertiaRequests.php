<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    // ...

    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'flash' => [
                'success' => $request->session()->get('success')
            ],
            'user' => $request->user() ? [
                'id' => $request->user()->id,
                'name' => $request->user()->name,
                'first_name' => $request->user()->first_name,
                'trigramme_user' => $request->user()->trigramme_user,
                'email' => $request->user()->email,
                'stat_id' => $request->user()->stat_id,
                'password' => $request->user()->password,
            ] : null
        ]);
    }

    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            // Redirect to the login page
            return redirect()->route('login');
        }

        return parent::handle($request, $next);
    }
}
