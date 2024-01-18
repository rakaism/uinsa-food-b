@extends('pointakses.admin.layouts.dashboard')'

@section('vendor')

<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>UNIT KERJA</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->nama_lengkap }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ format_phone($user->no_tlp) }}</td>
                <td>{{ $user->unit_kerja }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection