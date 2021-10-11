@extends('layouts.admin')
@section('header', 'Penerbit')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card card-secondary">
			<div class="card-header">
				<h3 class="card-title">Add Penerbit</h3>
			</div>
			<form method="post" action="{{ url('data/penerbit') }}">
				@csrf
				<div class="card-body">
					<div class="form-group">
						<label>Nama Penerbit</label>
						<input type="text" class="form-control" name="nama_penerbit">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" name="email">
					</div>
					<div class="form-group">
						<label>Telpon</label>
						<input type="text" class="form-control" name="telp">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat">
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
