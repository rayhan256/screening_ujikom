@extends('layouts/main')
@section('content')
    @php
    $months = ['January', 'February', 'March', 'April', 'Mei', 'June', 'July', 'August', 'September', 'Oktober', 'November', 'December'];
    @endphp
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Edit Data Berobat</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/berobat/update" method="post">
                        @csrf
                        <input type="hidden" value="{{ $data->id }}" name="id">
                        <div class="form-group">
                            <label for="">Nama Pasien</label>
                            <select name="pasien_id" class="form-control">
                                @foreach ($pasien as $i)
                                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-4">
                                <label for="">Tanggal</label>
                                <select name="day" class="form-control">
                                    @for ($i = 1; $i <= 30; $i++)
                                        <option value={{ '0' . $i }}>{{ '0' . $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="">Bulan</label>
                                <select name="month" class="form-control">
                                    @for ($i = 0; $i <= count($months) - 1; $i++)
                                        <option value={{ $i + 1 }}>{{ $months[$i] }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="">Tahun</label>
                                <input type="text" class="form-control" name="year">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Dokter</label>
                            <select name="dokter_id" class="form-control">
                                @foreach ($dokter as $i)
                                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Keluhan</label>
                            <input type="text" name="keluhan" class="form-control" value="{{ $data->keluhan }}">
                        </div>
                        <div class="form-group">
                            <label for="">Biaya Admin</label>
                            <input type="text" name="adm" class="form-control" value="{{ $data->adm }}">
                        </div>
                        <input type="submit" value="Update Data Berobat" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
