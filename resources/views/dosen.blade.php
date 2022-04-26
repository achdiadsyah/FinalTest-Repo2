@extends('main')

@section('page_title', $title)

@section('content')

<button class="btn btn-success btn-sm" onclick="show_modal('', 'insert')">Tambah Data</button>

<table class="table table-responsive">
    <thead>
        <tr>
            <th>No.</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($result as $item)
            <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$item->dosen_nip}}</td>
                <td>{{$item->dosen_nama}}</td>
                <td>{{$item->dosen_jabatan}}</td>
                <td>
                    <button class="btn btn-primary btn-sm" onclick="show_modal({{$item->id}}, 'update')">Update</button>
                    <button class="btn btn-danger btn-sm" onclick="delete({{$item->id}})">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>




<!-- Modal -->
<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal_title"></h5>
        </div>
        <div class="modal-body">
            <form id="form">
                <input type="hidden" id="id">
                <div class="form-group">
                    <label for="dosen_nip">NIP Dosen</label>
                    <input type="text" class="form-control" id="dosen_nip" placeholder="Masukkan NIP Dosen">
                </div>
                <div class="form-group">
                    <label for="dosen_nama">Nama Dosen</label>
                    <input type="text" class="form-control" id="dosen_nama" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="dosen_jabatan">Jabatan</label>
                  <input type="text" id="dosen_jabatan" class="form-control" placeholder="Jabatan">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="MyModal">Close</button>
            <button type="button" id="save_btn" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>
@endsection