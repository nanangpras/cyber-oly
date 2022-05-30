<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    public $timestamps = false;
    protected $fillable = [
        'referral_id',
        'address',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'kode_pos',
        'latitude',
        'longitude',
        'no_rekening',
        'buku_rekening',
        'point',
        'default_address',
    ];

    public function user()
    {
        return $this->hasOne(User::class,'id');
    }

}
