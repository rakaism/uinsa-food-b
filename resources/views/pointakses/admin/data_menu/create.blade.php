@extends('pointakses.admin.layouts.dashboard')'

@section('content')
<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
<h1>Tambah Menu</h1>
    <form action="{{ route('menus') }}" method="POST">
        @csrf
        <label for="menu_pic">Gambar Menu</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="menu_pic">
        <br>
        <label for="menu_name">Nama Menu: </label>
        <input type="text" name="menu_name" id="menu_name">
        <br>
        <select name="category" id="category">
            <option value="">Select Category</option>

            @if($categories && count($categories) > 0)
                @foreach($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category->category_name }}</option>
                @endforeach
            @endif
        </select>
        <br>
        <br>
        <select name="vendor" id="vendor">
            <option value="">Select Vendor</option>

            @if($vendors && count($vendors) > 0)
                @foreach($vendors as $vendor)
                    <option value="{{ $vendor['id'] }}">{{ $vendor->vendor_name }}</option>
                @endforeach
            @endif
        </select>
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('datamenu') }}">Kembali ke Daftar Menu</a>
</div>

@include('pointakses.admin.include.sidebar_admin')>

@endsection
