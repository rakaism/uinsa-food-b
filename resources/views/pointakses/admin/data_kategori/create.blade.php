@extends('pointakses.admin.layouts.dashboard')'

@section('content')
    <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Kategori</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('categories') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="category_name">Nama Kategori</label>
                        <input type="category_name" class="form-control" id="category_name" name="category_name">
                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('datakategori') }}" class="btn btn-primary">Kembali ke Daftar Kategori</a>
                        
                    </div>
            </form>
        </div>


        @include('pointakses.admin.include.sidebar_admin')>
    @endsection
