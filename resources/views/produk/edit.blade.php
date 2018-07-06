@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Produk 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('produk.update',$produk->id) }}" method="post"  enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama produk</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $produk->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		<div class="form-group {{ $errors->has('ukuran') ? ' has-error' : '' }}">
			  			<label class="control-label">Ukuran</label>	
			  			<input type="text" name="ukuran" class="form-control" value="{{ $produk->ukuran }}"  required>
			  			@if ($errors->has('ukuran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ukuran') }}</strong>
                            </span>
                        @endif
			  		
			  		<div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
			  			<label class="control-label">Warna </label>	
			  			<input type="text" name="warna" class="form-control" value="{{ $produk->warna }}"  required>
			  			@if ($errors->has('warna'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga </label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $produk->harga }}"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                @if (isset($produk) && $produk->foto)
                                    <p>
                                        <br>
                                    <img src="{{ asset('assets/img/produk/'.$produk->foto) }}" style="width:250px; height:250px;" alt="">
                                    </p>
                                @endif
                                <input name="foto" type="file" value="{{ $produk->foto }}">
                            </div>
                             <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Bahan</label>
                                <select class="form-control" name="bahan_id" required>
                                    @foreach($bahan as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach()
                                </select>
                            </div>
                             <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Kategori</label>
                                <select class="form-control" name="kategori_id" required>
                                    @foreach($kategori as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach()
                                </select>
                            </div>
                             <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Jenis</label>
                                <select class="form-control" name="jenis_id" required>
                                    @foreach($jenis as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach()
                                </select>
                            </div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection