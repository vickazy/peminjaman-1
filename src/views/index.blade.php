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
                    <a href="peminjamannew" class="btn btn-info" role="button">Data Baru</a>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Karyawan</th>
                                <th>Barang</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $v)
                            <tr>
                                <td>
                                    {{ $v->id }}
                                </td>
                                <td>
                                    {{ $v->karyawan }}
                                </td>
                                <td>
                                    {{ $v->barang }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection