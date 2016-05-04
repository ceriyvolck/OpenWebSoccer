<?php
/******************************************************

  FutbolmundialSkin 
  for HSE WebSoccer-Sim

  Copyright (c) 2013 by

  Pierre Keutel
  EMail: pierre.keutel@yahoo.fr
  Homepage: 
  
  Version: 5.0.0

******************************************************/

/**
 * @author Pierre Keutel
 * FutbolmundialSkin for Websoccer version 5
 */
class FutbolmundialSkin extends SchedioartFootballSkin {
	
	/**
	 * @see ISkin::getCssSources()
	 */
	public function getCssSources() {
	
		$dir = $this->_websoccer->getConfig("context_root") . "/css/";
		
		if (DEBUG) {
			$files[] = $dir . "futbolmundial/bootstrap.css";
			$files[] = $dir . "futbolmundial/futbolmundialskin.css";
			$files[] = $dir . "websoccer.css";
			$files[] = $dir . "bootstrap-responsive.min.css";
		} else {
			$files[] = $dir . "futbolmundial/theme.min.css";
		}
		
		$files[] = "//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css";
		
		return $files;
	}
}
?>