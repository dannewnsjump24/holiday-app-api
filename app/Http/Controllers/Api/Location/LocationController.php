<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Location;

use App\Http\Controllers\Controller;
use App\Http\Resources\LocationResource;
use App\Models\Location;

final class LocationController extends Controller
{
    public function __invoke(Location $location): LocationResource
    {
        return new LocationResource($location);
    }
}
