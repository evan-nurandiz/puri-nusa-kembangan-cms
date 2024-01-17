<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\Admin\AuthHandler;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $authHandler;

    public function __construct(AuthHandler $authHandler){
        $this->authHandler = $authHandler;
    }

    public function LoginView() {
        return view('admin.admin-login');
    }

    public function loginAction(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = $request->only([
            'email',
            'password'
        ]);

        try {
            $checkUser = $this->authHandler->getUserByEmail($data['email']);

            if(empty($checkUser)){
                return redirect()->back()->with(
                    'status', 'fail'
                )->with(
                    'message', 'user not found'
                );
            }
    
            if (Hash::check($data['password'], $checkUser->password)){
                $request->session()->put([
                    'id' => $checkUser->id,
                    'email' => $checkUser->email,
                    'name' => $checkUser->name,
                    'role' => 'admin_cms',
                    'login_time' => Carbon::now()
                ]);
    
                return redirect('admin/cms-banner');
            } else {
                return redirect()->back()->with(
                    'status', 'fail'
                )->with(
                    'message', 'password wrong'
                );
            }
        } catch (Exception $e) {
            return redirect()->back()->with(
                'status', 'fail'
            )->with(
                'message', 'login fail because'.$e
            );
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
