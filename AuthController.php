<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\User;

class AuthController extends Controller
{
	function viewregisterForm()
	{
		 return view('register/registerForm');
	}
    function registerUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30|min:2',
            'email' => 'required|min:5|max:25',
            'password' => 'required|min:1|max:25',
            'dateofbirth' =>'required|integer|min:6|max:10',
        ]);
        //create a Film object
        $user = new $User();
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = $request->password;
		$user->dateofbirth = $request->dateofbirth;
		$user->role = 1;

		$user->save();
		return redirect('all');
	}
	function __construct()
    {
        $this->middleware('auth');
    }
}

?>

<!--
$table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
			$table->string('dateofbirth');
            $table->tinyInteger('role'); //new column-->
