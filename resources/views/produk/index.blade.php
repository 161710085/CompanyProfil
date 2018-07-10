@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data produk
			  	<div class="panel-title pull-right">
@role('admin')
			  		<a href="{{ route('produk.create') }}">Tambah</a>
			 @endrole
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table table-bordered">
				  	<thead>
			  		<tr>
			  		  <th>No</th>	
					  <th>Nama </th>
					  <th>Ukuran</th>
					  <th>Warna</th>
					  <th>Harga</th>
					  <th>Foto</th>
					  <th>Bahan </th>
					  <th>Kategori</th>
					  <th>Jenis</th>
					  
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($produk as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td><p>{{ $data->ukuran }}</p></td>
				    	<td>{{ $data->warna }}</td>
				    	<td>{{ $data->harga }}</td>
				    	<td><img src="{{asset('assets/img/produk/'.$data->foto)}}" style="max-height: 125px ; max-width: 125px;margin-top: 7px;"></td>
				    	
				    	<td><p>{{ $data->bahan->nama }}</p></td>
				    		<td><p>{{ $data->kategori->nama }}</p></td>
				    	<td><p>{{ $data->jenis->nama }}</p></td>
				    	
				    	
						<td>
							@role('admin')
							<a class="btn btn-warning" href="{{ route('produk.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('produk.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>

						</td>
						@endrole
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection