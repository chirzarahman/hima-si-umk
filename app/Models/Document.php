<?php
// CHIRZA RAHMAN (202253048)
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;
    protected $table = 'documents';

    protected $fillable = [
        'judul',
        'deskripsi',
        'file'
    ];

}