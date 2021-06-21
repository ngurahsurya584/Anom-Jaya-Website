<?php

namespace App\Http\Livewire\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    
    use AuthorizesRequests;
    use WithPagination;

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.post.index', [
            'posts' => Post::latest()->paginate(5)
        ])->layout('layouts.app2');
    }

    public function destroy($postId)
    {
    $post = Post::find($postId);

    if($post) {
        $post->delete();
    }

    //flash message
    session()->flash('message', 'Data Berhasil Dihapus.');

    //redirect
    return redirect()->route('post.index');

    }

    public function search(Request $request)
    {
        $cari = $request->search;
        
        $member = Post::find()->where('nama_member', 'like', '%' . $cari . '%')->paginate(5);
        return view('post.index', ['member' => $member]);
    }
}