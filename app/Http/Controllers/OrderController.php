<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Cart;
use App\Models\Order;
use App\AlamatPengiriman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
=======
use App\Models\Models\Order;
use Illuminate\Http\Request;
>>>>>>> 69332ce0d6a4ac327c8e043ca4f7e2c40c5a3243

class OrderController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $orders = Order::latest()->paginate(10);
        return view('dashboards.admins.orders.index', compact('orders'));
    }
}
// <?php

// namespace App\Http\Controllers;

<<<<<<< HEAD
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->user();
        $cart = Cart::where('user_id', $user->id)->where('status_cart', 'cart')->first();
        $data = array('cart'=>$cart);
        // $no_invoice = Cart::where('user_id', $user->id)->where('status_cart', 'cart')->get();
        // dd($no_invoice);
        // dd($data);
        if ($data) {
            if ($request) {
                // buat variabel inputan order
                $inputanorder['cart_id'] = $cart->id;
                $inputanorder['nama_penerima'] = $request->name;
                $inputanorder['telp'] = $request->telp;
                $inputanorder['email'] = $request->email;
                // $inputanorder['total'] = $request->email;
                dd($inputanorder);
                $itemorder = Order::create($inputanorder);//simpan order
                // update status cart
                DB::table('cart')->update(['status_cart' => 'checkout']);
                return redirect()->route('checkout')->with('success', 'Order berhasil disimpan');
            } else {
                return back()->with('error');
            }
        } else {
            return abort('404');//kalo ternyata ga ada shopping cart, maka akan menampilkan error halaman tidak ditemukan
        }
    }
=======
// use Illuminate\Http\Request;
// use App\Cart;
// use App\AlamatPengiriman;
// use App\Order;
>>>>>>> 69332ce0d6a4ac327c8e043ca4f7e2c40c5a3243

// class TransaksiController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index(Request $request)
//     {
//         $itemuser = $request->user();
//         if ($itemuser->role == 'admin') {
//             // kalo admin maka menampilkan semua cart
//             $itemorder = Order::whereHas('cart', function($q) use ($itemuser) {
//                             $q->where('status_cart', 'checkout');
//                         })
//                         ->orderBy('created_at', 'desc')
//                         ->paginate(20);
//         } else {
//             // kalo member maka menampilkan cart punyanya sendiri
//             $itemorder = Order::whereHas('cart', function($q) use ($itemuser) {
//                             $q->where('status_cart', 'checkout');
//                             $q->where('user_id', $itemuser->id);
//                         })
//                         ->orderBy('created_at', 'desc')
//                         ->paginate(20);
//         }
//         $data = array('title' => 'Data Transaksi',
//                     'itemorder' => $itemorder,
//                     'itemuser' => $itemuser);
//         return view('transaksi.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         $itemuser = $request->user();
//         $itemcart = Cart::where('status_cart', 'cart')
//                         ->where('user_id', $itemuser->id)
//                         ->first();
//         if ($itemcart) {
//             $itemalamatpengiriman = AlamatPengiriman::where('user_id', $itemuser->id)
//                                                     ->where('status', 'utama')
//                                                     ->first();
//             if ($itemalamatpengiriman) {
//                 // buat variabel inputan order
//                 $inputanorder['cart_id'] = $itemcart->id;
//                 $inputanorder['nama_penerima'] = $itemalamatpengiriman->nama_penerima;
//                 $inputanorder['no_tlp'] = $itemalamatpengiriman->no_tlp;
//                 $inputanorder['alamat'] = $itemalamatpengiriman->alamat;
//                 $inputanorder['provinsi'] = $itemalamatpengiriman->provinsi;
//                 $inputanorder['kota'] = $itemalamatpengiriman->kota;
//                 $inputanorder['kecamatan'] = $itemalamatpengiriman->kecamatan;
//                 $inputanorder['kelurahan'] = $itemalamatpengiriman->kelurahan;
//                 $inputanorder['kodepos'] = $itemalamatpengiriman->kodepos;
//                 $itemorder = Order::create($inputanorder);//simpan order
//                 // update status cart
//                 $itemcart->update(['status_cart' => 'checkout']);
//                 return redirect()->route('transaksi.index')->with('success', 'Order berhasil disimpan');
//             } else {
//                 return back()->with('error', 'Alamat pengiriman belum diisi');
//             }
//         } else {
//             return abort('404');//kalo ternyata ga ada shopping cart, maka akan menampilkan error halaman tidak ditemukan
//         }
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         $data = array('title' => 'Detail Transaksi');
//         return view('transaksi.show', $data);
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Request $request, $id)
//     {
//         $itemuser = $request->user();
//         if ($itemuser->role == 'admin') {
//             $itemorder = Order::findOrFail($id);
//             $data = array('title' => 'Form Edit Transaksi',
//                         'itemorder' => $itemorder);
//             return view('transaksi.edit', $data)->with('no', 1);            
//         } else {
//             return abort('404');//kalo bukan admin maka akan tampil error halaman tidak ditemukan
//         }
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
// }