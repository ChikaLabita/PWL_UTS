<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
                'id_barang' => '1',
                'kode_barang' => 'PRD001',
                'nama_barang' => 'Indomie',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '100'
            ],
            [
                'id_barang' => '2',
                'kode_barang' => 'PRD002',
                'nama_barang' => 'Pocari Sweet',
                'kategori_barang' => 'Minuman',
                'harga' => '6000',
                'qty' => '50'
            ],
            [
                'id_barang' => '3',
                'kode_barang' => 'PRD003',
                'nama_barang' => 'Silverqueen',
                'kategori_barang' => 'Snack',
                'harga' => '12500',
                'qty' => '45'
            ],
            [
                'id_barang' => '4',
                'kode_barang' => 'PRD004',
                'nama_barang' => 'Bulpen',
                'kategori_barang' => 'Alat Tulis',
                'harga' => '6500',
                'qty' => '100'
            ],
            [
                'id_barang' => '5',
                'kode_barang' => 'PRD005',
                'nama_barang' => 'Sari Roti Blue Berry',
                'kategori_barang' => 'Makanan',
                'harga' => '5000',
                'qty' => '100'
            ],
            [
                'id_barang' => '6',
                'kode_barang' => 'PRD006',
                'nama_barang' => 'JetZ',
                'kategori_barang' => 'Snack',
                'harga' => '7500',
                'qty' => '125'
            ],
            [
                'id_barang' => '7',
                'kode_barang' => 'PRD007',
                'nama_barang' => 'Sprite',
                'kategori_barang' => 'Minuman',
                'harga' => '3000',
                'qty' => '150'
            ],
            [
                'id_barang' => '8',
                'kode_barang' => 'PRD008',
                'nama_barang' => 'Buku Tulis',
                'kategori_barang' => 'Alat Tulis',
                'harga' => '6000',
                'qty' => '100'
            ],
            [
                'id_barang' => '9',
                'kode_barang' => 'PRD009',
                'nama_barang' => 'AQUA',
                'kategori_barang' => 'Minuman',
                'harga' => '3500',
                'qty' => '45'
            ],
            [
                'id_barang' => '10',
                'kode_barang' => 'PRD0010',
                'nama_barang' => 'Indomilk Susu Pisang',
                'kategori_barang' => 'Minuman',
                'harga' => '5500',
                'qty' => '100'
            ],
            [
                'id_barang' => '11',
                'kode_barang' => 'PRD0011',
                'nama_barang' => 'Milku',
                'kategori_barang' => 'Minuman',
                'harga' => '3000',
                'qty' => '60'
            ],
            [
                'id_barang' => '12',
                'kode_barang' => 'PRD0012',
                'nama_barang' => 'Potatoes Sambal Matta',
                'kategori_barang' => 'Snack',
                'harga' => '8500',
                'qty' => '50'
            ],
            [
                'id_barang' => '13',
                'kode_barang' => 'PRD0013',
                'nama_barang' => 'Spidol',
                'kategori_barang' => 'Alat Tulis',
                'harga' => '5500',
                'qty' => '110'
            ],
            [
                'id_barang' => '14',
                'kode_barang' => 'PRD0014',
                'nama_barang' => 'Tango',
                'kategori_barang' => 'Snack',
                'harga' => '10000',
                'qty' => '100'
            ],
            [
                'id_barang' => '15',
                'kode_barang' => 'PRD0015',
                'nama_barang' => 'Rumput Laut Panggang',
                'kategori_barang' => 'Snack',
                'harga' => '7500',
                'qty' => '125'
            ],
            [
                'id_barang' => '16',
                'kode_barang' => 'PRD0016',
                'nama_barang' => 'Ponds Facial Wash',
                'kategori_barang' => 'Skincare',
                'harga' => '42500',
                'qty' => '150'
            ],
            [
                'id_barang' => '17',
                'kode_barang' => 'PRD0017',
                'nama_barang' => 'Stabilo',
                'kategori_barang' => 'Alat Tulis',
                'harga' => '75000',
                'qty' => '110'
            ],
            [
                'id_barang' => '18',
                'kode_barang' => 'PRD0018',
                'nama_barang' => 'Le Mineral',
                'kategori_barang' => 'Minuman',
                'harga' => '3500',
                'qty' => '55'
            ],
            [
                'id_barang' => '19',
                'kode_barang' => 'PRD0019',
                'nama_barang' => 'Diary Milk',
                'kategori_barang' => 'Snack',
                'harga' => '18500',
                'qty' => '100'
            ],
            [
                'id_barang' => '20',
                'kode_barang' => 'PRD0020',
                'nama_barang' => 'Kurma',
                'kategori_barang' => 'Snack',
                'harga' => '22500',
                'qty' => '100'
            ]
        ];
        DB::table('barangs')->insert($data);
    }
}
