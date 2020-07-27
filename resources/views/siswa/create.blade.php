@extends('siswa')

@section('main')
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <h2 class="display-6">Tambah Data</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <form action="{{url("/siswas")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Full Name</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div class="form-group">
                    <label for="kls">Kelas</label>
                    <input class="form-control" type="text" name="kls">
                </div>
                <div class="form-group">
                    <label for="no_abs">No.Absen</label>
                    <input class="form-control" type="text" name="no_abs">
                </div>
                <div class="form-group">
                    <label for="tgl">Tanggal</label>
                    <input class="form-control" type="date" name="tgl">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
