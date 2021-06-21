<div class="card">
    <div class="card-body">
        <form wire:submit.prevent="store1">
            <div class="form-group">
                <label>Code Barang</label>
                <input type="text" wire:model="code_barang"
                    class="form-control @error('code_barang') is-invalid @enderror" placeholder="Masukkan Code Barang">
                @error('code_barang')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input wire:model="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror"
                    placeholder="Masukkan Nama Barang">
                @error('nama_barang')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Stock Barang</label>
                <input type="number" wire:model="stock_barang"
                    class="form-control @error('stock_barang') is-invalid @enderror"
                    placeholder="Masukkan Stock Barang">
                @error('stock_barang')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Satuan Barang</label>
                <input type="text" wire:model="satuan_barang"
                    class="form-control @error('satuan_barang') is-invalid @enderror"
                    placeholder="Masukkan Satuan Barang">
                @error('satuan_barang')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Harga Pokok Barang</label>
                <input type="text" wire:model="harga_pokok_barang"
                    class="form-control @error('harga_pokok_barang') is-invalid @enderror"
                    placeholder="Masukkan Harga Pokok Barang">
                @error('harga_pokok_barang')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Pemasok Barang</label>
                <input type="text" wire:model="Pemasok_barang"
                    class="form-control @error('Pemasok_barang') is-invalid @enderror"
                    placeholder="Masukkan Harga Pokok Barang">
                @error('Pemasok_barang')
                    <span class="invalid-feedback">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <button>Save</button>
        </form>
    </div>
</div>
