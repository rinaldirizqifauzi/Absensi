<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rkelassatu extends Model
{
    use HasFactory;

    protected $fillable = [
        'namasiswa_id', 'keterangan', 'tgl', 'alasan'
    ];

    public function kelassatu()
    {
        return $this->belongsTo(Kelassatu::class, 'namasiswa_id');
    }
}
