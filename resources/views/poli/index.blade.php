@extends('layouts/main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Data Poli</h4>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Poli</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                                $index = 1;
                            @endphp
                            @foreach ($data as $i)
                                <tr>
                                    <td>{{ $index++ }}</td>
                                    <td>{{ $i->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
