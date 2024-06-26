<?php

namespace App\Http\Controllers;
use App\Models\Signup;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;

class SignupController extends Controller
{
  public function register_(){
    return view('Auth/register_');
}
public function login_(){
    return view('Auth/login_');
}
    public function signup(Request $request)
    {
       
        // $request->validate([
        //         // 'name'=>'required|max:30',
        //         // 'email'=>'required|email|unique:signups',
        //         // 'password'=>'required|min:6|max:8',
        //         // 'phoneno'=>'required|min:10|max:10|unique:signups'
        // ]);
        
   
        $signup=new signup;
        $signup->name=$request->name;
        $signup->email=$request->email;
        $signup->password=$request->password;
        // $signup->password=$request->password;

        $signup->phoneno=$request->phoneno;
        $signup->save();
        
        return Response()->json([
            "message"=>"succespully registered",
            "code"=>'200'
        ]);
        // return redirect()->back()->with('message', 'Data saved');                
    }
    public function logout(Request $request){
      Auth::logout();
      return redirect('login_');
    }
    public function signup_(Request $request)
    {

        $res =Signup::where('name',$request->name)->count();
        $password = $request->password;
        // dd($res);
        if($res>0)
        {
            $msg ="Already exist";
            $code="201";
        }else{
                $signup=new Signup;
                $signup->name=$request->name;
                $signup->email=$request->email;
                $signup->password=hash::make($password);
                $signup->phoneno=$request->phoneno;
                $signup->save();

                $msg ="successfully registered";
                $code="200";
                
            }

            return Response()->json([
                "message"=>$msg,
                "code"=>$code
            ]);
    }


    public function logined(Request $request)
    {

    //     $email = $request->email;
    //   $password = $request->password;
    //   $result = signup::where('email',$email)->first();
      
    //   if($result){
    //     if(Hash::check($password,$result['password'])){
    //       $status = 200;
    //       $msg ="successfully registered";
    //       $code="200";
    //     }else{
    //       $status = 201;
    //     }
    //   }else{
    //     $status = 202;
    //   }
    //   return response()->json([
    //     "message"=>$msg,
    //     "code"=>$code
    //   ]);
      $credentials = [
        'email' => $request->email,
        'password' => $request->password
      ];

      if(Auth::attempt($credentials)){
        $status = 200;
      }else{
        $status = 201;
      }
      // dd($status);
      return response()->json([
        'status' => $status
      ]);



    }
}