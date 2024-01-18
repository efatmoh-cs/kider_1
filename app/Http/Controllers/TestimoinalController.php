<?php

namespace App\Http\Controllers;

use App\Models\Testimoinal;
use App\Traits\Common;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class TestimoinalController extends Controller
{
    use Common;

    public function index()
    {
        $testimoinals =  Testimoinal::get();

        return view('testimoinals', compact('testimoinals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        // return view("addTestimoinal");
        return view('admin.addtestimoinal');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name'=> 'required|string|max:255',
            'job'=> 'required|string|max:255',
            'image'=> 'required|mimes:png,jpg,jpeg|max:2048',
            'comment'=> 'required|string',
        ]);

        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image']= $fileName;
        $data['published'] = isset($request['published']);


       Testimoinal::create($data);

        // return 'data inserted successfully';
        return redirect('testimoinals');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimoinal = Testimoinal::findOrFail($id);

        return view('showtestimoinal', compact('testimoinal'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimoinal = Testimoinal::findOrFail($id);

        return view('updatetestimoinal', compact('testimoinal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'job'=> 'required|string|max:255',
            'image'=> 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'comment'=> 'required|string',
        ]);
        $data['published'] = isset($request->published);
        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/images');
            $data['image']= $fileName;
        }
        Testimoinal::where('id', $id)->update($data);
        return redirect('testimoinals');
        // return 'Updated';

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimoinal::where('id', $id)->delete();
        return redirect()->route('testimoinals');
    }
}
