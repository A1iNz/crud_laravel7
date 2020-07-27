@extends('siswa')

@section('main')
<a href="{{url("siswa/create")}}" class="btn btn-success mb-2">Tambah Data</a>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>No. Absen</th>
                        <th>Tanggal</th>
                        <th colspan="2">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{$siswa->id}}</td>
                        <td>{{$siswa->nama}}</td>
                        <td>{{$siswa->kls}}</td>
                        <td>{{$siswa->no_abs}}</td>
                        <td>{{$siswa->tgl}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{url("siswas/{$siswa->id}/edit")}}">Edit</a>
                        </td>
                        <td>
                        <form action="{{url("siswas/{$siswa->id}")}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection()
