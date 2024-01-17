@extends('pointakses.admin.layouts.dashboard')'

@section('vendor')

<table class="table">
    <thead>
        <tr>
            <th>Nama VENDOR</th>
            <th>ALAMAT VENDOR</th>
            <th>NO Telepon</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vendors as $vendor)
            <tr>
                <td>{{ $vendor->vendor_name }}</td>
                <td>{{ $vendor->vendor_adress }}</td>
                <td>{{ $vendor->vendor_phone_num }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection