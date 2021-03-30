<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table='barangs'; //Eloquent akan membuat model Mahasiswa menyimpan record ditabel mahasiswas
    public $timestamps= false;
    protected $primaryKey = 'id_barang'; // Memanggil isi DB dengan primaryKey
    protected $fillable= [
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'harga',
        'qty'
    ];

}
