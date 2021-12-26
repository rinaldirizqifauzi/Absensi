@extends('layouts.app')

@section('title')
    <h3><center>Ambil Absen Masuk</center></h3>
@endsection

@section('content')
<div class="row justify-content-center my-3">
    <div class="card card-info card-outline">
        <div class="card-body">
            <form action="{{ route('absenguru.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <center><label for="guru_id">Nama</label></center>
                    <div class="row justify-content-center my-2">
                        <div class="col-lg-6">
                            <select name="guru_id" id="guru_id" class="form-control">
                                <option selected disabled>Pilih</option>
                                    <option value="{{ Auth::user()->id }}" selected> {{ Auth::user()->name }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <center>
                        <label id="clock" style="font-size: 100px; color: #0A77DE; -webkit-text-stroke: 3px #00ACFE;
                            text-shadow: 4px 4px 10px #36D6FE,
                            4px 4px 20px #36D6FE,
                            4px 4px 30px #36D6FE,
                            4px 4px 40px #36D6FE;">

                        </label>
                    </center>
                </div>
                <center>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Absen Sekarang</button>
                    </div>
                </center>
                <div class="float-right">
                    <a href="{{ route('absenguru.index') }}" class="btn btn-primary">Kembali</a h>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
