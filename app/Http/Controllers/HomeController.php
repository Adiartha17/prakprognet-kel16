<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Produk;
use App\Models\ProdukImage;
use Illuminate\Http\Request;
use App\Models\UserNotification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('homepage.index', [
            'products' => Produk::with('images','discount')->orderBy('id', 'DESC')->take(6)->get(),
            
        ]);
    }

    public function detail_produk($id)
    {
        $product = Produk::with('images','details','categories','discount')->find($id);
        $images = ProdukImage::where('product_id','=',$id)->get();

        return view('homepage.detail_produk', compact('product', 'images'));
    }

    public function user_notif($id) 
    {
        $notification = UserNotification::find($id);
        $notif = json_decode($notification->data);
        
        $date = Carbon::now('Asia/Makassar');
        $baca= UserNotification::find($id);
        $baca->read_at =$date;
        $baca->update();

        if ($notif->category == 'review') {
            return redirect()->route('detail_produk',$notif->id);
        } else{
            return redirect()->route('transaksi_detail',$notif->id);
        } 
     
    }

}