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
			<form action="{{route('orangtua.store')}}" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-label">Nama Ayah</label>
					<input type="text" name="a" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-label">Nama Ibu</label>
					<input type="text" name="b" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-label">Umur Ayah</label>
					<input type="text" name="c" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-label">Umur Ibu</label>
					<input type="text" name="d" class="form-control" required="">
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