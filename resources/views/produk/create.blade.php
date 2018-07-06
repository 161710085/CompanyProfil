@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data produk
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama produk</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('ukuran') ? ' has-error' : '' }}">
			  			<label class="control-label">Ukuran</label>	
<input type="text"  name="ukuran" class="form-control" required>
			  			@if ($errors->has('ukuran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ukuran') }}</strong>
                            </span>
                        @endif
			  		</div>
			  			<div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
			  			<label class="control-label">Warna</label>	
<input type="text"  name="warna" class="form-control" required>
			  			@if ($errors->has('warna'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
			  		</div>
			  			
			  			<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                <input name="foto" type="file" required>
                            </div>
			  		<div class="form-group {{ $errors->has('bahan_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Bahan</label>	
			  			<select name="bahan_id" class="form-control">
			  				@foreach($bahan as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('bahan_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bahan_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  			<div class="form-group {{ $errors->has('jenis_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis</label>	
			  			<select name="jenis_id" class="form-control">
			  				@foreach($jenis as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('jenis_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_id') }}</strong>
                            </span>
                        @endif
			  		</div>
<div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
			  			<label class="control-label">kategori</label>	
			  			<select name="kategori_id" class="form-control ">
			  				@foreach($kategori as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategori_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection