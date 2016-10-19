<?php
namespace SystemDirectory\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Foundation\Http\Middleware\Authorize;

class Kernel extends HttpKernel
{
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            \SystemDirectory\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \SystemDirectory\Http\Middleware\VerifyCsrfToken::class,
        ],

        'admin' =>[
            'web',
            'auth',
//            Authorize::class.':admin'
        ],

        'api' => [
            'throttle:60,1',
        ],
    ];

    protected $routeMiddleware = [
        'auth' => \SystemDirectory\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'can' => \Illuminate\Foundation\Http\Middleware\Authorize::class,
        'guest' => \SystemDirectory\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    ];
}
