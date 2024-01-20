@extends('pointakses.admin.layouts.dashboard')'


@section('content')


<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
<a href="{{ route('createvendor') }}" class="btn btn-success">Tambah Vendor</a>
    <div class="content">
    <div class="col-12 mt-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DATA VENDOR</h3>
    
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Vendor</th>
                    <th>Alamat</th>
                    <th>No. Tlp</th>
                    <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($vendors as $vendor)
                <tr>
                    <td>{{ $vendor->id}}</td>
                    <td>{{ $vendor->vendor_name }}</td>
                    <td>{{ $vendor->vendor_adress }}</td>
                    <td>{{ $vendor->vendor_phone_num }}</td>
                    <td>
                      <a href="{{ route('deletevendor', ['id' => $vendor->id]) }}"
                          class="btn btn-danger"
                          onclick="return confirm('Apakah yakin dihapus? {{ $vendor->vendor_name }}');">
                          Hapus
                      </a>
                  </td>
                    <td><a href="{{ route('editvendor', $vendor->id) }}" class="btn btn-info">Edit</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    </div>
    @include('pointakses.admin.include.sidebar_admin')>
@endsection
