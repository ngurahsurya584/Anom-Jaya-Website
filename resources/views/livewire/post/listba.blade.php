{{-- <livewire:your-component /> --}}
<div>
    <div class="container">
        <div>
            <a href="{{ route('post.createba') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Stock Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Satuan Barang</th>
                        <th scope="col">Harga Pokok Barang</th>
                        <th scope="col">Pemasok Barang</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $stock)
                        <tr>
                            <td>{{ $stock->code_barang }}</td>
                            <td>{{ $stock->nama_barang }}</td>
                            <td>{{ $stock->stock_barang }}</td>
                            <td>{{ $stock->satuan_barang }}</td>
                            <td>{{ $stock->harga_pokok_barang }}</td>
                            <td>{{ $stock->Pemasok_barang }}</td>
                            <td class="text-center">
                                <a href="{{ route('post.editba', $stock->id) }}"> <img
                                        src="{{ asset('template_admin/') }}/img/edit.png" alt=""></a>
                                <button wire:click="destroy({{ $stock->id }})"><img
                                        src="{{ asset('template_admin/') }}/img/delete.png" alt=""></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
</div>
