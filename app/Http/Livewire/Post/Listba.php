<?php

namespace App\Http\Livewire\Post;

use App\Models\Stock;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Listba extends Component
{
    use AuthorizesRequests;
    use WithPagination;


    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.post.listba', [
            'posts' => Stock::latest()->paginate(5)
        ])->layout('layouts.app1');;
    }

    public function destroyba($stockId)
    {
    $post = Stock::find($stockId);

    if($post) {
        $post->delete();
    }

    //flash message
    session()->flash('message', 'Data Berhasil Dihapus.');

    //redirect
    return redirect()->route('post.listba')->layout('layouts.app1');

    }

    public function destroy($postId)
    {
    $post = Stock::find($postId);

    if($post) {
        $post->delete();
    }

    //flash message
    session()->flash('message', 'Data Berhasil Dihapus.');

    //redirect
    return redirect()->route('post.listba');

    }


}