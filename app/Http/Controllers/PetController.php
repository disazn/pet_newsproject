<?php

namespace App\Http\Controllers;

use App\Services\PetService;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * @var PetService
     */
    private PetService $service;

    /**
     * @param PetService $service
     */
    public function __construct(PetService $service)
    {
        $this->service=$service;
    }
    public function mySport(Request $request)
    {
        $sort=$request->get('sort');
        $data=$this->service->mySport($sort);
    }
}
