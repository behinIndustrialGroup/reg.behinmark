<?php 

namespace BehinVehicleRegistration\App\Http\Controllers;

use App\Http\Controllers\Controller;
use BehinInit\App\Models\Access;
use Illuminate\Support\Facades\Auth;
use BehinUserRoles\Models\Method;
use BehinVehicleRegistration\App\Models\VehicleRegistration;
use Illuminate\Http\Request;

class VehicleRegController extends Controller
{

    function step1(Request $request) {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required'
        ]);
        VehicleRegistration::create($request->all());
        return "test1";
    }
}