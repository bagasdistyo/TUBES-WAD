@extends('layout')

@section('content')
<div class="container" style="padding-top: 20px;">
    <h2 class="fw-bold" style="padding-top: 70px;">Keranjang</h2>
    </div>
    <br />

    <section id="cart_items">
		<div class="container" >
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td>No</td>
							<td>Nama</td>
							<td>Jenis Sepatu</td>
							<td>Warna Dasar Sepatu</td>
							<td>Warna Insole</td>
                            <td>Warna Tali Sepatu</td>
                            <td>Warna Lidah Sepatu</td>
                            <td>Warna Midsole</td>
                            <td>Delete</td>
						</tr>
					</thead>
					<tbody>
					<!--Code the foreach here ONLY after you are instructed to -->		
					@foreach ($products as $product)
						<tr>
							<td><p>{{$loop->iteration}}</p></td>
							<td>
								<p>{{$product->name}}</p>
							</td>
							<td>
								<p>{{$product->Jenis}}</p>
							</td>
                            <td>
                                <p>{{$product->warna_dasar}}</p>
							</td>
                            <td>
                                <p>{{$product->warna_insole}}</p>
							</td>
                            <td>
                                <p>{{$product->warna_tali}}</p>
							</td>
                            <td>
                                <p>{{$product->warna_lidah}}</p>
							</td>
                            <td>
                                <p>{{$product->warna_midsole}}</p>
							</td>
                            <td>
                                <form action="/product/{{ $product-> id }}" method ="POST" style="display: inline-block">
                                @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
							</td>
						</tr>
						@endforeach
					<!-- Your code ends here -->	
					</tbody>
				</table>
			</div>
		</div>
	</section>


</div>
@endsection
