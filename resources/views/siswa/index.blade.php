@extends('layouts.master')
@section('content')
<div class="row">
	<center><h1>Data Siswa</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Siswa
		<div class="panel-title pull-right">
		<a href="/siswa/create">Tambah Data</a></div>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Nama OrangTua</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($siswa as $data)
					<tr>
						<td>{{$data->id}}</td>
						<td>{{$data->nama}}</td>
						<td>{{$data->orangtua->nama_ayah}} dan 
							{{$data->orangtua->nama_ibu}}</td>
						<td>{{$data->umur}}</td>
						<td>{{$data->alamat}}</td>
							<td><a class="btn btn-danger" href="/siswa/{{$data->id}}/edit">Edit</a></td>
							<td><a class="btn btn-default" href="/siswa/{{$data->id}}">Show</a></td>
							<td>
								<form action="{{route('siswa.destroy',$data->id)}}" method="post">
								<input name="_method" type="hidden" value="DELETE">
								<input name="_token" type="hidden">
								<input class="btn btn-primary" type="submit" value="Delete">
								{{csrf_field()}}
							</form>
							</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection