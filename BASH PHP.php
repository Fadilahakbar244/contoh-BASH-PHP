PHP
<?php
namespace App\Models;
use Illuminate \Database \ Eloquent \ Model;
class Postingan extends Model
{
    protected $fillable = [
        'judul',
        'isi' ,
        'penulis_id'
        'tanggal_terbit',
    ];
}