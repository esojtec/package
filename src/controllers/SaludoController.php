<?php

namespace Esojtec\Package\Controllers;

use App\Http\Controllers\Controller;

class Saludo extends Controller{

	function index(){
		\Package::getHolaMundo();
	}
}