<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class VerifyPermissions
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
        $user = auth()->user();

        if (!$user) {
            return $next($request);
        }

        $roles = Role::with('permissions')->get();
        $permissionsArray = [];

        foreach ($roles as $role) {
            foreach ($role->permissions as $permissions) {
                $permissionsArray[$permissions->name][] = $role->id;
            }
        }

        foreach ($permissionsArray as $title => $roles) {
            Gate::define($title, function ($user) use ($roles) {
                return count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) > 0;
            });
        }

        return $next($request);
    }
}
