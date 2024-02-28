<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Redirect;
Session_start();
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
           Session::put('admin_email',$result->admin_email);
           Session::put('admin_id',$result->admin_id);
           return Redirect::to('/admindashboard');
        }
        else{
            Session::put('exception','Email or Password Inavalid');
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
        Session::put('admin_email',null);
        Session::put('admin_id',null);
        return Redirect::to('/backend');
    }
    public function view()
    {
       return view('/admin.view');
    }
    public function setting()
    {
        return view('/admin.setting');
    }
}