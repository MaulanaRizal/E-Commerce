<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        $storages = 0;
        $data = [
            'storages' => $storages,
        ];

        return view('admin.pages.dashboard',['data'=> $data]);
    }


}
