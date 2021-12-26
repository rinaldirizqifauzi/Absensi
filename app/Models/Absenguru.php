<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absenguru extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id','tgl','jammasuk','jamkeluar','jamkerja',
    ];

    public function users()
    {
        return $this->belongsTo(user::class, 'guru_id');
    }
}
