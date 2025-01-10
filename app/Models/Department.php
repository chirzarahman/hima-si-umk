<?php
// CHIRZA RAHMAN (202253048)
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';

    protected $fillable = [
        'nama',
        'detail',
        'icon'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'departemen_id','id');
    }
}