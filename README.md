# Laravel Facade para MercadoPago v0.5.3

Mercado Pago SDK v0.5.3 para **Laravel 5.6**.

Esté repositorio incluye el SDK oficial de **Mercado Pago**. [https://github.com/mercadopago/sdk-php](https://github.com/mercadopago/sdk-php)

## Instalación

1. Ejecuta el siguiente comando.

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

Agrega las siguientes variables en el archivo de configuración principal **.env**.

Para generar tus datos CLIENT_ID y CLIENT_SECRET o ACCESS_TOKEN consulta la documentación de **Mercado Pago** de tu país.

Para **México**: [https://www.mercadopago.com.mx/developers/es/tools/sdk/server/php/](https://www.mercadopago.com.mx/developers/es/tools/sdk/server/php/)

#### Configuración para Checkout Básico

```bash
# Basic Checkout
MP_APP_ID=
MP_APP_SECRET=
```

#### Para Checkout Personalizado

```bash
# Custom Checkout
MP_APP_ACCESS_TOKEN=
```

**Nota:** Una vez agregados los **datos de acceso** puedes empezar a utilizar la librería.

## ¿Cómo utilizar?

Recuerda que antes de empezar debes especificar la clase a utilizar. Recuerda que no se instancia la clase, ya que el uso de los métodos es de forma estática.

```php
use MP;
```

Buscar un usuario por medio del correo electrónico.

```php
$filter = [
	'email' => 'info@codeman.company',
];

$response = MP :: get( [
	'uri' => '/v1/customers/search',
	'data' => $filter,
] );
```

Crear un usuario en mercado pago.

```php
$data = [		
	'email' => 'info@codeman.company',
	'first_name' => 'Codeman',
	'last_name' => 'Company',
	'phone' => [
		'area_code' => '52',
		'number' => '5555555555',
	],
];
$response = MP :: post( [
	'uri'	=>	'/v1/customers',
	'data'	=>	$data,
] );
```

Para mayor información consulta la documentación de **Mercado Pago** correspondiente a **PHP**. [https://www.mercadopago.com.mx/developers/es/tools/sdk/server/php/](https://www.mercadopago.com.mx/developers/es/tools/sdk/server/php/)