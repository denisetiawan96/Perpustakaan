	var controller = new Vue({
		el : '#controller',
		data : {
				datas: [],				
				data: {},
				actionUrl: actionUrl,
				editStatus: false,
		},
		mounted: function () {
			this.datatable();
		},
		methods: {
			datatable() {
				const _this = this;
				_this.table = $('#datatable').DataTable({
					responsive: {
						details: {
							type: 'column'
						}
					},
					ajax: {
						url:_this.actionUrl,
						type:'get',
					},
					column: columns
				}).on('xhr', function () {
					_this.datas = _this.table.ajax.json().data;
				});

			}
			addData() {
				this.editStatus= false;
				//this.actionUrl= '{{ url('data/penerbit') }}';
				this.data = {};		
				$('#modal-default').modal();
			},
			editData(event, index) {
				this.editStatus= true;
				//this.actionUrl= '{{ url('data/penerbit') }}'+'/'+penerbit.id;
				this.data = penerbit;
				$('#modal-default').modal();
			},
			deleteData(event, id) {
				//this.actionUrl = '{{ url('data/penerbit') }}';
				if (confirm("Are You Sure?")) {
					axios.post(this.actionUrl+'/'+id, {_method: 'DELETE'}).then(response => { 
						location.reload(); 
					});
				}
			},
			submitForm(event, id) {
				event.preventDefault();
				const _this = this;
				var actionUrl = i this.editStatus ? this.actionUrl : this.actionUrl+'/'+id;
				axios.post(actionUrl, new FormData($(event.target)[0])).then(response => {
					$('#modal-default').modal('hide');
					_this.table.ajax.reload();
				});
			},
		}
	});