<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;

class JwtMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (\Exception $e) {
            if ($e instanceof  \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return response()->json(["msg"=>"Token Invalido"]);
            }
            if ($e instanceof  \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return response()->json(["msg"=>"El Token Ah Experirado"]);
            }
            return response()->json(["msg"=>"No Hay Token"]);
        }
        return $next($request);
    }
}
