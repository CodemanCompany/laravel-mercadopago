# Laravel Facade para MercadoPago v0.5.3
Mercado Pago SDK v0.5.3 for **Laravel 5.6**

## Instalación

1. Ejecutar el siguiente comando.

	```bash
	composer require codemancompany/laravel-mercadopago
	```

2. Se debe incluir el siguiente **Provider** y **Alias** en **config/app.php**.

	#### Provider

	```php
	/*
	 * Package Service Providers...
	 */
	CodemanCompany\LaravelMercadoPago\Providers\MercadoPagoServiceProvider::class,
	```
	
	#### Alias
	
	```php
	'MP' => CodemanCompany\LaravelMercadoPago\Facades\MP::class,
	```

## Configuración

Para Checkout básico

Para Checkout personalizado
