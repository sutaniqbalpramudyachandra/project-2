@extends('template.base')

@section('content')

			<div class="card" style="padding: 10px; height: auto; margin-top: 20px; padding-bottom: 50px;">
				<div class="card-header">
					<b>Tambah Data Product</b> <hr>	
				</div> 
					<div class="card-body">
						<form action="{{url('product')}}" method="POST">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
						<label for="" class="control-label">Harga</label>
						<input type="text" class="form-control" name="harga">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
								<label for="" class="control-label">Berat</label>
								<input type="text" class="form-control" name="berat">
								</div>
							</div>
							<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Stok</label>
								<input type="text" class="form-control" name="stock">
							</div>
						</div>
					</div>
							
						<div class="form-group">
							<label for="" class="control-label">Deskripsi</label>
							<textarea name="deskripsi" class="form-control"></textarea>
						</div>
						<button class="btn btn-primary float-right" style="float: right;"><i class="fa da-save">Simpan</i></button>

						</form>
					</div>
				
				</div>

@endsection