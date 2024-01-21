@extends('pointakses.admin.layouts.dashboard')'


@section('content')


<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
   @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Vendor</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('updatevendor', $vendors->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="vendor_name">Nama Vendor</label>
          <input type="vendor_name" class="form-control" id="vendor_name" value="{{ $vendors->vendor_name }}" name="vendor_name">
        </div>
        <div class="form-group">
          <label for="vendor_phone_num">No. Tlp</label>
          <input type="vendor_phone_num" class="form-control" id="vendor_phone_num" value="{{ $vendors->vendor_phone_num }}" name="vendor_phone_num">
        </div>
        <div class="form-group">
            <label for="vendor_adress">alamat</label>
            <input type="vendor_adress" class="form-control" id="vendor_adress" value="{{ $vendors->vendor_address }}" name="vendor_adress">
          </div>

      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('datavendor') }}" class="btn btn-primary">Kembali ke Daftar Pengguna</a>
      </div>
    </form>
  </div>


@include('pointakses.admin.include.sidebar_admin')>

@endsection
