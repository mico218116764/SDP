<?php

namespace App\Http\Controllers;

use App\admins;
use App\banks;
use App\jenisbarangs;
use App\merkbarangs;
use App\pengajuans;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Rules\CekEmail;
use App\Rules\CekEmaillogin;
use App\Rules\checkEmail;
use App\Rules\checkPhone;
use App\userpembelis;

class ControllerHalaman extends Controller
{
    function pindahHalaman()
    {
        //akan mengembalikan angka random dari 10 sampai 99 ke dalam
        //view view ketika halaman diload
        $angkaRandom = rand(10, 100);
        return view('components.body2', [
            "angka" => $angkaRandom
        ]);

        if (!Cookie::has("datauser")) {
            $user = [];
            Cookie::queue(Cookie::make("datauser", json_encode($user), 50000));
        }
    }


    public function page(Request $request)
    {
        if (Cookie::has('pageNow')) {
            $jsonPage = $request->cookie('pageNow');
            $pageIndex = json_decode($jsonPage);
        }
    }
    public function home()
    {
        // $daftarKatalog = DB::select('select * from pengajuans where STATUS_PENGAJUAN = "1"  ');
        $daftarKatalog = new pengajuans();
        $daftarKatalog = $daftarKatalog::where('STATUS_PENGAJUAN', '1')->get();
        // dd($daftarKatalog::where('status_pengajuan', '1'));

        return view('page.home', [
            "daftarKatalog" => $daftarKatalog
        ]);
    }

    public function register()
    {
        return view('page.register');
    }

    public function login()
    {
        return view('page.login');
    }

    public function doRegister(Request $request)
    {
        $userpembelis = new userpembelis();
        $jumUser = $userpembelis->count();

        $request->validate(
            [
                "USERPB_NAME" => ["required"],
                "USERPB_EMAIL" => ["required", "max:50", new checkEmail],
                "USERPB_PHONE_NUMBER" => ["required", "numeric"], new checkPhone,
                "USERPB_ADDRESS" => ["required"],
                "USERPB_PASSWORD" => ["required", "confirmed"],
                "USERPB_PASSWORD_confirmation" => ["required"],
                "USERPB_IDENTITY" => ["required", "url"],
                "USERPB_NMBANK" => ["required"],
                "USERPB_NOREK" => ["required"],
                "txtagree" => ["accepted"]
            ],
            [
                "required" => ":attribute harus di isi!!",
                "confirmed" => "Harus sama!!",
                "url" => "Url Harus Benar",
                "email" => "Email tidak valid",
                "numeric" => "Harus Angka",
                "accepted" => "Harus dicentang"
            ],
            [
                "USERPB_NAME" => "Nama Pengguna",
                "USERPB_EMAIL" => "Alamat Email",
                "USERPB_PHONE_NUMBER" => "Nomor Telephone",
                "USERPB_ADDRESS" => "Alamat",
                "USERPB_PASSWORD" => "Password",
                "USERPB_PASSWORD_confirmation" => "Confirm Password",
                "USERPB_IDENTITY" => "URL KTP",
                "USERPB_NMBANK" => "Nama Bank",
                "USERPB_NOREK" => "Nomor Rekening",
                "txtagree" => "Agree"
            ]
        );

        // $userpembelis
        DB::table('userpembelis')->insert(
            [
                "USERPB_ID" => $jumUser,
                "USERPB_NAME" => $request->USERPB_NAME,
                "USERPB_EMAIL" => $request->USERPB_EMAIL,
                "USERPB_PHONE_NUMBER" => $request->USERPB_PHONE_NUMBER,
                "USERPB_ADDRESS" => $request->USERPB_ADDRESS,
                "USERPB_PASSWORD" => $request->USERPB_PASSWORD,
            ]
        );

        return redirect('/register');
    }

