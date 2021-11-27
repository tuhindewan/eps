<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\MerchantPayment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class MerchantPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MerchantPayment $merchant)
    {
        return view('admin.merchant.edit', compact('merchant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MerchantPayment $merchant)
    {
        if ($request->image) {
            $imageExtension = $request->image->extension();
            $name = time() . '.' . $imageExtension;
            Image::make($request->image)->save(public_path('images/') . $name);
            DB::table('merchant_payments')->where('id', $merchant->id)->update([
                'image' => $name,
            ]);

            // $userPhoto = public_path('images/') . $merchant->image;
            // if (file_exists($userPhoto)) {
            //     @unlink($userPhoto);
            // }
        }

        DB::table('merchant_payments')->where('id', $merchant->id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('merchant.edit', $merchant)
            ->with('success', 'Merchant Payment feature has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
