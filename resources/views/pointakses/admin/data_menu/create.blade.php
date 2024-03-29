@extends('pointakses.admin.layouts.dashboard')'

@section('content')
    <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="600">

        <div class="card card-primary mt-4">
            <div class="card-header">
                <h3 class="card-title">Tambah Menu</h3>
            </div>
            <form action="{{ route('menus') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="menu_name">Nama Menu</label>
                        <input type="text" class="form-control" id="menu_name" placeholder="Nama Menu" name="menu_name">
                    </div>

                    <div class="form-group">
                        <label for="menu_price">Harga Menu</label>
                        <input type="number" class="form-control" id="menu_price" placeholder="Harga Menu"
                            name="menu_price">
                    </div>
                    <label for="menu_pic">Gambar Menu</label>
                    <input type="file" class="form-control @error('menu_pic') is-invalid @enderror" name="menu_pic">
                    <br>

                    <div class="form-group">
                        <label for="category">Select Category</label>
                        <select class="form-control" id="category" name="category">
                            <option value="" selected>Select Category</option>

                            @if ($categories && count($categories) > 0)
                                @foreach ($categories as $category)
                                    <option value="{{ $category['id'] }}">{{ $category->category_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>


                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label for="menu_desc">Deskripsi Menu:</label>
                            <textarea class="form-control" name="menu_desc" id="menu_desc" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('datamenu') }}" class="btn btn-primary">Kembali ke Daftar Menu</a>
                </div>
            </form>
        </div>


        @include('pointakses.admin.include.sidebar_admin')>

    @endsection