    public function pengajuan(Request $request)
    {
        if (Cookie::has('userNowT') == false) {
            return redirect('/login');
        } else {
            $user = $request->cookie('userNowT');
            // dd($request->cookie('userNowT'));

            if ($user == "user") {
                $daftarJenis = new jenisbarangs();
                $daftarMerk = new merkbarangs();
                $daftarBank = new banks();

                // dd($daftarJenis);

                return view('page.pengajuan', [
                    "daftarJenis" => $daftarJenis::all(),
                    "daftarMerk" => $daftarMerk::all(),
                    "daftarBank" => $daftarBank::all()
                ]);
            } else {
                return redirect('/login');
            }
        }
    }
    public function doApply(Request $request)
    {
        if (Cookie::has("userNow")) {
            $jsonUserNow = $request->cookie("userNow");
            $dataUserNow = json_decode($jsonUserNow);
            $userNow = $dataUserNow[0]->USERPB_ID;
        }
        $now = DB::selectOne("SELECT NOW() AS now from dual");
        // dd();
        $request->validate(
            [
                "NAMA_BARANG" => ["required"],
                "FUNGSIONALITAS" => ["required"],
                "DESKRIPSI_BARANG" => ["required"],
                "HARGA_MIN" => ["required", "numeric"],
                "HARGA_MAX" => ["required", "numeric"],
                "FOTO_KIRI" => ["required", "url"],
                "FOTO_KANAN" => ["required", "url"],
                "FOTO_ATAS" => ["required", "url"],
                "FOTO_BAWAH" => ["required", "url"],
                "FOTO_DEPAN" => ["required", "url"],
                "FOTO_BELAKANG" => ["required", "url"],
                "WARNA_BARANGP" => ["required"],
                "USERPB_IDENTITY" => ["required", "url"],
                "USERPB_NMBANK" => ["required"],
                "USERPB_NOREK" => ["required"],
            ],
            [
                "required" => ":attribute harus di isi!!",
                "confirmed" => "Harus sama!!",
                "url" => "Url Harus Benar",
                "numeric" => "Harus Angka",
            ],
            [
                "NAMA_BARANG" => "Nama Barang",
                "FUNGSIONALITAS" => "Fungsionalitas",
                "DESKRIPSI_BARANG" => "Deskripsi Barang",
                "HARGA_MIN" => "Harga Minimal",
                "HARGA_MAX" => "Harga Maksimal",
                "FOTO_KIRI" => "Url Foto Kiri",
                "FOTO_KANAN" => "Url Foto Kanan",
                "FOTO_ATAS" => "Url Foto Atas",
                "FOTO_BAWAH" => "Url Foto Bawah",
                "FOTO_DEPAN" => "Url Foto Depan",
                "FOTO_BELAKANG" => "Url Foto Belakang",
                "WARNA_BARANGP" => "Warna Barang",
                "USERPB_IDENTITY" => "Link Ktp",
                "USERPB_NMBANK" => "Nama Bank",
                "USERPB_NOREK" => "Nomor Rekening",
            ]
        );
        $id = "PNG" . DB::table('pengajuans')->count();

        $pengajuans = new pengajuans();
        $pengajuans->ADMINP_ID = "0";
        $pengajuans->MERK_ID = $request->merkBarang;
        $pengajuans->KONDISI_ID = "KOND0";
        $pengajuans->PENGAJUAN_ID = $id;
        $pengajuans->USERPB_ID = $dataUserNow[0]->USERPB_ID;
        $pengajuans->TRANSAKSI_ID = "0";
        $pengajuans->JENIS_ID = $request->jenisBarang;
        $pengajuans->NAMA_BARANG = $request->NAMA_BARANG;
        $pengajuans->TGL_PENGAJUAN = $now->now;
        $pengajuans->WARNA_BARANGP = $request->WARNA_BARANGP;
        $pengajuans->PERSENTASE_KUALITAS = 0;
        $pengajuans->FUNGSIONALITAS = $request->FUNGSIONALITAS;
        $pengajuans->DESKRIPSI_BARANG = $request->DESKRIPSI_BARANG;
        $pengajuans->STATUS_PENGAJUAN = "0";
        $pengajuans->STATUS_BARANG = "0";
        $pengajuans->FOTO_KIRI = $request->FOTO_KIRI;
        $pengajuans->FOTO_KANAN = $request->FOTO_KANAN;
        $pengajuans->FOTO_ATAS = $request->FOTO_ATAS;
        $pengajuans->FOTO_BAWAH = $request->FOTO_BAWAH;
        $pengajuans->FOTO_DEPAN = $request->FOTO_DEPAN;
        $pengajuans->FOTO_BELAKANG = $request->FOTO_BELAKANG;
        $pengajuans->HARGA_MIN = $request->HARGA_MIN;
        $pengajuans->HARGA_MAX = $request->HARGA_MAX;
        $pengajuans->HARGA_APPROVE = 0;
        $pengajuans->HARGA_JASA = 0;
        $pengajuans->USERPB_IDENTITY = $request->USERPB_IDENTITY;
        $pengajuans->bank_id = $request->USERPB_NMBANK;
        $pengajuans->USERPB_NOREK = $request->USERPB_NOREK;
        $pengajuans->save();

        return redirect("/pengajuan");
    }

