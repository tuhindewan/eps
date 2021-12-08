<?php

namespace App\Http\Controllers\Admin;

use App\Models\Advantage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advantages = Advantage::all();
        return view('admin.advantage.index', compact('advantages'));
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
    public function edit(Advantage $advantage)
    {
        return view('admin.advantage.edit', compact('advantage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advantage $advantage)
    {
        if ($request->icon) {
            $imageExtension = $request->icon->extension();
            $name = time() . '.' . $imageExtension;
            Image::make($request->icon)->save(public_path('images/') . $name);
            DB::table('advantages')->where('id', $advantage->id)->update([
                'icon' => $name,
            ]);

            // $userPhoto = public_path('images/') . $ios->image;
            // if (file_exists($userPhoto)) {
            //     @unlink($userPhoto);
            // }
        }

        DB::table('advantages')->where('id', $advantage->id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.advantage.edit', $advantage)
            ->with('success', 'Advatage feature has been updated');
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
