<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasSatu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_siswa','no_induk','file','tpt_lhr','tgl_lhr',
    ];
}
