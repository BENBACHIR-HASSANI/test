<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'flash' => [
                'message' => session('message'),
                // 'success' => $request->session()->get('success')
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
