<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('layout-home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $this->validate($request, [
        //     'gambar'     => 'required|image|mimes:png,jpg,jpeg',
        //     'judul'     => 'required',
        //     'status'   => 'required'
        // ]);

        //upload image
        $customer = new Customer();
        $customer->nama_lengkap = $request->get('nama_lengkap');

        $customer->email = $request->get('email');

        $customer->no_telp = $request->get('no_telp');

        $customer->nama_perusahaan = $request->get('nama_perusahaan');

        $customer->pesan = $request->get('pesan');
        // dd($customer->pesan);



        // if ($request->hasFile('gambar')) {
        //     // $post->delete_image();
        //     $gambar = $request->file('gambar');
        //     // echo $photo_profile;exit;
        //     $name = rand(1000, 9999) . $gambar->getClientOriginalName();
        //     $gambar->move('img', $name);
        //     $slider->gambar = $name;
        // }
        $customer->save();

        // dd($customer);


        // dd($slider);
        if($customer){
            //redirect dengan pesan sukses
            return redirect()->route('customer.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('customer.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers)
    {
        //
    }
}
