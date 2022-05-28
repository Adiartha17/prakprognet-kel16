<?php

namespace App\Http\Controllers\User;

use DB;
use App\Models\Cart;
use App\Models\Admin;
use App\Models\Courier;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\ProductReview;
use Illuminate\Support\Carbon;
use App\Models\TransactionDetail;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class TransactionDetailController extends Controller
{
    public function transaksi_detail($id)
    {
        date_default_timezone_set("Asia/Makassar");
        
        $tout = Transaction::find($id);
        $date2 = date('Y-m-d H:i:s');
        // return $date2;
        
        // return $tout->timeout;
        if($tout->timeout < $date2 && $tout->proof_of_payment==0){

            $update = Transaction::find($id);
            // return $date2;
            $update->status = 'expired';
            
            $update->save();
        }
        // return $tout;


        $transaksi = Transaction::with(['user','transaction_detail' => function($q){
            $q->with(['product' => function($qq){
                $qq->with('images', 'product_review');
            }]);
        }, 'courier'])->find($id);
        $transaction_id = $id;
        // return $transaksi;
        return view('user.transaction_detail', compact('transaksi', 'transaction_id'));
    }

    public function pembayaran(Request $request){
        $transaksi =  Transaction::where('id', $request->id)->first();
        //dd(!$transaksi->timeout > date('Y-m-d H:i:s'));
        // return $transaksi->timeout;
        if($transaksi->timeout > date('Y-m-d H:i:s')){
            if($request->file('file')){
                Transaction::where('id', $request->id)->update([
                    'proof_of_payment' => $request->file('file')->store('public/file-image'),
                    'status' => 'unverified'
                ]);

                //$user_data=User::find($user->id);
                $admin = Admin::find(1);
                $data = [
                    'nama'=> Auth::user()->user_name,
                    'message'=>'Verifikasi Pembayaran!',
                    'id'=> $request->id,
                    'category' => 'Transcation'
                ];
                $data_encode = json_encode($data);
                $admin->createNotif($data_encode);
                //notif admin---------------------------------------
            }
        }else{
            if($request->file('file')){
                Transaction::where('id', $request->id)->update([
                    'status' => 'expired'
                ]);
            }
        }

        // return redirect('transaksi_detail/'.$request->id);
        return redirect()->back();
        
    }

    public function update(Request $request){
        $data= array(
            'status' => $request->status
        ); 
        $transaksi = Transaction::find($request->id);
        
        $transaksi->update($data);

        if($request->status == 'canceled'){
            $admin = Admin::find(1);
            $data = [
           'nama'=> Auth::user()->user_name,
           'message'=>'Pesanan dibatalkan!',
           'id'=> $request->id,
           'category' => 'canceled'
            ];
            $data_encode = json_encode($data);
            $admin->createNotif($data_encode);
            
        }elseif($request->status == 'finish'){
            $admin = Admin::find(1);
            $data = [
               'nama'=> Auth::user()->user_name,
               'message'=>'Barang Telah Sampai ke Pelanggan!',
               'id'=> $request->id,
               'category' => 'canceled'
           ];
           $data_encode = json_encode($data);
           $admin->createNotif($data_encode);
    
        }

        return redirect()->Route('transaksi_detail',$request->id);
        
    }

    public function review(Request $request, $product_id){
        $request->validate([
            'rate' => 'required',
            'content' => 'required'
        ]);

        $review= array(
            'product_id' => $product_id,
            'user_id' => Auth::user()->id,
            'transaction_id' => $request->transaction_id,
            'rate' => $request->rate,
            'content' => $request->content
        ); 
        ProductReview::create($review);

        $admin = Admin::find(1);
          $data = [
              'nama'=> Auth::user()->user_name,
              'message'=>'seseorang mereview product!',
              'id'=> $product_id,
              'category' => 'review'
          ];
          $data_encode = json_encode($data);
          $admin->createNotif($data_encode);

        return redirect()->back();
        
    }
    
}