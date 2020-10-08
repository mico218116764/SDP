<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Rules\CekEmail;
use App\Rules\CekEmaillogin ;
use App\Rules\checkEmail;
use App\Rules\checkPhone;

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
            Cookie::queue(Cookie::make("datauser", json_encode($user), 50000));
        }
    }


    public function page(Request $request)
    {
        if(Cookie::has('pageNow')){
            $jsonPage = $request -> cookie('pageNow');
            $pageIndex = json_decode($jsonPage);
        }

    }
    public function home(Request $request){

        return view('page.home');
    }

    public function register(){

        return view ('page.register');
    }

    public function login(){
        return view ('page.login');
    }

    public function doRegister(Request $request) {
        $jumUser = DB::table('userpembeli')->count();
        $request->validate(
            [
                "USERPB_NAME"=>["required"],
                "USERPB_EMAIL"=>["required","max:50",new checkEmail],
                "USERPB_PHONE_NUMBER"=>["required","numeric"],new checkPhone,
                "USERPB_ADDRESS"=>["required"],
                "USERPB_PASSWORD"=>["required","confirmed"],
                "USERPB_PASSWORD_confirmation"=>["required"],
                "USERPB_IDENTITY"=>["required","url"],
                "USERPB_NMBANK"=>["required"],
                "USERPB_NOREK"=>["required"],
                "txtagree"=>["accepted"]
            ],[
                "required" =>":attribute harus di isi!!",
                "confirmed"=>"Harus sama!!",
                "url"=>"Url Harus Benar",
                "email"=>"Email tidak valid",
                "numeric"=>"Harus Angka",
                "accepted"=>"Harus dicentang"
            ],[
                "USERPB_NAME"=>"Nama Pengguna",
                "USERPB_EMAIL"=>"Alamat Email",
                "USERPB_PHONE_NUMBER"=>"Nomor Telephone",
                "USERPB_ADDRESS"=>"Alamat",
                "USERPB_PASSWORD"=>"Password",
                "USERPB_PASSWORD_confirmation"=>"Confirm Password",
                "USERPB_IDENTITY"=>"URL KTP",
                "USERPB_NMBANK"=>"Nama Bank",
                "USERPB_NOREK"=>"Nomor Rekening",
                "txtagree"=>"Agree"
            ]);
        DB::table('userpembeli')->insert(
            [
                "USERPB_ID"=>$jumUser,
                "USERPB_NAME"=>$request->USERPB_NAME,
                "USERPB_EMAIL"=>$request->USERPB_EMAIL,
                "USERPB_PHONE_NUMBER"=>$request->USERPB_PHONE_NUMBER,
                "USERPB_ADDRESS"=>$request->USERPB_ADDRESS,
                "USERPB_PASSWORD"=>$request->USERPB_PASSWORD,
                "USERPB_IDENTITY"=>$request->USERPB_IDENTITY,
                "USERPB_NMBANK"=>$request->USERPB_NMBANK,
                "USERPB_NOREK"=>$request->USERPB_NOREK,
            ]
        );
        return redirect('/register');
    }

    public function pengajuan(){
        return view('page.pengajuan');
    }
    public function doApply(Request $request){
        if(Cookie::has("userNow")){
            $jsonUserNow = $request->cookie("userNow");
            $dataUserNow = json_decode($jsonUserNow);
            $userNow = $dataUserNow[0]->USERPB_ID;
        }else{

        }
        $now = DB::selectOne("SELECT NOW() AS now from dual");
        // dd();
        $request->validate(
            [
                "NAMA_BARANG"=>["required"],
                "FUNGSIONALITAS"=>["required"],
                "DESKRIPSI_BARANG"=>["required"],
                "HARGA_MIN"=>["required"],
                "HARGA_MAX"=>["required"],
                "FOTO_KIRI"=>["required","url"],
                "FOTO_KANAN"=>["required","url"],
                "FOTO_ATAS"=>["required","url"],
                "FOTO_BAWAH"=>["required","url"],
                "FOTO_DEPAN"=>["required","url"],
                "FOTO_BELAKANG"=>["required","url"],
                "WARNA_BARANGP"=>["required"]
            ],[
                "required" =>":attribute harus di isi!!",
                "confirmed"=>"Harus sama!!",
                "url"=>"Url Harus Benar",
            ],[
                "ADMINP_ID"=>"0",
                "MERK_ID"=>"MERK1",
                "KONDISI_BARANG"=>"KOND0",
                "USERPB_ID"=>$userNow,
                "NAMA_BARANG"=>"Nama Barang",
                "FUNGSIONALITAS"=>"Fungsionalitas",
                "DESKRIPSI_BARANG"=>"Deskripsi Barang",
                "HARGA_MIN"=>"Harga Minimal",
                "HARGA_MAX"=>"Harga Maksimal",
                "FOTO_KIRI"=>"Url Foto Kiri",
                "FOTO_KANAN"=>"Url Foto Kanan",
                "FOTO_ATAS"=>"Url Foto Atas",
                "FOTO_BAWAH"=>"Url Foto Bawah",
                "FOTO_DEPAN"=>"Url Foto Depan",
                "FOTO_BELAKANG"=>"Url Foto Belakang",
                "WARNA_BARANGP"=>"Warna Barang"
            ]);
            $id = "PNG".DB::table('pengajuan')->count();
            DB::table('pengajuan')->insert(
                [
                    "ADMINP_ID"=>"0",
                    "MERK_ID"=>"MERK1",
                    "KONDISI_ID"=>"KOND0",
                    "PENGAJUAN_ID"=>$id,
                    "USERPB_ID"=>$dataUserNow[0]->USERPB_ID,
                    "TRANSAKSI_ID"=>"0",
                    "JENIS_ID"=>"JEN1",
                    "NAMA_BARANG"=>$request->NAMA_BARANG,
                    "TGL_PENGAJUAN"=>$now->now,
                    "WARNA_BARANGP"=>$request->WARNA_BARANGP,
                    "PERSENTASE_KUALITAS"=>0,
                    "FUNGSIONALITAS"=>$request->FUNGSIONALITAS,
                    "DESKRIPSI_BARANG"=>$request->DESKRIPSI_BARANG,
                    "STATUS_PENGAJUAN"=>"0",
                    "STATUS_BARANG"=>"0",
                    "FOTO_KIRI"=>$request->FOTO_KIRI,
                    "FOTO_KANAN"=>$request->FOTO_KANAN,
                    "FOTO_ATAS"=>$request->FOTO_ATAS,
                    "FOTO_BAWAH"=>$request->FOTO_BAWAH,
                    "FOTO_DEPAN"=>$request->FOTO_DEPAN,
                    "FOTO_BELAKANG"=>$request->FOTO_BELAKANG,
                    "HARGA_MIN"=>$request->HARGA_MIN,
                    "HARGA_MAX"=>$request->HARGA_MAX,
                    "HARGA_APPROVE"=>0,
                    "HARGA_JASA"=>0,
                ]
            );
        return redirect("/doApply");
    }

    public function doLogin(Request $request) {
        $request->validate(
            [
                "USERPB_EMAIL"=>["required"],
                "USERPB_PASSWORD"=>["required"],
            ],[
                "required" =>":attribute harus di isi!!",
            ],[
                "USERPB_EMAIL"=>"Alamat Email",
                "USERPB_PASSWORD"=>"Password",
            ]);
        $cekUser = DB::table('userpembeli')
                    ->where("USERPB_EMAIL","=",$request->USERPB_EMAIL)
                    ->where("USERPB_PASSWORD","=",$request->USERPB_PASSWORD)
                    ->count();

        if($cekUser == 1)
        {
            $dataUserNow = DB::table('userpembeli')->get();
            $dataUserNow = json_decode($dataUserNow);
            //dd($dataUserNow[0]->USERPB_EMAIL);
            Cookie::forget("userNow");
            Cookie::queue("userNow",json_encode($dataUserNow),60);
            return redirect('/pengajuan');
        }
    }
}
