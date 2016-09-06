<?php

namespace Esojtec\Package\Libraries;

class Package {
	funciton getHolaMundo(){
		return 'Hola Mundo '. __NAMESPACE__ . ' ' . __CLASS__;
	}
}