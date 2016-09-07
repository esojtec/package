<?php

namespace Esojtec\Package\Controllers;

use App\Http\Controllers\Controller;

class SaludoController extends Controller{

	function index(){
		return \Package::getHolaMundo();
	}
}