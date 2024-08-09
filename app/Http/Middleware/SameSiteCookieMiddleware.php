<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SameSiteCookieMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
        // Only modify cookies if the response is an instance of a Symfony Response
        if ($response instanceof \Symfony\Component\HttpFoundation\Response) {
            foreach ($response->headers->getCookies() as $cookie) {
                // Add SameSite attribute if not already present
                if (strpos($cookie->getSameSite(), 'None') === false) {
                    $response->headers->setCookie(
                        new \Symfony\Component\HttpFoundation\Cookie(
                            $cookie->getName(),
                            $cookie->getValue(),
                            $cookie->getExpiresTime(),
                            $cookie->getPath(),
                            $cookie->getDomain(),
                            $cookie->isSecure(),
                            $cookie->isHttpOnly(),
                            false,
                            'None'
                        )
                    );
                }
            }
        }

        return $response;
    }
}
