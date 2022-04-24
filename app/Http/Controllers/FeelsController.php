<?php

namespace App\Http\Controllers;

use App\Http\Resources\FeelCollection;
use App\Models\Feels\Feel;
use Illuminate\Http\Request;

class FeelsController extends Controller
{
    public function index(Request $request)
    {
        $queryFeels = Feel::active()->search($request)->get();
        return $this->sendSuccess('Get feels success', new FeelCollection($queryFeels));
    }
}
