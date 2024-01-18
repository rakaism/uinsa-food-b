@extends('pointakses.admin.layouts.dashboard')'


@section('content')


<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
    }
</style>

  <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Vendor</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vendors as $vendor)
        <tr>
            <td>{{ $vendor->id }}</td>
            <td>{{ $vendor->vendor_name }}</td>
            <td>{{ $vendor->vendor_phone_num }}</td>
            <td>{{ $vendor->vendor_adress }}</td>
            <td>
                        <a href="{{ route('editvendor', $vendor->id) }}">Edit</a>
                        {{-- <form action="{{ route('users.destroy', $user->id) }}" method="POST"> --}}
                            {{-- @csrf --}}
                            {{-- @method('DELETE') --}}
                            {{-- <button type="submit">Hapus</button> --}}
                        {{-- </form> --}}
                    </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('createvendor') }}">Tambah Vendor</a>
</div>
@include('pointakses.admin.include.sidebar_admin')>

@endsection
