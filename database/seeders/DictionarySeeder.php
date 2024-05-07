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

        $alphabets = [];
        for ($i = 97; $i <= 122; $i++) {
            $letter = chr($i); // Mengonversi kode ASCII menjadi huruf
            $alphabets[] = ['word' => $letter, 'picture' => $letter . '.png'];
        }

        $wordsSample = ['halo', 'selamat', 'hari', 'semua', 'aku', 'temanteman', 'bahasaisyarat', 'orang', 'indonesia', 'untuk', 
        'disabilitas', 'tema', 'internasional', 'tahun', 'tuli', 'mengucapkan', 'tepuktangan', 'perempuan', 'januari', 'februari',
        'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember', 'senin',
        'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'];

        $words = [];
        foreach($wordsSample as $word){
            $words[] = ['word' => $word, 'picture' => $word . '.png'];
        }

        $merges = array_merge($alphabets, $words);

        foreach ($merges as $merge){
            Dictionary::insert([
                'word' => $merge['word'],
                'picture' => $merge['picture'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
