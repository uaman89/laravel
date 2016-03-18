<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App;
use Auth;
use Session;

class AppLang extends Model {


    public static function isValidLocale( $locale ){
        $arrValidLocaleCodes = config('app.locales');
        return isset( $arrValidLocaleCodes[ $locale ] );
    }

    public static function setAppLang( $localeCode ){

        if( self::isValidLocale( $localeCode ) )
        {
            if (Auth::check()){
                $user = Auth::user();
                $user->language = $localeCode;
                $user->save();
            }
            Session::put('locale',$localeCode);
        }

    }

}
