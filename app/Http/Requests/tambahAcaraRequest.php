<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tambahAcaraRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|alpha', // cuma boleh huruf
            'short_description' => ['required', function ($attribute, $value, $fail) {
                if (str_word_count($value) < 5) {
                    $fail('Input harus memiliki minimal 5 kata.');
                }
            }], // min 20 (krn desc jdi hrusnya bole anggka dan simbol)
            'benefit' => 'required|min:10', // cma boleh huruf 
            'seat' => 'required|numeric',
            // 'price' => ['required', 'regex:/^Rp\s\d+(,\d{3})*(\.\d{1,2})?$/', 'not_in:Rp'],
            'price' => 'required|numeric',
            'location' => 'required|min:5','not_in:Jalan',
            'photo' => 'required',
            'whatsapp_link' => 'required',
            'zoom_link' => 'required'
        ];
    }

    public function attributes()
    {
        return[

            // 'title' => 'Judul Acara'

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul Acara wajib di isi',
            'title.alpha' => 'Judul Acara hanya boleh mengandung alfabet.',
            'short_description.required' => 'Deskripsi singkat wajib di isi',
            'short_description' => 'minimal 10-20 kata',
            'benefit.required' => 'Keuntungan wajib di isi',
            'benefit' => 'Keuntungan minimal 10 karakter',
            'seat.required' => 'Jumlah peserta wajib di isi',
            'seat' => 'Jumlah peserta hanya boleh numerik',
            'price.required' => 'Biaya wajib di isi',
            // 'price.not_in' => 'Harus di awali dengan Rp' ,
            'price.numeric' => 'Hanya boleh di isi dengan numerik',
            // 'price' => [
            //     'required' => 'Biaya wajib di isi' ,
            //     'not_in' => 'Harga harus diawali dengan Rp',
            //     'regex' =>'di isi dengan numerik' ,
                
            // ],
            
            'location.required' => 'Lokasi wajib di isi',
            'location' => 'Harus diawali dengan "Jalan"',
            'photo.required' => 'Photo wajib di isi',
            'whatsapp_link' => 'Link whatsapp wajib di isi',
            'zoom_link' => 'Link zoom wajib di isi',

        
            

        ];
    }
    
}
