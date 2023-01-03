<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// The line of code below is added and required to work with the database.
// The connection has already been made, and the database is already configured.
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Gallery;

class UserAuth extends Controller
{
    function userLogin(Request $http_request)
    {
        // The request variable is what is posted from the form, similar to the $_POST
        // The $req->input() variable with input() method gives all the information that is submitted in all input fields.
        $input_data = $http_request->input();
        $users = DB::select("SELECT * from `user` WHERE `active` = 1 AND `email` = :email", ['email' => $input_data['email']]);
        $ip = $_SERVER['REMOTE_ADDR'];
      
        //this is statement is executed if $users is true, meaning a record has been found in the database.
        if ($users) {
            if (password_verify($input_data['password'], $users[0]->password)) { // true if password is correct.
                DB::insert("INSERT INTO `login_attempt` (`ip_address`, `success`) VALUES ('$ip', 1);");
                // The rule below makes it possible to read the user from the session.
                $http_request->session()->forget('LoginSystemMessage');
                $http_request->session()->put('email', $input_data['email']);
            } else {
                $http_request->session()->put('LoginSystemMessage', 'The login credentials are incorrect.');
                DB::insert("INSERT INTO `login_attempt` (`ip_address`, `success`) VALUES ('$ip', 0);");
                return redirect('login');
            }
        } else {
            $http_request->session()->put('LoginSystemMessage', 'The login credentials are incorrect.');
            DB::insert("INSERT INTO `login_attempt` (`ip_address`, `success`) VALUES ('$ip', 0);");
            return redirect('login');
        }
        
        // The rule below send the user back to the admin_dashboard view.
        // WARNING: check first if the redirect is correct and the view exists in web.php with security enabled
        // return redirect('admin_dashboard');
        $gallery = new Gallery();
        return $gallery->admin_dashboard();
    }

    // function userSignUp(Request $http_request)
    // {
    //     $input_data = $http_request->input();
    //     $email = $input_data['email'];
    //     $password = password_hash($input_data['password'], PASSWORD_DEFAULT);
    //     $users = DB::select('SELECT * from `user` WHERE `email` = :email', ['email' => $input_data['email']]);

    //     if ($users) {
    //         $http_request->session()->put('LoginSystemMessage', 'Another user with that email address already exists!');
    //         return redirect('signup');
    //     } else {
    //         DB::insert(DB::raw("INSERT INTO `user` (`email`, `password`, `active`) VALUES ('$email', '$password', 1)"));
    //         $http_request->session()->put('email', $input_data['email']);
    //     }
    //     return redirect('admin_dashboard');
    // }
}