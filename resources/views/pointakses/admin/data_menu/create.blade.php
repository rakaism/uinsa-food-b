@extends('pointakses.admin.layouts.dashboard')'

@section('content')
<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
<h1>Tambah Menu</h1>
    <form action="{{ route('menus') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="menu_pic">Gambar Menu</label>
        <input type="file" class="form-control @error('menu_pic') is-invalid @enderror" name="menu_pic">
        <br>
        <label for="menu_name">Nama Menu: </label>
        <input type="text" name="menu_name" id="menu_name">
        <br>
        <label for="menu_price">Harga Menu: </label>
        <input type="number" name="menu_price" id="menu_price">
        <br>
        <label for="category"><select name="category" id="category">
            <option value="">Select Category</option>

            @if($categories && count($categories) > 0)
                @foreach($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category->category_name }}</option>
                @endforeach
            @endif
        </select></label>
        <br>
        <br>
        <label for="vendor"><select name="vendor" id="vendor">
            <option value="">Select Vendor</option>

            @if($vendors && count($vendors) > 0)
                @foreach($vendors as $vendor)
                    <option value="{{ $vendor['id'] }}">{{ $vendor->vendor_name }}</option>
                @endforeach
            @endif
        </select></label>
        <br>
        <br>
        <label for="menu_desc">Deskripsi Menu: </label>
        <input type="text" name="menu_desc" id="menu_desc">
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('datamenu') }}">Kembali ke Daftar Menu</a>
</div>

@include('pointakses.admin.include.sidebar_admin')>

@endsection