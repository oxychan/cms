<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'nama' => 'T. Rice Orca',
                    'harga' => 1500000,
                    'diskon' => 0.5,
                    'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A explicabo dolorem eum doloremque pariatur? Saepe, quasi ducimus debitis neque ullam vel inventore necessitatibus asperiores laborum. Alias, tempora. Quod iure nemo blanditiis dicta fuga nam nobis aliquam tenetur neque, fugit voluptates non, ducimus illum assumenda totam earum atque culpa maxime dolore veritatis dolores rerum. Explicabo reprehenderit doloribus distinctio deserunt alias earum quas nam ullam possimus. Consequatur natus minima nisi fugiat cupiditate excepturi delectus vitae, hic dicta repudiandae, in commodi aliquid doloribus doloremque assumenda consequuntur maiores? Sit pariatur nesciunt ipsum illo soluta accusamus eos, eum architecto? Natus tenetur nam beatae recusandae dolor!',
                    'sale' => 1,
                    'new' => 1,
                    'url_gambar' => '3.jpg',
                    'ditambahkan_pada' => Carbon::now()->toDateTimeString()
                ],
                [
                    'nama' => 'Siaran K2',
                    'harga' => 2500000,
                    'diskon' => 0.2,
                    'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A explicabo dolorem eum doloremque pariatur? Saepe, quasi ducimus debitis neque ullam vel inventore necessitatibus asperiores laborum. Alias, tempora. Quod iure nemo blanditiis dicta fuga nam nobis aliquam tenetur neque, fugit voluptates non, ducimus illum assumenda totam earum atque culpa maxime dolore veritatis dolores rerum. Explicabo reprehenderit doloribus distinctio deserunt alias earum quas nam ullam possimus. Consequatur natus minima nisi fugiat cupiditate excepturi delectus vitae, hic dicta repudiandae, in commodi aliquid doloribus doloremque assumenda consequuntur maiores? Sit pariatur nesciunt ipsum illo soluta accusamus eos, eum architecto? Natus tenetur nam beatae recusandae dolor!',
                    'sale' => 1,
                    'new' => 0,
                    'url_gambar' => '4.jpg',
                    'ditambahkan_pada' => Carbon::now()->toDateTimeString()
                ],
                [
                    'nama' => 'Jones Storm Chaster',
                    'harga' => 1000000,
                    'diskon' => 0,
                    'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A explicabo dolorem eum doloremque pariatur? Saepe, quasi ducimus debitis neque ullam vel inventore necessitatibus asperiores laborum. Alias, tempora. Quod iure nemo blanditiis dicta fuga nam nobis aliquam tenetur neque, fugit voluptates non, ducimus illum assumenda totam earum atque culpa maxime dolore veritatis dolores rerum. Explicabo reprehenderit doloribus distinctio deserunt alias earum quas nam ullam possimus. Consequatur natus minima nisi fugiat cupiditate excepturi delectus vitae, hic dicta repudiandae, in commodi aliquid doloribus doloremque assumenda consequuntur maiores? Sit pariatur nesciunt ipsum illo soluta accusamus eos, eum architecto? Natus tenetur nam beatae recusandae dolor!',
                    'sale' => 0,
                    'new' => 0,
                    'url_gambar' => '5.jpg',
                    'ditambahkan_pada' => Carbon::now()->toDateTimeString()
                ],
                [
                    'nama' => 'MTN Frog',
                    'harga' => 3500000,
                    'diskon' => 0.3,
                    'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A explicabo dolorem eum doloremque pariatur? Saepe, quasi ducimus debitis neque ullam vel inventore necessitatibus asperiores laborum. Alias, tempora. Quod iure nemo blanditiis dicta fuga nam nobis aliquam tenetur neque, fugit voluptates non, ducimus illum assumenda totam earum atque culpa maxime dolore veritatis dolores rerum. Explicabo reprehenderit doloribus distinctio deserunt alias earum quas nam ullam possimus. Consequatur natus minima nisi fugiat cupiditate excepturi delectus vitae, hic dicta repudiandae, in commodi aliquid doloribus doloremque assumenda consequuntur maiores? Sit pariatur nesciunt ipsum illo soluta accusamus eos, eum architecto? Natus tenetur nam beatae recusandae dolor!',
                    'sale' => 1,
                    'new' => 1,
                    'url_gambar' => '6.jpg',
                    'ditambahkan_pada' => Carbon::now()->toDateTimeString()
                ],
                [
                    'nama' => 'Diablo Burton',
                    'harga' => 1800000,
                    'diskon' => 0.1,
                    'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A explicabo dolorem eum doloremque pariatur? Saepe, quasi ducimus debitis neque ullam vel inventore necessitatibus asperiores laborum. Alias, tempora. Quod iure nemo blanditiis dicta fuga nam nobis aliquam tenetur neque, fugit voluptates non, ducimus illum assumenda totam earum atque culpa maxime dolore veritatis dolores rerum. Explicabo reprehenderit doloribus distinctio deserunt alias earum quas nam ullam possimus. Consequatur natus minima nisi fugiat cupiditate excepturi delectus vitae, hic dicta repudiandae, in commodi aliquid doloribus doloremque assumenda consequuntur maiores? Sit pariatur nesciunt ipsum illo soluta accusamus eos, eum architecto? Natus tenetur nam beatae recusandae dolor!',
                    'sale' => 0,
                    'new' => 1,
                    'url_gambar' => '7.jpg',
                    'ditambahkan_pada' => Carbon::now()->toDateTimeString()
                ],
                [
                    'nama' => 'Burton Custom',
                    'harga' => 4500000,
                    'diskon' => 0.5,
                    'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A explicabo dolorem eum doloremque pariatur? Saepe, quasi ducimus debitis neque ullam vel inventore necessitatibus asperiores laborum. Alias, tempora. Quod iure nemo blanditiis dicta fuga nam nobis aliquam tenetur neque, fugit voluptates non, ducimus illum assumenda totam earum atque culpa maxime dolore veritatis dolores rerum. Explicabo reprehenderit doloribus distinctio deserunt alias earum quas nam ullam possimus. Consequatur natus minima nisi fugiat cupiditate excepturi delectus vitae, hic dicta repudiandae, in commodi aliquid doloribus doloremque assumenda consequuntur maiores? Sit pariatur nesciunt ipsum illo soluta accusamus eos, eum architecto? Natus tenetur nam beatae recusandae dolor!',
                    'sale' => 1,
                    'new' => 1,
                    'url_gambar' => '8.jpg',
                    'ditambahkan_pada' => Carbon::now()->toDateTimeString()
                ],
                [
                    'nama' => 'Bataleon Sativa',
                    'harga' => 3500000,
                    'diskon' => 0,
                    'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A explicabo dolorem eum doloremque pariatur? Saepe, quasi ducimus debitis neque ullam vel inventore necessitatibus asperiores laborum. Alias, tempora. Quod iure nemo blanditiis dicta fuga nam nobis aliquam tenetur neque, fugit voluptates non, ducimus illum assumenda totam earum atque culpa maxime dolore veritatis dolores rerum. Explicabo reprehenderit doloribus distinctio deserunt alias earum quas nam ullam possimus. Consequatur natus minima nisi fugiat cupiditate excepturi delectus vitae, hic dicta repudiandae, in commodi aliquid doloribus doloremque assumenda consequuntur maiores? Sit pariatur nesciunt ipsum illo soluta accusamus eos, eum architecto? Natus tenetur nam beatae recusandae dolor!',
                    'sale' => 1,
                    'new' => 1,
                    'url_gambar' => '9.jpg',
                    'ditambahkan_pada' => Carbon::now()->toDateTimeString()
                ],
                [
                    'nama' => 'Arbor Bryan',
                    'harga' => 1600000,
                    'diskon' => 0.1,
                    'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A explicabo dolorem eum doloremque pariatur? Saepe, quasi ducimus debitis neque ullam vel inventore necessitatibus asperiores laborum. Alias, tempora. Quod iure nemo blanditiis dicta fuga nam nobis aliquam tenetur neque, fugit voluptates non, ducimus illum assumenda totam earum atque culpa maxime dolore veritatis dolores rerum. Explicabo reprehenderit doloribus distinctio deserunt alias earum quas nam ullam possimus. Consequatur natus minima nisi fugiat cupiditate excepturi delectus vitae, hic dicta repudiandae, in commodi aliquid doloribus doloremque assumenda consequuntur maiores? Sit pariatur nesciunt ipsum illo soluta accusamus eos, eum architecto? Natus tenetur nam beatae recusandae dolor!',
                    'sale' => 1,
                    'new' => 1,
                    'url_gambar' => '7.jpg',
                    'ditambahkan_pada' => Carbon::now()->toDateTimeString()
                ],
                [
                    'nama' => 'Corn Zilla',
                    'harga' => 9000000,
                    'diskon' => 0.1,
                    'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A explicabo dolorem eum doloremque pariatur? Saepe, quasi ducimus debitis neque ullam vel inventore necessitatibus asperiores laborum. Alias, tempora. Quod iure nemo blanditiis dicta fuga nam nobis aliquam tenetur neque, fugit voluptates non, ducimus illum assumenda totam earum atque culpa maxime dolore veritatis dolores rerum. Explicabo reprehenderit doloribus distinctio deserunt alias earum quas nam ullam possimus. Consequatur natus minima nisi fugiat cupiditate excepturi delectus vitae, hic dicta repudiandae, in commodi aliquid doloribus doloremque assumenda consequuntur maiores? Sit pariatur nesciunt ipsum illo soluta accusamus eos, eum architecto? Natus tenetur nam beatae recusandae dolor!',
                    'sale' => 1,
                    'new' => 1,
                    'url_gambar' => '5.jpg',
                    'ditambahkan_pada' => Carbon::now()->toDateTimeString()
                ],
                [
                    'nama' => 'Specta Horizon',
                    'harga' => 1500000,
                    'diskon' => 0.2,
                    'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A explicabo dolorem eum doloremque pariatur? Saepe, quasi ducimus debitis neque ullam vel inventore necessitatibus asperiores laborum. Alias, tempora. Quod iure nemo blanditiis dicta fuga nam nobis aliquam tenetur neque, fugit voluptates non, ducimus illum assumenda totam earum atque culpa maxime dolore veritatis dolores rerum. Explicabo reprehenderit doloribus distinctio deserunt alias earum quas nam ullam possimus. Consequatur natus minima nisi fugiat cupiditate excepturi delectus vitae, hic dicta repudiandae, in commodi aliquid doloribus doloremque assumenda consequuntur maiores? Sit pariatur nesciunt ipsum illo soluta accusamus eos, eum architecto? Natus tenetur nam beatae recusandae dolor!',
                    'sale' => 1,
                    'new' => 1,
                    'url_gambar' => '6.jpg',
                    'ditambahkan_pada' => Carbon::now()->toDateTimeString()
                ]
            ]
        );
    }
}
