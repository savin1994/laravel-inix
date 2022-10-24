<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course_name','price','description','image']; //untuk mengisi apa saja yang harus dimasukan ke dalam database

//  protected $guarded = ['id']; //untuk menginput semua isi ke dalam tabel kecuali id
}
