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
       <h3 class="card-title">Tambah Vendor</h3>
     </div>
     <!-- /.card-header -->
     <!-- form start -->
     <form action="{{ route('vendors') }}" method="POST">
      @csrf
      <div class="card-body">
          <div class="form-group">
              <label for="vendor_name">Nama Vendor</label>
              <input type="text" class="form-control" id="vendor_name" name="vendor_name">
          </div>
          <div class="form-group">
              <label for="vendor_phone_num">No. Tlp</label>
              <input type="text" class="form-control" id="vendor_phone_num" name="vendor_phone_num">
          </div>
          <div class="form-group">
              <label for="vendor_adress">Alamat</label>
              <input type="text" class="form-control" id="vendor_adress" name="vendor_address">
          </div>
      </div>
      <!-- /.card-body -->
  
      <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{ route('datavendor') }}" class="btn btn-primary">Kembali ke Daftar Vendor</a>
      </div>
  </form>
  
   </div>
 

@include('pointakses.admin.include.sidebar_admin')>

@endsection
