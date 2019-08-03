* pengguna 
1.admin = admin / admin
2.Kepala Sekolah = kep_sek / admin
3.Kesiswaan = kesiswaan /admin
4.wali_kelas = wali_kelas / admin


php artisan tinker

DB::table('users')->insert(['name'=>'Admin','email'=>'admin@asistenmedis.com','phone'=>'082110191448','alamat'=>'tangerang','jk'=>'L','password'=>Hash::make('123456'),'id_group'=>'1','created_at'=>NOW()])


DB::table('users')->insert(['name'=>'Admin','email'=>'admin@asistenmedis.com','password'=>Hash::make('123456'),'created_at'=>NOW()])

php artisan make:migration create_pembayaran_table --create=pembayaran
php artisan make:migration create_pembayaran_detail1_table --create=pembayaran_detail1
php artisan make:migration create_pembayaran_detail2_table --create=pembayaran_detail2

php artisan infyom:scaffold jurusan --fromTable --tableName=jurusan

php artisan infyom:model jurusan --fromTable --tableName=jurusan
php artisan infyom:model pembayaran_detail1 --fromTable --tableName=pembayaran_detail1
php artisan infyom:model pembayaran_detail2 --fromTable --tableName=pembayaran_detail2

php artisan migrate:refresh --path=/database/migrations/2019_07_06_171837_create_pembayaran_detail2_table.php

php -S localhost:8000


