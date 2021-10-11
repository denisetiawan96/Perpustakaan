@extends('layouts.admin')
@section('header', 'Buku')

@push('css')
@endpush

@section('content')
<component id="controller">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<a href="#" @click="addData()" class="btn btn-sm btn-primary pull-right">Add Buku</a>
					</div>					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-search"></i></span>
					</div>
					<input type="text" v-model="search" class="form-control" autocomplete="off" placeholder="Cari Buku Berdasarkan Judul">
				</div>
			</div>

			<div class="cool-md-5 col-sm-6 col-sx-12" v-for="buku in filteredList">
				<div class="info-box" >
					<div class="info-box-content">
						<span class="info-box-text h3">@{{ buku.judul }} (@{{ buku.qty_stok }})</span>
						<span class="info-box-number">Rp.@{{ formatPrice(buku.harga_pinjam) }},-<small></small></span>
					</div>
						<div class="col-md-0">
						<button type="button" v-on:click="editData(buku)" class="btn btn-warning" data-dismiss="modal">
						Edit</button>
						
						<button type="button" v-on:click="deleteData(buku.id)" class="btn btn-danger" data-dismiss="modal">
						Delete</button>
						</div>
					</div>
					
				</div>	
			</div>
		</div> 

		<div class="modal fade" id="modal-default">
				<div class="modal-dialog">
					<div class="modal-content">
						<form method="post" :action="actionUrl" autocomplete="off" @submit="submitForm($event, data.id)">
							<div class="modal-header">

								<h4 class="modal-title" v-if="!editStatus">Buku</h4>
								<h4 class="modal-title" v-if="editStatus">Buku</h4>

								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden= "true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<input type="hidden" name="_method" value="PUT" v-if="editStatus">
								@csrf

								<div class="form-group">
									<label>Isbn</label>
									<input type="text" class="form-control" name="isbn" :value="data.isbn" required="">
								</div>
								<div class="form-group">
									<label>Judul</label>
									<input type="text" class="form-control" name="judul" :value="data.judul" required="">
								</div>
								<div class="form-group">
									<label>Tahun</label>
									<input type="text" class="form-control" name="tahun" :value="data.tahun" required="">
								</div>
								<div class="form-group">
									<label>Id Penerbit</label>
									<input type="text" class="form-control" name="id_penerbit" :value="data.id_penerbit" required="">
								</div>
								<div class="form-group">
									<label>Id Pengarang</label>
									<input type="text" class="form-control" name="id_pengarang" :value="data.id_pengarang" required="">
								</div>
								<div class="form-group">
									<label>Id Katalog</label>
									<input type="text" class="form-control" name="id_katalog" :value="data.id_katalog" required="">
								</div>
								<div class="form-group">
									<label>Stok</label>
									<input type="text" class="form-control" name="qty_stok" :value="data.qty_stok" required="">
								</div>
								<div class="form-group">
									<label>Harga </label>
									<input type="text" class="form-control" name="harga_pinjam" :value="data.harga_pinjam" required="">
								</div>
							</div>
							<div class="modal-footer justify-content-between">								
								<button type="submit" class="btn btn-primary">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>	 
</component>
@endsection

@push('js')
<script type="text/javascript">
		var actionUrl = '{{ url('data/buku') }}';
		var controller = new Vue({
			el : '#controller',
			data : {
				search: '',
				data_buku: [],
				data: {},
				actionUrl: actionUrl,
				editStatus: false,
			},
			mounted: function () {
				this.databuku();
			},
			methods: {
				databuku() {
					const _this = this;
					$.ajax({
						url: actionUrl,
						method: 'GET',
						success: function(data) {
							_this.data_buku = JSON.parse(data);
						},
						error: function (error) {
							console.log(error);
						}
					});
				},
				addData() {
					this.editStatus= false;
					this.actionUrl= '{{ url('data/buku') }}';
					this.data = {};		
					$('#modal-default').modal();
				},
				deleteData(id) {
					
				this.actionUrl = '{{ url('data/buku') }}';
				if (confirm("Are You Sure?")) {
					axios.post(this.actionUrl+'/'+id, {_method: 'DELETE'}).then(response => { 
						location.reload(); 
					});
				  }
				},
				formatPrice(value) {
					let val = (value/1).toFixed(0).replace('.', ',')
					return val.toString().replace(/\8(?=(\d{3})+(?!\d))/g, ",")
				},
				editData(buku) {
				this.editStatus= true;
				this.actionUrl= '{{ url('data/buku') }}'+'/'+buku.id;
				this.data = buku;
				$('#modal-default').modal();
				},
			},
			computed: {
				filteredList() {
					return this.data_buku.filter(buku => {
						return buku.judul.toLowerCase().includes(this.search.toLowerCase())
					})
				}
			}
		})
</script>
@endpush 