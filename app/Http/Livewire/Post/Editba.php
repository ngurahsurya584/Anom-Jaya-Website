<?php

namespace App\Http\Livewire\Post;

use App\Models\Stock;
use Illuminate\Http\Request;
use Livewire\Component;

class Editba extends Component
{
    public $postId;
    public $code_barang;
    public $nama_barang;
    public $stock_barang;
    public $satuan_barang;
    public $harga_pokok_barang;
    public $Pemasok_barang;

    public function mount($id)
    {
        $post = Stock::find($id);
        
        if($post) {
            $this->postId   = $post->id;
            $this->code_barang   = $post->code_barang;
            $this->nama_barang   = $post->nama_barang;
            $this->stock_barang   = $post->stock_barang;
            $this->satuan_barang   = $post->satuan_barang;
            $this->harga_pokok_barang   = $post->harga_pokok_barang;
            $this->Pemasok_barang   = $post->Pemasok_barang;
        }
    }

    /**
     * update function
     */
     public function update()
     {
         $this->validate([
            'code_barang'   => 'required|min:7|max:7',
            'nama_barang' => 'required|max:50',
            'stock_barang' => 'required|max:50',
            'satuan_barang' => 'required|max:100',
            'harga_pokok_barang' => 'required|max:100',
            'Pemasok_barang' => 'required|max:100',
         ]);
 
         if($this->postId) {
 
             $post = Stock::find($this->postId);
             
             if($post) {
                 $post->update([
                    'code_barang'     => $this->code_barang,
                    'nama_barang'   => $this->nama_barang,
                    'stock_barang'   => $this->stock_barang,
                    'satuan_barang'   => $this->satuan_barang,
                    'harga_pokok_barang'   => $this->harga_pokok_barang,
                    'Pemasok_barang'   => $this->Pemasok_barang,
                 ]);
             }
         }
 
         //flash message
         session()->flash('message', 'Data Berhasil Diupdate.');
 
         //redirect
         return redirect()->route('post.listba');
     }

    public function render()
    {
        return view('livewire.post.editba')->layout('layouts.app1');
    }


}