# SilexJsend
JSend Component for Silex

## Requirements
silex 1.x, 2.x

##Installation
The best way to install SilexJsend is to use a [Composer](https://getcomposer.org/download):

    php composer.phar require junker/silex-jsend

## Examples

```php

class Application extends \Silex\Application
{
	use \Junker\Silex\JSendTrait;
}

```

```php

use \Junker\Symfony\JSendResponse;

$app->get('/', function() use ($app) {

	$data = ['id' => 50, 'name' => 'Waldemar'];
	$message = 'Error, total error!';
	$code = 5;

	return $app->jsend(JSendResponse::STATUS_SUCCESS, $data);
#or
	return $app->jsend(JSendResponse::STATUS_FAIL, $data);
#or 
	return $app->jsend(JSendResponse::STATUS_ERROR, NULL, $message, $code);
#or
	return $app->jsend(JSendResponse::STATUS_ERROR, $data, $message, $code);
#or
	return $app->jsendSuccess($data);
#or
	return $app->jsendFail($data);
#or
	return $app->jsendError($message);
#or
	return $app->jsendError($message, $code, $data);
});

```
##Documentation
http://silex.sensiolabs.org/doc/master/usage.html#traits
