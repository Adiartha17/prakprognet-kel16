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
          <div class="main-product">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        <div class="py-3">
            <div class="container">
                <div class="row">
                    @foreach ($products as $item)
                    <div class="col-md-3 mb-5">
                        <div class="card">
                            <img src="{{ \Storage::url($item->images[0]->image_name) }}" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->produk_name }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <p>Rp. {{ $item->price }}</p>
                                <div class="row">
                                    <a href="{{ Route('detailproduk',$item->id) }}" class="btn btn-primary fa fa-eye">Detail</a>
                                    <form action="{{ Route('addCarts') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id" value="{{$item->id}}">   
                                        <button type="submit" class="btn btn-success fa fa-shopping-cart ml-1">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>    
    @include('layouts.footer')

  </body>
</html>