<?php
// CHIRZA RAHMAN (202253048)
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';

    protected $fillable = [
        'judul',
        'lokasi',
        'mulai',
        'selesai',
        'deskripsi',
        'poster'
    ];
}