@extends('template.base')

@section('content')

			<div class="card" style="padding: 10px; height: auto; margin-top: 20px; padding-bottom: 50px;">
				<div class="card-header">
					<b>Tambah Data Product</b> <hr>	
				</div> 
					<div class="card-body">
						<form action="{{url('product',$product->id)}}" method="POST">
						@csrf
						@method("PUT")
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$product->nama}}">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
						<label for="" class="control-label">Harga</label>
						<input type="text" class="form-control" name="harga"value="{{$product->harga}}">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
								<label for="" class="control-label">Berat</label>
								<input type="text" class="form-control" name="berat"value="{{$product->berat}}">
								</div>
							</div>
							<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Stock</label>
								<input type="text" class="form-control" name="stock"value="{{$product->stock}}">
							</div>
						</div>
					</div>
							
						<div class="form-group">
							<label for="" class="control-label">Deskripsi</label>
							<textarea name="deskripsi" class="form-control">{{$product->deskripsi}}</textarea>
						</div>
						<button class="btn btn-primary float-right" style="float: right;"><i class="fa da-save">Simpan</i></button>

						</form>
					</div>
				
				</div>

@endsection