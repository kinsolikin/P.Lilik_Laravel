<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapeminjam extends Model
{
    use HasFactory;

    protected $fillable  =['nim','nama','kelas','idbuku','namabuku','pengarang'];

}
