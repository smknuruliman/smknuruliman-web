<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;

class TrackVisitors
{
    public function handle(Request $request, Closure $next)
    {
        // Abaikan route admin, livewire, API, dan asset
        if (
            !$request->is('admin*') &&
            !$request->is('livewire*') &&
            !$request->is('vendor*') &&
            !$request->is('storage*') &&
            !$request->is('favicon.ico') &&
            !$request->ajax()
        ) {
            // Cegah pencatatan spam dari IP yang sama dalam 5 menit terakhir
            $recentVisit = \App\Models\Visitor::where('ip_address', $request->ip())
                ->where('created_at', '>', now()->subMinutes(5))
                ->exists();

            if (!$recentVisit) {
                Visitor::create([
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'page' => $request->path(),
                ]);
            }
        }

        return $next($request);
    }
}

