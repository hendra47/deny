<?php

namespace App\Helpers;
use Illuminate\Support\Facades\DB;

class spkHelper{
    public static function auth(){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        return $currentUser->group;
    }

    public static function group($param){
        $user_group=array('admin' => 'Admin', 
            'kep_sek' => 'Kepala Sekolah', 
            'kesiswaan' => 'Kesiswaan', 
            'wali_kelas' => 'Wali kelas');
        foreach ($user_group as $key => $value) {
            if($key==$param){
                return $value;
            }
        }
    }
    public static function input_group($param){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        $group=$currentUser->group;
        $param=strtolower($param);
        $kesiswaan=array('eskul','sikap');
        $wali_kelas=array('absensi','raport');
        $value='true';
        if($group=='kesiswaan'){
            if(in_array($param, $kesiswaan)){
                $value="true";
            }else{
                $value="false";
            }
                   
        }
        if($group=='walikelas'){
            if(in_array($param, $wali_kelas)){
                $value="true";
            }else{
                $value="false";
            }
                  
        }
         return $value;

    }

    public static function kesiswaan(){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        $group=$currentUser->group;
        $value="false";
        if($group=='kesiswaan'){
            $value="true";
        }
         return $value;
    }

    public static function walikelas(){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        $group=$currentUser->group;
        $value="false";
        if($group=='walikelas'){
            $value="true";
        }
         return $value;
    }

    public static function akses($menu){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        // dd($currentUser->id);
        $akses = DB::table('users')
            ->select('users.*','hak_akses.*')
            ->join('hak_akses', 'hak_akses.group', '=', 'users.group')
            ->where('users.id','=',$currentUser->id)
            ->get();
        $data=explode(',',$akses[0]->menu);

        if(in_array($menu, $data)){
            $value="true";
        }else{
            $value="false";
        }
            return $value;
    }
    public static function alternatif($kode){
        $data = DB::table('alternatifs')
            ->select('siswas.nama_siswa')
            ->join('siswas', 'siswas.id', '=', 'alternatifs.id_siswa')
            ->where('alternatifs.kode','=',$kode)
            ->get();
        return $data[0]->nama_siswa;
      
    }
    public static function kriteria($kode){
        $data = DB::table('kriterias')
            ->select('kriterias.kriteria')
            ->where('kriterias.kode','=',$kode)
            ->get();
        return $data[0]->kriteria;
    }
    public static function maxValueInArray($array, $keyToSearch)
    {
    $currentMax = NULL;
        foreach($array as $arr)
        {
            foreach($arr as $key => $value)
            {
                if ($key == $keyToSearch && ($value >= $currentMax))
                {
                    $currentMax = $value;
                }
            }
        }

        return $currentMax;
    }

}
