<?php

use Illuminate\Database\Seeder;

class gema extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test=[
            ['nama'=>'Gema','kelas'=>'XI RPL 1','tanggal_lahir'=>'10101019','jenis_kelamin'=>'Laki-Laki','agama'=>'islam','umur'=>'20','alamat'=>'Jl Sayuran 121'],
            ['nama'=>'Fidly','kelas'=>'XI RPL 1','tanggal_lahir'=>'19991008','jenis_kelamin'=>'Laki-Laki','agama'=>'islam','umur'=>'20','alamat'=>'Kepo Ea'],
            ['nama'=>'Haikal','kelas'=>'XI RPL 1','tanggal_lahir'=>'19991008','jenis_kelamin'=>'Laki-Laki','agama'=>'islam','umur'=>'20','alamat'=>'Kepo Ea'],
            ['nama'=>'Ali','kelas'=>'XI RPL 1','tanggal_lahir'=>'19991008','jenis_kelamin'=>'Laki-Laki','agama'=>'MURTAD','umur'=>'20','alamat'=>'Kepo Ea'],
            ['nama'=>'Riris','kelas'=>'XI RPL 1','tanggal_lahir'=>'19991008','jenis_kelamin'=>'Laki-Laki','agama'=>'islam','umur'=>'20','alamat'=>'Kepo Ea'],
            ['nama'=>'Ahmad','kelas'=>'XI RPL 1','tanggal_lahir'=>'19991008','jenis_kelamin'=>'Laki-Laki','agama'=>'islam','umur'=>'20','alamat'=>'Kepo Ea'],
            ['nama'=>'Alfi','kelas'=>'XI RPL 1','tanggal_lahir'=>'19991008','jenis_kelamin'=>'Laki-Laki','agama'=>'islam','umur'=>'20','alamat'=>'Kepo Ea'],
            ['nama'=>'Adit','kelas'=>'XI RPL 1','tanggal_lahir'=>'19991008','jenis_kelamin'=>'Laki-Laki','agama'=>'islam','umur'=>'20','alamat'=>'Kepo Ea'],
            ['nama'=>'Aldhit','kelas'=>'XI RPL 1','tanggal_lahir'=>'19991008','jenis_kelamin'=>'Laki-Laki','agama'=>'islam','umur'=>'20','alamat'=>'Kepo Ea'],
            ['nama'=>'Aceng','kelas'=>'XI RPL 1','tanggal_lahir'=>'19991008','jenis_kelamin'=>'Laki-Laki','agama'=>'islam','umur'=>'20','alamat'=>'Kepo Ea']
        ];
        DB::table('siswa')->insert($test);
    }
}
