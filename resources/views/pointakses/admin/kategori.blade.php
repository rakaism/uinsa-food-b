@extends('pointakses.admin.layouts.dashboard')'

@section('content')

<table class="table categories">
    <thead>
        <tr>
            <th>ID Kategori</th>
            <th>Nama Kategori</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->category_name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection