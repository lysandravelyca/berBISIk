<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Dictionary;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dictionary::truncate();
        
        $words = [
            ['word' => 'halo', 'picture' => 'assets\dictionary\word\halo.png'],
            ['word' => 'selamat', 'picture' => 'assets\dictionary\word\selamat.png'],
            ['word' => 'hari', 'picture' => 'assets\dictionary\word\hari.png'],
            ['word' => 'semua', 'picture' => 'assets\dictionary\word\semua.png'],
            ['word' => 'aku', 'picture' => 'assets\dictionary\word\aku.png'],
            ['word' => 'temanteman', 'picture' => 'assets\dictionary\word\temanteman.png'],
            ['word' => 'bahasaisyarat', 'picture' => 'assets\dictionary\word\bahasaisyarat.png'],
            ['word' => 'orang', 'picture' => 'assets\dictionary\word\orang.png'],
            ['word' => 'indonesia', 'picture' => 'assets\dictionary\word\indonesia.png'],
            ['word' => 'untuk', 'picture' => 'assets\dictionary\word\untuk.png'],
            ['word' => 'disabilitas', 'picture' => 'assets\dictionary\word\disabilitas.png'],
            ['word' => 'tema', 'picture' => 'assets\dictionary\word\tema.png'],
            ['word' => 'internasional', 'picture' => 'assets\dictionary\word\internasional.png'],
            ['word' => 'tahun', 'picture' => 'assets\dictionary\word\tahun.png'],
            ['word' => 'tuli', 'picture' => 'assets\dictionary\word\tuli.png'],
            ['word' => 'mengucapkan', 'picture' => 'assets\dictionary\word\mengucapkan.png'],
            ['word' => 'tepuktangan', 'picture' => 'assets\dictionary\word\tepuktangan.png'],
            ['word' => 'perempuan', 'picture' => 'assets\dictionary\word\perempuan.png']
        ];

        foreach ($words as $word){
            Dictionary::insert([
                'word' => $word['word'],
                'picture' => $word['picture'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
