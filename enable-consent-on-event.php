<?php

function cmplz_add_enable_consent_on_event($enable_for_regions = array()){
	$enable_for_regions 	= array ('au'); // if you use the GEO IP Setting (Pro feature), you can select in which country this should be enabled. 
											//When the setting is disabled or you are using the free version of Complianz this will affect all regions.

	$consent_on_scroll 		= true; //true or false
	$consent_on_timeout 	= true; //true or false
	$consent_timeout 		= 10; //time in seconds

	// You are done setting up the settings. You don't need to edit the code below. 

	$geoip_enabled = COMPLIANZ::$geoip->geoip_enabled();

	if ($geoip_enabled) {
		$user_region = COMPLIANZ::$geoip->region();
		if (!in_array($user_region, $enable_for_regions)) {
			$consent_on_scroll 		= false;
			$consent_on_timeout 	= false;
		}
	}

	if ($consent_on_scroll) {
		cmplz_enable_consent_on_scroll();
	}
	if ($consent_on_timeout) {
		cmplz_enable_consent_on_timeout();
	}
	
}

function cmplz_enable_consent_on_scroll(){
	
}

function cmplz_enable_consent_on_timeout($consent_timeout = 10){
	$timeout = $consent_timeout * 1000; // make seconds into miliseconds

}