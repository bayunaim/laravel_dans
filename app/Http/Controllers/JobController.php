<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class JobController extends Controller
{
    function index(Request $request){
        $on_page = is_null($request->get('page')) ? 1 : $request->get('page');

        $res = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json');

        $data['users'] = $res->json();

        return view('page.admin.job.index', $data);

    }

    function detail($id){

        $res = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json'. $id);

        $data['user'] = $res->json();
        return view('detail', $data);
    }
    

    
}
