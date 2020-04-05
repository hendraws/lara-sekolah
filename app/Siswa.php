<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','agama','alamat','avatar'];
    
    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('admin/assets/img/avatar.png');
        }
        return asset('admin/assets/img/'. $this->avatar);
    
    }
}
