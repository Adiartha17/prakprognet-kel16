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
        <div class="main-product ">

  <section class="breadcrumb-section pb-1 pt-2">
    <div class="container">
        <ol class="breadcrumb">
            
            <h2 style="color:#0275d8" class="ml-5">Transaksi</h2>
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
    <div class="container mt-3">
        <section class="product-page ml-5 mr-5 pb-3 pt-2">
          <div class="col ml-5 mt-1 mb-3" style="text-align: left">
            <a href="{{ route('productlist') }}" class="btn btn-outline-primary">
                <i class="fas fa-arrow-left"></i> Back
            </a>  
        </div>
            <div class="row mt-2">
                <div class="col-md-12">
                  @if($transaksi->count()==0)
                    <section class="breadcrumb-section pb-3 pt-3">
                      <div class="container">
                          <div class="alert alert-succses">
                                  <h5 align="center">Transaksi Kosong</h5>
                          </div>
                      </div>
                    </section>
                  @endif
                    <div class="card mb-2 shadow-sm">
                        <div class="table-responsive-sm">
                            <table class="table text-center">
                              <!-- Table head -->
                              <thead>
                                <tr class="table-light">
                                  <th>
                                    Tanggal Transaksi
                                  </th>
                                  <th>
                                    Alamat
                                  </th>
                                  <th>
                                      Total Pembayaran
                                  </th>
                                  <th>
                                      Status
                                  </th>
                                  <th>
                                    Opsi
                                  </th>
                                </tr>
                              </thead>
                              <!-- Table head -->
                              <!-- Table body -->
                              <tbody>
                                <!-- First row -->
                                @foreach ($transaksi as $item)
                                <tr>                
                                  <td>
                                      {{$item->created_at->format('d, M Y')}}
                                  </td>
                                  <td>
                                      {{$item->address}}
                                  </td>
                                  <td>
                                      Rp.{{number_format($item->sub_total)}}
                                  </td>
                                  <td>
                                    @if($item->status=='unpaid')
                                        <span class="badge badge-secondary nav-link">{{$item->status}}</span>
                                    @elseif($item->status=='unverified')
                                        <span class="badge badge-warning nav-link">{{$item->status}}</span>
                                    @elseif($item->status=='verified')
                                        <span class="badge badge-warning nav-link">{{$item->status}}</span>
                                    @elseif($item->status=='delivered')
                                        <span class="badge badge-info nav-link">{{$item->status}}</span>
                                    @elseif($item->status=='finish')
                                        <span class="badge badge-success nav-link">{{$item->status}}</span>
                                    @endif   
                                  </td>
                                  <td>
                                    <a href="{{ Route('transaksi_detail', $item->id) }}">Detail</a>
                                  </td>
                                </tr>
                                @endforeach
                                <!-- First row -->
                              </tbody>
                              <!-- Table body -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{ $transaksi->links() }}
          </section>
          
        </div>
    </div>
    @include('layouts.footer')
  </body>
</html>