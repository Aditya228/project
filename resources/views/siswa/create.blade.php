@extends('layouts.master')
@section('content')
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Orang Tua
		<div class="panel-title pull-right">
		<a href="{{URL::previous()}}">Kembali</a></div>
		</div>
		<div class="panel-body">
			<form action="{{route('siswa.store')}}" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-label">Nama</label>
					<input type="text" name="a" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-label">Nama Orangtua</label>
					<select name="ortu" class="form-control">
					@foreach($ortu as $b)
					<option value="{{$b->id}}">{{$b->nama_ayah}} dan 
							{{$b->nama_ibu}}</option>
							@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-label">Umur </label>
					<input type="text" name="c" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-label">Jenis Kelamin </label>
					<input type="radio" name="jk" value="Laki-Laki" required="">Laki-Laki
					<input type="radio" name="jk" value="Perempuan" required="">Perempuan
				</div>

				<div class="form-group">
					<label class="control-label">Alamat</label>
					<textarea name="alamat" class="form-control" required=""></textarea>
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