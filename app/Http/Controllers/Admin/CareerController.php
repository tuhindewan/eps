<?php

namespace App\Http\Controllers\Admin;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class CareerController extends Controller
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
    public function edit(Career $career)
    {
        return view('admin.career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
        if ($request->image) {
            $imageExtension = $request->image->extension();
            $name = time() . '.' . $imageExtension;
            Image::make($request->image)->save(public_path('images/') . $name);
            DB::table('careers')->where('id', $career->id)->update([
                'image' => $name,
            ]);

            // $userPhoto = public_path('images/') . $career->image;
            // if (file_exists($userPhoto)) {
            //     @unlink($userPhoto);
            // }
        }

        DB::table('careers')->where('id', $career->id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('career.edit', $career)
            ->with('success', 'Career feature has been updated');
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
