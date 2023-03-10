<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Setting::all();
        return view('admin.pages.aplikasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Setting::findOrFail($id);
        return view('admin.pages.aplikasi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required',
            'telpon' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.required' => 'Nama sekolah tidak boleh kosong !!',
            'email.required' => 'Email sekolah tidak boleh kosong !!',
            'address.required' => 'Alamat sekolah tidak boleh kosong !!',
            'telpon.required' => 'Telpon sekolah tidak boleh kosong !!',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        try {
            $setting = Setting::findOrFail($id);
            if ($request->hasFile('logo')) {
                $setting->delete_logo_app();
                $image = $request->file('logo');
                $file_name = rand(1000, 9999) . $image->getClientOriginalName();
                $img = Image::make($image->path());
                $img->resize('800', '800')
                    ->save(public_path('images/app/small') . '/small_' . $file_name);
                $image->move('images/app', $file_name);
                $setting->logo = $file_name;
            }
            $setting->name = $request->name;
            $setting->email = $request->email;
            $setting->address = $request->address;
            $setting->telpon = $request->telpon;
            $setting->save();

            return redirect()->route('setting_app.index')
                ->with('success', 'Aplikasi Berhasil di Rubah');
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
