protected $routeMiddleware = [
// ...
'check.auth' => \App\Http\Middleware\CheckAuth::class,
];
