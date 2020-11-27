@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<br>
			<br>
			<div class="card"style="padding: 5px; height: auto;">
				<div class="card-header">
					Data Product
					<a href="{{url('product/create')}}" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus"></i>Tambah Data</a>
					
					</div> 
					<div class="card-body" style="margin-top: 8px;">
						<table class="table">
							<thead>
								<th>No</th>
								<th >Aksi</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Stock</th>
							</thead>
							<tbody>
								@foreach($list_product as $product)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group ">
										<a href="{{url('product', $product->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
										<a href="{{url('product', $product->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete', ['url' => url('product', $product->id)])
										</div>
									</td>
									<td>{{$product->nama}}</td>
									<td>{{$product->harga}}</td>
									<td>{{$product->stock}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						
					</div>
				
				</div>
			
			</div>
		
		</div>
	
	</div>
	
@endsection