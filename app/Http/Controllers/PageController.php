<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Contconacip;


class PageController extends Controller
{

	public function inicio(){
		return view('index');
	}
	public function galeria(){
		return view('frmgaleria');
	}
	public function registro(){
		$contconacip =\App\Contconacip::all();
		return view('frmregistro', compact('contconacip'));
		
	}

	public function createt(Request $request){
		$trabajoNuevo = new \App\Contconacip();
		$trabajoNuevo->cdni = $request->cdni;
		$trabajoNuevo->cnombre = $request->cnombre;
		$trabajoNuevo->capellidos = $request->capellidos;
		$trabajoNuevo->cemail = $request->cemail;
		$trabajoNuevo->ctelefono = $request->ctelefono;
		$trabajoNuevo->cvoucher = $request->cvoucher;
		$trabajoNuevo->cuniv = $request->cuniv;
		$trabajoNuevo->ccateg = $request->ccateg;
		$img = $request->file('ccv');
        $file_route =time().'_'.$img->getClientOriginalName();
        Storage::disk('docCv')->put($file_route, file_get_contents($img->getRealPath()));
        $trabajoNuevo->ccv = $file_route;

		$trabajoNuevo->save();

		return back();
	}

	public function cdni(){
        return 'cdni';
    }
}
