@extends('layouts.admin')
@section('header', 'Peminjaman')

@push('css')
<!-- DataTables -->
  
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
 
  <style type="text/css">
  		.select2-container--default .select2-selection--multiple .select2-selection_choice {
  			background-color: #007bff;
  		}
  </style>
@endpush

@section('content')
<component id="controller">
			<div class="card">
				<div class="card-header">
						
			              <div class="col-12">
			                <div class="card">
			                  <div class="card-header ">
			                  	<div class="row">
							<div class="col-md-7">
							<a href="#" @click="addData()" class="btn btn-sm btn-primary pull-right">Add Transaksi</a>
						</div>
						<div class="row">
			                    <div class="row justify-content-between align-items-center">
			                      <div class="col d-flex align-items-center justify-content-end">
			                          <div class="row">
			                            <div class="col-4 align-self-end">
			                              <select name="status" id="" class="custom-select">
			                                <option value="0">Status</option>
			                                <option value="belum">Belum DiKembalikan</option>
			                                <option value="sudah">Sudah DiKembalikan</option>
			                              </select>
			                            </div>
			                            <div class="col">
			                              <label for="tgl_pinjam">Filter Tanggal Pinjam</label>
			                              <div class="input-group">
			                                <input type="date" id="tgl_pinjam" name="tgl_pinjam" value="" class="form-control">
			                                <span class="input-group-append">
			                                  <button type="button" class="btn btn-info btn-flat" onclick="resetDate()"><i class="fas fa-search"></i></button>
			                                </span>
			                              </div>
			                            </div>
			                          </div>
			                      </div>
			                    </div>
			                  </div>
						</div>
				    </div>
				</div>
				

				<div class="card-body">
					<table id="datatable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Tanggal Pinjam</th>
								<th>Tanggal Kembali</th>
								<th>Nama Peminjam</th>
								<th>Lama Peminjam(Hari)</th>
								<th>Total Buku</th>
								<th>Total Bayar</th>
								<th>Status</th>		
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

								<h4 class="modal-title" v-if="!editStatus">Add Peminjaman</h4>
								<h4 class="modal-title" v-if="editStatus">Edit Peminjaman</h4>

								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden= "true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<input type="hidden" name="_method" value="PUT" v-if="editStatus">
								@csrf

								<div class="form-group">
									<label>Nama Peminjam</label>
									<input type="text" class="form-control" name="name" :value="data.name" required="">
								</div>
								<div class="form-group">
				                  <label>Tanggal:</label>
				                  	<div class="input-group">
					                    <div class="input-group-prepend">
					                      <span class="input-group-text">
					                        <i class="far fa-calendar-alt"></i>
					                      </span>
					                    </div>
					                    	<input type="text" class="form-control float-right" id="reservation">
				                  	</div>
			                  <!-- /.input group -->
			               		</div>
								<div class="form-group">
									<label>Total Bayar</label>
									<input type="text" class="form-control" name="telp" :value="data.telp" required="">
								</div>
								<div class="col-md-6">
									<div class="form-group">
					                  <label>Buku</label>
					                  <select class="select2" multiple="multiple" data-placeholder="" style="width: 100%;">
					                  </select>
					                </div>
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
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"> </script>
<script type="text/javascript">
	var actionUrl = '{{ url('data/peminjaman') }}';
	var columns = [
		{data: 'tgl_pinjam', class: 'text-center', orderable: true},
		{data: 'tgl_kembali', class: 'text-center', orderable: true},
		{data: 'id_anggota', class: 'text-center', orderable: true},
		{data: 'id_anggota', class: 'text-center', orderable: true},
		{data: 'id_anggota', class: 'text-center', orderable: true},
		{data: 'id_anggota', class: 'text-center', orderable: true},
		{data: 'status', class: 'text-center', orderable: true},
		{render: function (index, row, data, meta) {
			return `
			<a href="#" class="btn btn-primary btn-sm" onclick="controller.editData(event, ${meta.row})">
				Detail
			</a>
			<a href="#" class="btn btn-warning btn-sm" onclick="controller.editData(event, ${meta.row})">
				Edit
			</a>
			<a class="btn btn-danger btn-sm" onclick="controller.deleteData(event, ${data.id})">
				Delete
			</a>`;
		}, orderable: false, width: '200px', class: 'text-center'},
	];
 
</script>
<script src="{{ asset('js/data.js') }}"></script>
<script type="text/javascript">
	function resetDate(){
    let tgl_pinjam = $('input[name=tgl_pinjam]').val();
    let status = $('select[name=status]').val();
    $('input[name=tgl_pinjam]').val('');
    controller.table.ajax.url(`${actionUrl}?status=${status}`).load();
    console.log('koo');
    
  }
  $(function(){
    $('.select2').select2({
      theme: 'bootstrap4'
    })
    $('select[name=status]').on('change',function(){
      if(status === '0'){
        controller.table.ajax.url(actionUrl).load()
      } else {
        let tgl_pinjam = $('input[name=tgl_pinjam]').val();
        let status = $('select[name=status]').val();
        controller.table.ajax.url(`${actionUrl}?status=${status}&tgl_pinjam=${tgl_pinjam}`).load()
      }
    });
    $('input[name=tgl_pinjam]').on('change',function(){
      if(tgl_pinjam === null){
        controller.table.ajax.url(actionUrl).load();
      }
      if(tgl_pinjam !== null){
        let tgl_pinjam = $('input[name=tgl_pinjam]').val();
        let status = $('select[name=status]').val();
        controller.table.ajax.url(`${actionUrl}?status=${status}&tgl_pinjam=${tgl_pinjam}`).load();
      }
    })
  });
</script>
@endpush

