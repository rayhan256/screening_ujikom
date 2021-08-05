@extends('layouts/main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Tambah Poli</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('add.poli') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Poli</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <input type="submit" value="Tambah Poli" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
