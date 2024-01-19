@extends('pointakses.admin.layouts.dashboard')'


@section('content')


<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
   <h1>EditMenu</h1>

   @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    <form action="{{ route('updatemenu', $menus->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="menu_name">Nama:</label>
        <input type="text" name="menu_name" id="menu_name" value="{{ $menus->menu_name }}">
        <br>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <a href="{{ route('datamenu') }}">Kembali ke Daftar Menu</a>
</div>
@include('pointakses.admin.include.sidebar_admin')>

@endsection
