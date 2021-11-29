<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteMap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class SiteMapController extends Controller
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
    public function edit(SiteMap $site)
    {
        return view('admin.site.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteMap $site)
    {
        if ($request->image) {
            $imageExtension = $request->image->extension();
            $name = time() . '.' . $imageExtension;
            Image::make($request->image)->save(public_path('images/') . $name);
            DB::table('site_maps')->where('id', $site->id)->update([
                'image' => $name,
            ]);

            // $userPhoto = public_path('images/') . $site->image;
            // if (file_exists($userPhoto)) {
            //     @unlink($userPhoto);
            // }
        }

        DB::table('site_maps')->where('id', $site->id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('site.edit', $site)
            ->with('success', 'Site Map feature has been updated');
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
