<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HuurautosController extends Controller
{
    public function index(){
        $data = DB::table('huurautos')
        ->select('automerk', 'autotype', 'autobouwjaar')  
        ->whereIn('autobouwjaar', [2001, 2003, 2006])  
        ->orderBy('automerk', 'asc')
        ->orderBy('autotype', 'asc')
        ->get();
        // dd($data);
        return view('huurautos.index',['data'=>$data]);
    }

    public function create(){
        return view('huurautos.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'autonummer' => 'required|integer',
            'automerk' => 'required',
            'autotype' => 'required',
            'autobouwjaar' => 'required|integer|between:1900,2021',
        ]);
        DB::table('huurautos')->insert([
            'autonummer' => $request->autonummer,
            'automerk' => $request->automerk,
            'autotype' => $request->autotype,
            'autobouwjaar' => $request->autobouwjaar,
        ]);
        return redirect('/huurautos');
    }

}
