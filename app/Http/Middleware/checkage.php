<?php

namespace App\Http\Middleware;

use Closure;

class checkage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
             // print_r($request->all());exit;
           if($request->name >5){
             echo "name";
             return redirect('/');

           }
           return $next($request);

            if ($request->age >10) {
                 echo "dfjdhsjk";
                 return redirect('/');
            }
        return $next($request);
    }
}
