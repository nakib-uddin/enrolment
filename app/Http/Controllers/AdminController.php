<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function index()
    {
       
    }
    public function customLogin(Request $request)
    {

        $email=$request->admin_email;
        $password=$request->admin_password;
        $result = Admin::where('admin_email', $email)
        ->where('admin_password', $password)
        ->first();
        if($result){
           session::put('admin_email',$result->admin_email);
           session::put('admin_id',$result->admin_id);
           return Redirect::to('/admindashboard');
        }
        else{
            return Redirect::to('/backend');
        }
        //return view('admin.dashboard');
    }
    public function registration()
    {
      
    }
    public function customRegistration(Request $request)
    {
       
    }
    public function create(array $data)
    {
      
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function signOut()
    {
         // Clear all data from the session
        Session::flush();
        // Log out the currently authenticated user
        Auth::logout();
        // Redirect the user to the login page
        return Redirect('login');
    }
}