<?php

namespace Mbagri\Survey\Middleware;

class Authenticate
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
