@extends('siswa')

@section('main')
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <h2 class="display-6">Edit</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <form action="{{url("/siswas/{$siswa->id}")}}" method="post">
                @method("PATCH")
                @csrf
                <div class="form-group">
                    <label for="nama">Full Name</label>
                    <input value="{{$siswa->nama}}" class="form-control" type="text" name="nama">
                </div>
                <div class="form-group">
                    <label for="kls">Kelas</label>
                    <input value="{{$siswa->kls}}" class="form-control" type="text" name="kls">
                </div>
                <div class="form-group">
                    <label for="no_abs">No.Absen</label>
                    <input value="{{$siswa->no_abs}}" class="form-control" type="text" name="no_abs">
                </div>
                <div class="form-group">
                    <label for="tgl">Tanggal</label>
                    <input value="{{$siswa->tgl}}" class="form-control" type="date" name="tgl">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
