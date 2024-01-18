@extends('pointakses.admin.layouts.dashboard')'


@section('content')


<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
   <h1>EditVendor</h1>

   @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    <form action="{{ route('updatevendor', $vendors->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="vendor_name">Nama:</label>
        <input type="text" name="vendor_name" id="vendor_name" value="{{ $vendors->vendor_name }}">
        <br>
        <label for="vendor_phone_num">No Telepon:</label>
        <input type="text" name="vendor_phone_num" id="vendor_phone_num" value="{{ $vendors->vendor_phone_num }}">
        <br>
        <label for="vendor_adress">Alamat:</label>
        <input type="text" name="vendor_adress" id="vendor_adress" value="{{ $vendors->vendor_adress }}">
        <br>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <a href="{{ route('datavendor') }}">Kembali ke Daftar Pengguna</a>
</div>
@include('pointakses.admin.include.sidebar_admin')>

@endsection
