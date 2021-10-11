@extends('layouts.admin')
@section('header', 'Anggota')

@push('css')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
<component id="controller">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							<a href="#" @click="addData()" class="btn btn-sm btn-primary pull-right">Add Anggota</a>
						</div>
						<div class="col-md-2">
							<select class="form-control" name="sex">
								<option value="0">Semua Jenis Kelamin</option>
								<option value="P">Perempuan</option>
								<option value="L">Laki-Laki</option>
							</select>
						</div>
				    </div>
				</div>
				

				<div class="card-body">
					<table id="datatable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Jenis Kelamin</th>
								<th>Telpon</th>
								<th>Alamat</th>
								<th>Email</th>	
								<th>Action</th>								
							</tr>
						</thead>						
					</table>
				</div>
			
		 <div class="modal fade" id="modal-default">
				<div class="modal-dialog">
					<div class="modal-content">
						<form method="post" :action="actionUrl" autocomplete="off" @submit="submitForm($event, data.id)">
							<div class="modal-header">

								<h4 class="modal-title" v-if="!editStatus">Add Anggota</h4>
								<h4 class="modal-title" v-if="editStatus">Edit Anggota</h4>

								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden= "true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<input type="hidden" name="_method" value="PUT" v-if="editStatus">
								@csrf

								<div class="form-group">
									<label>Nama Anggota</label>
									<input type="text" class="form-control" name="name" :value="data.name" required="">
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									
									<select name="sex" class="form-control">
										<option :selected="data.sex == 'P' ">Perempuan</option>
										<option :selected="data.sex == 'L' ">Laki - Laki</option>
									</select>
								</div>
								<div class="form-group">
									<label>Telpon</label>
									<input type="text" class="form-control" name="telp" :value="data.telp" required="">
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" class="form-control" name="alamat" :value="data.alamat" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="text" class="form-control" name="email" :value="data.email" required="">
								</div>
							</div>
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>	 
</component>
@endsection

@push ('js')
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"> </script>
<script type="text/javascript">
	var actionUrl = '{{ url('data/anggota') }}';
	var columns = [
		{data: 'name', class: 'text-center', orderable: true},
		{data: 'sex', class: 'text-center', orderable: true},
		{data: 'telp', class: 'text-center', orderable: true},
		{data: 'alamat', class: 'text-center', orderable: true},
		{data: 'email', class: 'text-center', orderable: true},
		{render: function (index, row, data, meta) {
			return `
			<a href="#" class="btn btn-warning btn-sm" onclick="controller.editData(event, ${meta.row})">
				Edit
			</a>
			<a class="btn btn-danger btn-sm" onclick="controller.deleteData(event, ${data.id})">
				Delete
			</a>`;
		}, orderable: false, width: '100px', class: 'text-center'},
	];
 
</script>
<script src="{{ asset('js/data.js') }}"></script>
<script type="text/javascript">
	$('select[name=sex]').on('change', function() {
		sex = $('select[name=sex]').val();

		if (sex == 0) {
			controller.table.ajax.url(actionUrl).load();
		} else {
			controller.table.ajax.url(actionUrl+'?sex='+sex).load();
		}
	});
</script>
@endpush

	