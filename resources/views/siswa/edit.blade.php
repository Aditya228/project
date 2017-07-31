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
			<form action="{{route('siswa.update',$siswa->id)}}" method="post">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<label class="control-label">Nama</label>
					<input type="text" name="a" class="form-control" value="{{$siswa->nama}}" required="">
				</div>

				<div class="form-group">
					<label class="control-label">Nama Orangtua</label>
					<select name="ortu" class="form-control">
					@foreach($ortu as $b)
					<option value="{{$b->orangtua_id}}">{{$b->nama_ayah}} dan 
							{{$b->nama_ibu}}</option>
							@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-label">Umur </label>
					<input type="text" name="c" value="{{$siswa->umur}}" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-label">Jenis Kelamin </label>
					<input type="radio" name="jk"  required="" value="Laki-Laki" {{$siswa->jenis_kelamin=='Laki-Laki'?'checked':''}}>Laki-Laki
					<input type="radio" name="jk"  required="" value="Perempuan" {{$siswa->jenis_kelamin=='Perempuan'?'checked':''}}>Perempuan
				</div>

				<div class="form-group">
					<label class="control-label">Alamat</label>
					<textarea name="alamat" class="form-control" required="" value="{{$siswa->alamat}}">{{$siswa->alamat}}</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection