<?php namespace App\Http\Controllers;

use Auth;
use Input;
use Illuminate\Http\Request;
use Validator;
//use Session;
use App;
use App\AppLang;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

    /**
     * @var $validLocaleCodes (string) - store site locale codes, separated by comma
     */
    protected $validLocaleCodes;


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $user = Auth::user();

		return view('home', [
            'form'=> [
                'action' => url('/home/update'),
                'submit' => trans('myapp.save')
            ],
            'user' => [
                'name'=>$user->name,
                'email'=>$user->email,
                'language'=>$user->language,
            ]
        ] );
	}

    public function updateAccount( Request $request )
    {
        $user = Auth::user();

        $arrPossibleRules = [
            'name' => 'max:255',
            'email' => 'email|max:255',
            'language' => 'required',
            'password' => 'required|confirmed|min:6',
        ];

        //to prevent duplicate email with other user
        //if email didn't change - no need to check for unique... i'm sorry for that - first time with laravel
        if ( $user->email != $request->input('email'))
            $arrPossibleRules['email'] .= '|unique:users';


        $arrData = $request->all();
        foreach ( $arrData as $field => $value ){
            if ( isset($arrPossibleRules[$field]) && !empty($value)){

                if ($field == 'password') $value = bcrypt($value);

                $rules[$field] = $arrPossibleRules[$field];
                $user->$field = $value;
            }
        }

        $validator = Validator::make( $arrData, $rules );



        if( $validator->passes() ){
            AppLang::setAppLang($user->language);
            $user->save();
        }
        else{
            $this->throwValidationException(  $request, $validator );
        }


        return redirect('/home');
    }

}
