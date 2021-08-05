@extends('layouts/main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Tambah Dokter</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('add.dokter') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Dokter</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Poli</label>
                            <select name="poli_id" class="form-control">
                                @foreach ($poli as $i)
                                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" value="Tambah Dokter" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
