@extends('layouts/main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Tambah Pasien</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('add.pasien') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Pasien</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="gender" id="" class="form-control">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <input type="submit" value="Tambah Pasien" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
