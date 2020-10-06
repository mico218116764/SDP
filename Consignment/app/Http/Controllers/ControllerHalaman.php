<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Rules\CekEmail;
use App\Rules\CekEmaillogin ;

class ControllerHalaman extends Controller
{
    function pindahHalaman() {
        //akan mengembalikan angka random dari 10 sampai 99 ke dalam
        //view view ketika halaman diload
        $angkaRandom = rand(10,100);
        return view ('components.body2',[
            "angka" => $angkaRandom
        ]);

        if(!Cookie::has("datauser"))  
        {   $user = []; 
            Cookie::queue(Cookie::make("datauser", json_encode($user), 50000)); }
    }

    public function register(){
        return view ('body.register');
    }

    public function login(){
        return view ('body.login');
    }

    public function post_register(Request $request) {
        if($request->btnRegis) {
            if($request->validate([
                'txtemail' => ['required', 'email', new CekEmaillogin()],
                'txtpass' => ['required', 'min:8']
            ],
            [
                'txtemail.required' => 'email Harus Diisi',
                'txtemail.email' => 'format email masih salah',
                'txtpass.required' => 'password Harus Diisi'
            ])) 
            {
                $nama       = $request->txtnama; 
                $email      = $request->txtemail; 
                $username   = $request->txtusername;
                $alamat     = $request->txtalamat;
                $nohp       = $request->txtnohp;
                $password   = $request->txtpass; 
    
                $arrUser   = json_decode(Cookie::get('datauser')); 
                $userbaru = array(
                    'nama' => $nama,
                    'email' => $email,
                    'username' => $username,
                    'alamat' => $alamat,
                    'nohp' => $nohp,
                    'password' => $password
                );
                array_push($arrUser, $userbaru);  
                Cookie::queue(Cookie::make("datauser", json_encode($arrUser), 50000));

                return view ('body.register');   
            }
        }   
    }

    public function post_login(Request $request) {
        if($request->btnLogin) {
            $e     = $request->txtemail; 
            $p     = $request->txtpass; 

            if($e == "addmin" && $p == "admin") {
                return $this->admin(); 
            }
            else {
                $arrUser    = json_decode(Cookie::get('datauser')); 
                $jumUser    = count($arrUser); 
                $flag         = 0; 
                for($i = 0; $i < $jumUser; $i++) {
                    if($arrUser[$i]->email == $e && $arrUser[$i]->password == $p) {
                        $flag  = 1; 
                        Cookie::queue(Cookie::make("userlogin", $e, 50000));
                        return $this->user(); 
                    }
                }

                if($flag == 0) {
                    $param['errormessage'] = "username password anda salah"; 
                    return $this->login()->with($param); 
                }
            }
        }
    }
}
