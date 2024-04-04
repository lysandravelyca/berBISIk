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
            ['word' => 'hari', 'picture' => 'assets\dictionary\word\hari.png']
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
