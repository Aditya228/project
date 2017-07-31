@extends('layouts.master')
@section('content')
	
	@foreach ($ortu as $key ) 
	Nama ayah : {{$key->nama_ayah}}<br>
	Nama ibu : {{$key->nama_ibu}}<br>
	Umur ayah : {{$key->umur_ayah}}<br>
	Umur ibu : {{$key->umur_ibu}}<br>
	Nama Anak :
		@foreach($key->siswa as $data)
		<li>{{$data->nama}}</li>
		@endforeach
		<hr>
		@endforeach
@endsection