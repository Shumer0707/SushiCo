<?php

namespace App\Http\Middleware;

use App\Models\Menu;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if(Session::has('locale')){
            App::setLocale(Session::get('locale'));
        }else{
            Session::put('locale', App::currentLocale());
        }
        
        if(App::currentLocale() === 'ru'){
            $model = Menu::all();
        }else{
            $model = '';
        }
        $request->merge(["model" => $model]);
        return $next($request);
    }
}
