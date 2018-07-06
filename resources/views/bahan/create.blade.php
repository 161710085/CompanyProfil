	@extends('layouts.admin')
	@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
				  <div class="panel-heading">Tambah Bahan 
				  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
				  	</div>
				  </div>
				  <div class="panel-body">
				  	<form action="{{ route('bahan.store') }}" method="post" >
				  		{{ csrf_field() }}
				  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
				  			<label class="control-label">Nama Bahan </label>	
				  			<input type="text" name="nama" class="form-control"  required>
				  			@if ($errors->has('nama'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('nama') }}</strong>
	                            </span>
	                        @endif
				  		</div>
				  		<label class="control-label">Harga Bahan</label>	
				  			<input type="text" name="harga" class="form-control"  required>
				  			@if ($errors->has('harga'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('harga') }}</strong>
	                            </span>
	                        @endif
				  		</div>
				  		<br><br>
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
