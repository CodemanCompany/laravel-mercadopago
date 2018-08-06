<?php

namespace CodemanCompany\LaravelMercadoPago\Providers;

use Illuminate\Support\ServiceProvider;
use CodemanCompany\LaravelMercadoPago\MP;

class MercadoPagoServiceProvider extends ServiceProvider {
	protected $mp_app_access_token;
	protected $mp_app_id;
	protected $mp_app_secret;

	public function boot() {
		// $this -> publishes( [
		// 	__DIR__ . '/../config/mercadopago.php' => config_path( 'mercadopago.php' ),
		// ] );

		// $this -> mp_app_access_token = config( 'mercadopago.app_access_token' );
		// $this -> mp_app_id = config( 'mercadopago.app_id' );
		// $this -> mp_app_secret = config( 'mercadopago.app_secret' );

		$this -> mp_app_access_token = env( 'MP_APP_ACCESS_TOKEN', '' );
		$this -> mp_app_id = env( 'MP_APP_ID', '' );
		$this -> mp_app_secret = env( 'MP_APP_SECRET', '' );
	}	// end method

	public function register() {

		$function = function() {
			return new MP( $this -> mp_app_id, $this -> mp_app_secret );
		};

		if( $this -> mp_app_access_token !== '' )
			$function = function() {
				return new MP( $this -> mp_app_access_token );
			};

		$this -> app -> singleton( 'MP', $function );
	}	// end method
}	// end class