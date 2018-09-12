<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Production;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
            $production = Production::where('amount', 'LIKE', "%$keyword%")
                ->orWhere('animal_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $production = Production::latest()->paginate($perPage);
        }

        return view('production.index', compact('production'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $animals = Animal::all();
        return view('production.create', compact('animals'));
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
        $this->validate($request, [
			'amount' => 'required|max:10',
			'animal_id' => 'required'
		]);
        $requestData = $request->all();
        
        Production::create($requestData);

        return redirect('production')->with('flash_message', 'Production added!');
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
        $production = Production::findOrFail($id);

        return view('production.show', compact('production'));
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
        $production = Production::findOrFail($id);
        $animals = Animal::all();

        return view('production.edit', compact('production', 'animals'));
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
        $this->validate($request, [
			'amount' => 'required|max:10',
            'animal_id' => 'required'
		]);
        $requestData = $request->all();
        
        $production = Production::findOrFail($id);
        $production->update($requestData);

        return redirect('production')->with('flash_message', 'Production updated!');
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
        Production::destroy($id);

        return redirect('production')->with('flash_message', 'Production deleted!');
    }
}
