<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetableguru extends Model
{
    use HasFactory;

    protected $fillable = [
        'kegiatan_id','tgl','mulai','selesai',
    ];

    public function kegiatan()
    {
        return $this->BelongsTo(Kegiatan::class, 'kegiatan_id');
    }
}
