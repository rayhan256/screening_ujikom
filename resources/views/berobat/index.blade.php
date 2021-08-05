@extends('layouts/main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Data Berobat</h4>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>

                                <th>No Transaksi</th>
                                <th>Id Pasien</th>
                                <th>Nama Pasien</th>
                                <th>Usia</th>
                                <th>Jenis Kelamin</th>
                                <th>Keluhan</th>
                                <th>Nama Poli</th>
                                <th>Dokter</th>
                                <th>Biaya Admin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $index = 1;
                            @endphp
                            @foreach ($data as $i)
                                <tr>

                                    <td>{{ $i['tr_id'] }}</td>
                                    <td>{{ $i['pasien_id'] }}</td>
                                    <td>{{ $i['pasien_name'] }}</td>
                                    <td>{{ $i['usia'] }} Tahun</td>
                                    <td>{{ $i['gender'] }}</td>
                                    <td>{{ $i['keluhan'] }}</td>
                                    <td>{{ $i['poli'] }}</td>
                                    <td>{{ $i['dokter'] }}</td>
                                    <td>{{ $i['biaya'] }}</td>
                                    <td>
                                        <a href="/berobat/update/{{ $i['id'] }}" class="btn btn-primary">Update</a>
                                        <a href="/berobat/delete/{{ $i['id'] }}" class="btn btn-danger">Delete</a>
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
