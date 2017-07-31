@extends('layouts.master')
@section('content')
<div class="row">
	<center><h1>Data Siswa</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Siswa
		<div class="panel-title pull-right">
		<a href="{{URL::previous()}}">Kembali</a></div>
		</div>
		<div class="panel-body">
				<div class="form-group">
					<label class="control-label">Nama</label>
					<input type="text" name="a" class="form-control" value="{{$siswa->nama}}" readonly="">
				</div>

				<div class="form-group">
					<label class="control-label">Nama Orangtua</label>
					<input type="text" name="ortu" class="form-control" value="{{$siswa->orangtua->nama_ayah}} dan {{$siswa->orangtua->nama_ibu}}" readonly="">
				</div>

				<div class="form-group">
					<label class="control-label">Umur </label>
					<input type="text" name="c" value="{{$siswa->umur}}" class="form-control" readonly="">
				</div>

				<div class="form-group">
					<label class="control-label">Jenis Kelamin </label>
					<input type="text" name="jk"  readonly="" class="form-control" value="{{$siswa->jenis_kelamin}}">
				</div>

				<div class="form-group">
					<label class="control-label">Alamat</label>
					<textarea name="alamat" class="form-control" readonly="" value="{{$siswa->alamat}}">{{$siswa->alamat}}</textarea>
				</div>
		</div>
	</div>
</div>

@endsection