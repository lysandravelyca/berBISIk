<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class DictionaryController extends Controller
{
    public function index(Request $request)
    {
        $keywords = $request->keyword;
        $keyword = explode(' ', $keywords);
        $dictionarySearch = new Collection();

        foreach($keyword as $word){
            $dictionarySearch = $dictionarySearch->concat(Dictionary::where('word', 'LIKE', '%'.$word.'%')->get());
        }
        
        // dd($dictionarySearch);
        // dd($keyword);
        $dictionary = Dictionary::all();
        return view('kamus', ['daftarKamus' => $dictionary, 'kamusCari' => $dictionarySearch]);
    }
}
