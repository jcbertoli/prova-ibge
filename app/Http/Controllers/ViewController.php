<?php

namespace App\Http\Controllers;

use App\Services\IbgeApiService;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    
    public function __construct(IbgeApiService $ibgeService)
    {
        $this->ibgeService = $ibgeService;
    }

    public function showRegionSelectPage()
    {
        $regions = $this->ibgeService->getRegions();

        return view('selectRegion', ['regions' => $regions]);
    }

    public function showRegionData($regionId)
    {
        $validRegions = [1, 2, 3, 4, 5];

        if(!in_array($regionId, $validRegions))
            return abort(404);

        $data = $this->ibgeService->getData($regionId);

        return view('showData', ['data' => $data]);
    }


}
