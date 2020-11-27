@extends('template.base')

@section('content')

			<div class="card" style="padding: 10px; height: auto; margin-top: 20px; padding-bottom: 50px;">
				<div class="card-header">
					<b>Detail Data Product</b> <hr>	
				</div> 
					<div class="card-body">
						<h3>{{($product->nama)}}</h3>
						<hr>
						<p>Rp.{{number_format($product->harga)}} |
							Stock : {{$product->stock}} |
							Berat : {{$product->berat}} gr
						</p>
						<p>
							{!! nl2br($product->deskripsi)!!}
						</p>
					</div>
				
				</div>

@endsection