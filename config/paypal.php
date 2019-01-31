<?php

	return [
	   	// set your paypal credential
	    'client_id' => env('PAYPAL_CLIENT_ID', 'Ae62xRDokVjUl28TJYz6kcfmPLyVB_k6ege3sL97kNECV45pTNdWkCNN0YaqJwLso4Insbym_By_GXmS'),
	    'secret' => env('PAYPAL_SECRET', 'EFkrGNVEg8ip69-NQihHmSp0uwza4CLC0qPPoih_S3QWFl-m7OMgY5oqXFvQmiQHI213aqkG-_Y6zFJj'),

	    /**
	    * SDK configuration
	    */
	    'settings' => array(
		    /**
		    * Available option 'sandbox' or 'live'
		    */
		    'mode' => env('PAYPAL_MODE','live'),

		    /**
		    * Specify the max request time in seconds
		    */
		    'http.ConnectionTimeOut' => 30,

		    /**
		    * Whether want to log to a file
		    */
		    'log.LogEnabled' => true,

		    /**
		    * Specify the file that want to write on
		    */
		    'log.FileName' => storage_path() . '/logs/paypal.log',

		    /**
		    * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
		    *
		    * Logging is most verbose in the 'FINE' level and decreases as you
		    * proceed towards ERROR
		    */
		    'log.LogLevel' => 'ERROR'
	    ),
	];

?>
