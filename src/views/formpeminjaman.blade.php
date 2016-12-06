@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h2>Peminjaman</h2>
                    <p>ini data Peminjaman</p>
                    <form action="peminjaman" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Nama Karyawan:</label>
                            <select name="karyawan_id">
                                @foreach ($karyawan as $v)
                                <option value="{{ $v->id }}">{{ $v->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Barang:</label>
                            <select name="barang_id">
                                @foreach ($barang as $v)
                                <option value="{{ $v->id }}">{{ $v->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection