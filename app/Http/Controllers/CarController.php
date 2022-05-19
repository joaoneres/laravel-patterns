<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Repositories\Contracts\CarRepositoryInterface as ContractsCarRepositoryInterface;

class CarController extends Controller
{
    protected $car_repository;

    public function __construct(ContractsCarRepositoryInterface $car_repository)
    {
        $this->car_repository = $car_repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = $this->car_repository->all();
        return view('cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        $car = $this->car_repository->store($request->safe()->all());
        return redirect()->back()->with('car', $car);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Int $id)
    {
        $car = $this->car_repository->findById($id);
        return view('cars.show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Int $id)
    {
        $car = $this->car_repository->findById($id);
        return view('cars.edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Int $id)
    {
        $car = $this->car_repository->update($id, $request->safe()->all());
        return redirect()->route('cars.index')->with('car', $car)->with('operation', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $car
     * @return \Illuminate\Http\Response
     */
    public function delete(Int $id)
    {
        $car = $this->car_repository->delete($id);
        return redirect()->route('cars.index')->with('car', $car)->with('operation', 'deleted');
    }
}
