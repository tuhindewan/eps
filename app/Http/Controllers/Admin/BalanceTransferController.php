<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\BalanceTransfer;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class BalanceTransferController extends Controller
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
    public function edit(BalanceTransfer $balance)
    {
        return view('admin.balance.edit', compact('balance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BalanceTransfer $balance)
    {
        if ($request->image) {
            $imageExtension = $request->image->extension();
            $name = time() . '.' . $imageExtension;
            Image::make($request->image)->save(public_path('images/') . $name);
            DB::table('balance_transfers')->where('id', $balance->id)->update([
                'image' => $name,
            ]);

            // $userPhoto = public_path('images/') . $balance->image;
            // if (file_exists($userPhoto)) {
            //     @unlink($userPhoto);
            // }
        }

        DB::table('balance_transfers')->where('id', $balance->id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('balance.edit', $balance)
            ->with('success', 'Balance Transfer feature has been updated');
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
