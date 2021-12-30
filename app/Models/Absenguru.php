<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Absenguru extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id','tgl','jammasuk','jamkeluar','jamkerja',
    ];

    // public function getTglAttribute()
    // {
    //   return Carbon::parse($this->attributes['tgl'])->translatedFormat(' DD MMMM YY');
    // }


    public function users()
    {
        return $this->belongsTo(user::class, 'guru_id');
    }
}
