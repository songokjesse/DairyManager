<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
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
            $animals = Animal::where('name', 'LIKE', "%$keyword%")
                ->orWhere('breed', 'LIKE', "%$keyword%")
                ->orWhere('calves', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $animals = Animal::latest()->paginate($perPage);
        }

        return view('animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('animals.create');
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
			'name' => 'required|max:100',
			'calves' => 'required|max:10'
		]);
        $requestData = $request->all();
        
        Animal::create($requestData);

        return redirect('animals')->with('flash_message', 'Animal added!');
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
        $animal = Animal::findOrFail($id);

        return view('animals.show', compact('animal'));
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
        $animal = Animal::findOrFail($id);

        return view('animals.edit', compact('animal'));
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
			'name' => 'required|max:100',
			'calves' => 'required|max:10'
		]);
        $requestData = $request->all();
        
        $animal = Animal::findOrFail($id);
        $animal->update($requestData);

        return redirect('animals')->with('flash_message', 'Animal updated!');
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
        Animal::destroy($id);

        return redirect('animals')->with('flash_message', 'Animal deleted!');
    }
}
