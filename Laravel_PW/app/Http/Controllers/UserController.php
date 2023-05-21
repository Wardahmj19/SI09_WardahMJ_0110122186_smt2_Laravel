<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user/index', ['kategoriuser'=>'Admin']);
    }

    public function daftar()
    {
        $ar_kategori = ["Dosen", "Mahasiswa", "Staff", "Alumni"];
        return view('user/daftar', ['kategori'=>$ar_kategori]);
    }


    public function store(Request $request){
        $nama = $request->input('nama');
        $email = $request->input('email');
        $kategori = $request->input('kategori');
        $alamat = $request->input('alamat');
        return view('user/sukses',
            ['nama'=>$nama, 'email'=>$email, 'kategori'=>$kategori, 'alamat'=>$alamat]);
    }

    public function tugas()
    {
        $ar_waktu = ["Waktu Puasa", "2 Jam Setelah Makan", "Waktu Acak"];
        return view('praktikum9/tugas', ['wp'=>$ar_waktu]);
    }

    public function hasil(Request $request){
        $nama = $request->input('nama');
        $tgl = $request->input('tgl');
        $lhr = $request->input('lhr');
        $umr = $request->input('umr');
        $jk = $request->input('jk');
        $gp = $request->input('gp');
        $wp = $request->input('wp');

        $td = $request->input('td');
        $darah = "";
        if ($td == "120/80") {
            $darah = "Normal";
            
        }else{
            $darah = "Tidak Normal";
            
        }

        $au = $request->input('au');
        $urat = "";
        if ($jk == "Laki-laki") {
            if ($au <= 7) {
                $urat = "Normal";
            } else{
                $urat = "Tidak Normal";
            }
        } elseif ($jk == "Perempuan") {
            if ($au <= 6) {
                $urat = "Normal";
            } else{
                $urat = "Tidak Normal";
            }
        }

        $kl = $request->input('kl');
        $terol = "";
        if ($kl <= 200) {
            $terol = "Normal";
            
        }else{
            $terol = "Tidak Normal";
            
        }

        $gd = $request->input('gd');
        $dar = "";
        if ($wp == "Waktu Puasa") {
            if ($gd >= 70 && $gd <= 110) {
                $dar = "Normal";
            } else {
                $dar = "Tidak Normal";
            }
        } elseif ($wp == "2 Jam Setelah Makan") {
            if ($gd >= 100 && $gd <= 150) {
                $dar = "Normal";
            } else{
                $dar = "Tidak Normal"; 
            }
        }
        elseif ($wp == "Waktu Acak") {
            if ($gd >= 70 && $gd <= 125) {
                $dar = "Normal";
            } else{
                $dar = "Tidak Normal"; 
            }
        }

        return view('praktikum9/hasil',
            ['nama'=>$nama, 'tgl'=>$tgl, 'lhr'=>$lhr, 'umr'=>$umr, 'jk'=>$jk, 'gp'=>$gp, 'wp'=>$wp, 'td'=>$darah, 'au'=>$urat, 'kl'=>$terol, 'gd'=>$dar]);
    }
}
