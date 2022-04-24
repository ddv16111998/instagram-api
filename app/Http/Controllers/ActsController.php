<?php

namespace App\Http\Controllers;

use App\Http\Resources\FeelCollection;
use App\Models\Acts\Act;
use Illuminate\Http\Request;

class ActsController extends Controller
{
    public function index(Request $request)
    {
        $queryFeels = Act::active()->get();
        return $this->sendSuccess('Get acts success', new FeelCollection($queryFeels));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Act $act)
    {
        //
    }

    public function edit(Act $act)
    {
        //
    }

    public function update(Request $request, Act $act)
    {
        //
    }

    public function destroy(Act $act)
    {
        //
    }
}
