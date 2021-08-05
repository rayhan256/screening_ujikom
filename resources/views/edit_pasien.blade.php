@extends('layouts/main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Update Pasien</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/update" method="post">
                        @csrf
                        <input type="text" value="{{ $data->id }}" name="id">
                        <div class="form-group">
                            <label for="">Nama Pasien</label>
                            <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="date" class="form-control" value="{{ $data->date }}">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="gender" id="" class="form-control">
                                <option value="{{ $data->gender }}">{{ $data->gender }}</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="address" class="form-control" value="{{ $data->address }}">
                        </div>
                        <input type="submit" value="Update Pasien" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
