@extends('pointakses.admin.layouts.dashboard')'
@section('content')
    <div class="content">
        <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
            <div class="card card-primary mt-4">
                <div class="card-header">
                    <h3 class="card-title"> Tambah Users</h3>
                </div>
                <form action="{{ url('/users') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-goup">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="nama_lengkap" class="form-control" id="exampleInputEmail1" placeholder="nama_lengkap" name="nama_lengkap">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password">
                        </div>
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                              <label for="role">Select</label>
                              <select class="custom-select rounded-0" name="role">
                                <option selected="">Pilih Role</option>
                                <option value="user">user</option>
                                <option value="admin">admin</option>
                              </select>
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="no_tlp">No.tlp</label>
                            <input type="no_tlp" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="no_tlp">
                        </div>
                        <div class="form-group">
                            <label for="unit_kerja">Unit Kerja</label>
                            <input type="unit_kerja" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="unit_kerja">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        @include('pointakses.admin.include.sidebar_admin')>
    @endsection
