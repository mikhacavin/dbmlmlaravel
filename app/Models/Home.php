<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    protected $table = 'anggota';

    use HasFactory;

    public function allData()
    {
        return DB::table('anggota')
            ->get();
    }

    public function getUpline()
    {
        return DB::table('anggota')->where('upline', 'id')->orderByDesc('id')->limit(1)->get();
    }


    public function addData($data)
    {
        DB::table('anggota')->insert($data);
    }


    public function editData($id, $data)
    {
        DB::table('anggota')
            ->where('id', $id)
            ->update($data);
    }

    public function detailData($id)
    {
        return DB::table('anggota')->where('id', $id)->first();
    }

    public function Downline($id)
    {
        return DB::table('anggota')->where('upline' , $id)->get();
    }

    public function deleteData($id)
    {
        DB::table('anggota')
            ->where('id', $id)
            ->delete();
    }


}
