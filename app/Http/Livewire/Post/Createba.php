<?php

namespace App\Http\Livewire\Post;

use App\Models\Stock;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;



class Createba extends Component
{
    public $code_barang;
    public $nama_barang;
    public $stock_barang;
    public $satuan_barang;
    public $harga_pokok_barang;
    public $Pemasok_barang;

    public function render()
    {
        return view('livewire.post.createba')->layout('layouts.app1');
    }

    /**
     * store function
     */
     protected $rules = [
        'code_barang'   => 'required|min:7|max:7',
        'nama_barang' => 'required|max:50',
        'stock_barang' => 'required|max:50',
        'satuan_barang' => 'required|max:100',
        'harga_pokok_barang' => 'required|max:100',
        'Pemasok_barang' => 'required|max:100',
    ];

    public function store1()
    {
        
        $this->validate();

        Stock::create([
            'code_barang'     => $this->code_barang,
            'nama_barang'   => $this->nama_barang,
            'stock_barang'   => $this->stock_barang,
            'satuan_barang'   => $this->satuan_barang,
            'harga_pokok_barang'   => $this->harga_pokok_barang,
            'Pemasok_barang'   => $this->Pemasok_barang,
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return redirect()->route('post.listba');
    }
}