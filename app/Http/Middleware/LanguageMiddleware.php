<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App;
use App\AppLang;
use Auth;

class LanguageMiddleware {

	protected $languages;

    function __construct(){
        $this->languages = config('app.locales');
    }
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        $locale = Session::get('locale');
        if ( $locale && AppLang::isValidLocale( $locale ) ){
            App::setLocale( $locale );
        }
		return $next($request);
	}

}
