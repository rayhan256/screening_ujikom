@extends('layouts/main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Data Pasien</h4>
                        <a href="{{ route('add.pasien.view') }}" class="btn btn-primary my-4">Tambah Pasien</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $index = 1;
                            @endphp
                            @foreach ($data as $i)
                                <tr>
                                    <td>{{ $index++ }}</td>
                                    <td>{{ $i->name }}</td>
                                    <td>{{ $i->date }}</td>
                                    <td>{{ $i->gender }}</td>
                                    <td>{{ $i->address }}</td>
                                    <td>
                                        <a href="/update/{{ $i->id }}" class="btn btn-primary">Update</a>
                                        <a href="/delete/{{ $i->id }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
