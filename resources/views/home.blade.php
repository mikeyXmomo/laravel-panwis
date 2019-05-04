@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NPM</th>
                        <th scope="col">prodi</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Ukuran Toga</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->nrp}}</td>
                        <td>{{$item->prodi}}</td>
                        <td>{{$item->kelas}}</td>
                        <td>{{$item->ukuran_toga}}</td>
                        <td>{{$item->alamat}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