    public function doLogin(Request $request)
    {
        $request->validate(
            [
                "USERPB_EMAIL" => ["required"],
                "USERPB_PASSWORD" => ["required"],
            ],
            [
                "required" => ":attribute harus di isi!!",
            ],
            [
                "USERPB_EMAIL" => "Alamat Email",
                "USERPB_PASSWORD" => "Password",
            ]
        );
        $userpembelis = new userpembelis();
        $admins = new admins();

        $cekAdmin = $admins::where("PASSWORD_ADMINP", $request->USERPB_PASSWORD)->count();
        $cekUser = $userpembelis::where("USERPB_EMAIL", $request->USERPB_EMAIL)
            ->where("USERPB_PASSWORD", $request->USERPB_PASSWORD)
            ->count();
        if ($cekUser == 1) {
            $dataUserNow = DB::table('userpembelis')->get();
            $dataUserNow = json_decode($dataUserNow);
            //dd($dataUserNow[0]->USERPB_EMAIL);
            Cookie::forget("userNow");
            Cookie::queue("userNow", json_encode($dataUserNow), 60);
            Cookie::forget("userNowT");
            Cookie::queue("userNowT", "user", 60);
            return redirect('/pengajuan');
        } else if ($cekAdmin == 1 && $request->USERPB_EMAIL == "admin@admin.admin") {
            Cookie::forget("userNowT");
            Cookie::queue("userNowT", $request->USERPB_PASSWORD . "", 60);
            return redirect('/admin');
        }
        return redirect('/login');
    }

    public function admin(Request $request)
    {
        if (Cookie::has('userNowT') == false) {
            return redirect('/login');
        } else {
            $user = $request->cookie('userNowT');
            // dd($request->cookie('userNowT'));
            if ($user == "user") {
                return redirect('/login');
            } else {
                return view('page.admin', [
                    "items" => pengajuans::all()
                ]);
            }
        }
    }
    public function doDelete($id)
    {
        $pengajuans = pengajuans::where('PENGAJUAN_ID', $id)->first();
        //sample $id => PNG#
        //example $id => PNG0
        $pengajuans->delete();
        return redirect('/admin');
    }
    public function doApprove(Request $req, $id)
    {

        if (Cookie::has('userNowT') == false) {
            return redirect('/login');
        } else {
            $user = $req->cookie('userNowT');
            $id_admin = substr($user, 5, 1);
        }
        $pengajuans = pengajuans::where('PENGAJUAN_ID', $id)->first();
        $pengajuans->status_pengajuan = 1;
        $pengajuans->harga_approve = $req->hargaApprove;
        $pengajuans->ADMINP_ID = $id_admin;
        $pengajuans->save();

        return redirect('/admin');
    }
}
