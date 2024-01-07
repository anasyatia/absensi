<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    use HasFactory;

    protected $fillable = [
        'rombel'
    ];

    // bertugas untuk menyambungkan antara table yang satu dengan yang lain
    // belongsTo berperan sebagai foreign key
    // hasMany itu untuk primarykey
    public function student(){
        return $this->hasMany(Student ::class);
    }
}
