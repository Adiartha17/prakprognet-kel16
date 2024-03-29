<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Product</title>
  </head>

  
  <body>
      <!-- menunya kita taruh persis di bawah <body> -->
          @include('layouts.menu')
          
          <!-- di bawah menu baru kontennya -->
          <section class="breadcrumb-section pb-1 pt-2">
            <div class="container">
                <ol class="breadcrumb">
                    
                    <h2 style="color:#0275d8" class="ml-5">Keranjang Belanja</h2>
                </ol>
            </div>
        </section>
        @if (\Session::has('success'))
        <section class="breadcrumb-section pb-3 pt-3">
            <div class="container">
                <div class="alert alert-success">
                        <h6 align="center">{!! \Session::get('success') !!}</h6>
                </div>
            </div>
        </section>
        @endif
        @if (\Session::has('error'))
        <section class="breadcrumb-section pb-3 pt-3">
            <div class="container">
                <div class="alert alert-danger">
                        <h6 align="center">{!! \Session::get('error') !!}</h6>
                </div>
            </div>
        </section>
        @endif
        <div class="container mt-3">
        </div>
        <section class="product-page pb-4 pt-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-sm">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <td>Produk</td>
                                        <td>Nama</td>
                                        <td>Harga Satuan</td>
                                        <td>Jumlah</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($cart as $carts)
                                    
                                    <tr>
                                        <td>
                                            <img src="{{ \Storage::url($carts->products->images[0]->image_name) }}"
                                                    class="img-fluid" alt=" {{ $carts->products->product_name }}" width="100">
                                        </td>
                                        <td>
                                            {{ $carts->products->produk_name }}
                                        </td>
                                        @if(!is_null($carts->products->getActiveDiscount()))
                                            <td>Rp. {{ number_format($carts->products->getPriceOrDiscountedPrice()) }}</td>
                                        @else
                                            <td>Rp. {{ number_format($carts->products->price) }}</td>
                                        @endif
                                        
                                        <td align="center">
                                            <div class="number-input">
                                                <div class="row">
                                                    <div class="col">
                                                        @if($carts->qty > 1)
                                                    <form action="{{ Route('minus') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" id="id" value="{{$carts->id}}">
                                                    <input type="hidden" class="quantity" min="0" name="quantity" value="{{ $carts->qty }}">
                                                    <button type="submit" class="minus">-</button>
                                                    </form>
                                                @endif
                                                </div>
                                                <input class="quantity" min="0" name="quantity" value="{{ $carts->qty }}" type="number">
                                                <div class="col">
                                                    <form action="{{ Route('plus') }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id" id="id" value="{{$carts->id}}">
                                                        <input type="hidden" class="quantity" min="0" name="quantity" value="{{ $carts->qty }}">
                                                        <button type="submit" class="plus">+</button>
                                                    </form>
                                            </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td>
                                            <form action="{{ Route('delete') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" id="id" value="{{$carts->id}}">
                                                <button type="submit" class="btn btn-danger"  onclick="return confirm('Yakin Ingin Mengapus Data ?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                          
                                    @empty
                                    <section class="breadcrumb-section pb-3 pt-3">
                                        <div class="container">
                                            <div class="alert alert-succses">
                                                    <h5 align="center">Keranjang Kosong</h5>
                                            </div>
                                        </div>
                                    </section>
                                    @endforelse
                                </tbody>
                                    <tr>
                                        @if($total !=0)
                                            <td colspan="3" align="right"><strong>Total Harga : </strong></td>
                                            <td><strong>Rp. {{ number_format($total) }}</strong> </td>
                                            <td colspan="2">
                                                <form action="{{route('address')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="total_harga" id="total_harga" value="{{$total}}">
                                                <button type="submit" class="btn btn-primary">Check Out</button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @include('layouts.footer')

  </body>
</html>