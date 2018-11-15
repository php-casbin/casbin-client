PHP client for Casbin Server
====

[![Latest Stable Version](https://poser.pugx.org/casbin/casbin-client/v/stable)](https://packagist.org/packages/casbin/casbin-client)
[![Total Downloads](https://poser.pugx.org/casbin/casbin-client/downloads)](https://packagist.org/packages/casbin/casbin-client)
[![License](https://poser.pugx.org/casbin/casbin-client/license)](https://packagist.org/packages/casbin/casbin-client)
[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/casbin/lobby)

``Casbin-client`` is PHP's client for [Casbin-Server](https://github.com/casbin/casbin-server). ``Casbin-Server`` is the ``Access Control as a Service (ACaaS)`` solution based on [Casbin](https://github.com/casbin/casbin).

## Prerequisites

* `php` 5.5 or above, 7.0 or above
* `gRPC` PHP extension

This guide gets you started with gRPC in PHP with a simple working example：[gRPC in PHP](https://grpc.io/docs/quickstart/php.html).

## Installation

```
composer require casbin/casbin-client
```

## Examples

### Client

```php
require_once './vendor/autoload.php';

use Proto\CasbinClient;
use Proto\NewEnforcerRequest;
use Proto\NewAdapterRequest;
use Proto\EnforceRequest;

$client = new CasbinClient('localhost:50051', [
    'credentials' => Grpc\ChannelCredentials::createInsecure(),
]);
```

### AdapterRequest

```php
$newAdapterRequest = new NewAdapterRequest();
$newAdapterRequest->setDriverName('file');
$newAdapterRequest->setConnectString('path/to/rbac_policy.csv');

list($newAdapterReply, $status) = $client->NewAdapter($newAdapterRequest)->wait();

if (0 !== $status->code) {
    throw new \Exception($status->details, $status->code);
}
	
$adapterHandle = $newAdapterReply->getHandler();
```

### EnforcerRequest

```php
$newEnforcerRequest = new NewEnforcerRequest();
$newEnforcerRequest->setModelText(<<<EOT
[request_definition]
r = sub, obj, act

[policy_definition]
p = sub, obj, act

[role_definition]
g = _, _

[policy_effect]
e = some(where (p.eft == allow))

[matchers]
m = g(r.sub, p.sub) && r.obj == p.obj && r.act == p.act
EOT
        );
$newEnforcerRequest->setAdapterHandle($adapterHandle);

list($newEnforcerReply, $status) = $client->NewEnforcer($newEnforcerRequest)->wait();

if (0 !== $status->code) {
    throw new \Exception($status->details, $status->code);
}
```

### EnforceRequest

```php
$enforceRequest = new EnforceRequest();
$enforceRequest->setEnforcerHandler($newEnforcerReply->getHandler());
$enforceRequest->setParams(['alice', 'data1', 'read']);

list($enforceReply, $status) = $client->Enforce($enforceRequest)->wait();

if (0 !== $status->code) {
    throw new \Exception($status->details, $status->code);
}

if ($enforceReply->getRes()) {
    // permit alice to read data1
} else {
    // deny the request, show an error
}

```

## License

This project is under Apache 2.0 License. See the [LICENSE](LICENSE) file for the full license text.
