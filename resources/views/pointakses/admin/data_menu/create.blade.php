@extends('pointakses.admin.layouts.dashboard')'

@section('content')
<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
<h1>Tambah Pengguna</h1>
    <form action="{{ route('vendors') }}" method="POST">
        @csrf
        <label for="vendor_name">Nama Vendor:</label>
        <input type="text" name="vendor_name" id="vendor_name">
        <br>
        <label for="vendor_adress">Alamat:</label>
        <input type="text" name="vendor_adress" id="vendor_adress">
        <br>
        <label for="vendor_phone_num">No Telepon:</label>
        <input type="text" name="vendor_phone_num" id="vendor_phone_num">
        <br>
        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('datavendor') }}">Kembali ke Daftar Vendor</a>
</div>

@include('pointakses.admin.include.sidebar_admin')>

@endsection
