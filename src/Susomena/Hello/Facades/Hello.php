<?php
/**
 * 
 * Author: Jesús Mena
 * Email: suso.mena@gmail.com
 * Date: 27/02/15
 * 
 */

namespace Susomena\Hello\Facades;

use Illuminate\Support\Facades\Facade;

class Hello extends Facade{
	protected static function getFacadeAccessor(){
		return 'hello';
	}
}