<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Trailer;
use Illuminate\Http\Request;

class TrailersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $trailers = Trailer::where('foto', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('linktTrailer', 'LIKE', "%$keyword%")
                ->orWhere('sintesis', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('year', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $trailers = Trailer::latest()->paginate($perPage);
        }

        return view('trailers.index', compact('trailers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('trailers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('foto')) {
            $requestData['foto'] = $request->file('foto')
                ->store('uploads', 'public');
        }

        Trailer::create($requestData);

        return redirect('trailers')->with('flash_message', 'Trailer added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $trailer = Trailer::findOrFail($id);

        return view('trailers.show', compact('trailer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $trailer = Trailer::findOrFail($id);

        return view('trailers.edit', compact('trailer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('foto')) {
            $requestData['foto'] = $request->file('foto')
                ->store('uploads', 'public');
        }

        $trailer = Trailer::findOrFail($id);
        $trailer->update($requestData);

        return redirect('trailers')->with('flash_message', 'Trailer updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Trailer::destroy($id);

        return redirect('trailers')->with('flash_message', 'Trailer deleted!');
    }
}
