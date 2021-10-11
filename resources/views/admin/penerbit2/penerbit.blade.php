@extends('layouts.admin')
@section('header', 'Penerbit')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<a href="{{ url('data/penerbit/create') }}" class="btn btn-sm btn-primary pull-right">Add Penerbit</a>
			</div>
			<div class="card-body p-0">
				<table id="example2" class="table table-striped">
					<thead>
						<tr>
							<th style="width: 10px">No</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Telpon</th>
							<th>Alamat</th>
							<th class="text-right">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data_penerbit as $num => $penerbit)
						<tr>
							<td>{{ $num+1 }}.</td>
							<td>{{ $penerbit->nama_penerbit }}</td>
							<td>{{ $penerbit->email }}</td>
							<td>{{ $penerbit->telp }}</td>
							<td>{{ $penerbit->alamat }}</td>
							<td class="text-right">
								<a href="{{ url('data/penerbit/'.$penerbit->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>

								<form action="{{ url('data/penerbit',['id' => $penerbit->id]) }}" method="post">
									<input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
									@method('delete')
									@csrf
								</form>

							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
