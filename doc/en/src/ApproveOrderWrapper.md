---
name: 2. ApproveOrder
category: Webservices Orders
---


## Envelope to approve an order after an order deposit ##


### Description ###

The webservice `ApproveOrder` allows to confirm the take over of the order. This state corresponds to "Commande enregistrée" and/or "En cours de préparation" for the seller.

HTTP header:

```
Path: /orders/{orderId}
Method: PUT
Authorization: token your_api_key
X-SIRET: Siret_du_marchand
```

The authentication is established from the token `Api Key` of the seller on the MAPAdirect marketplace returned by the authentication.

Request's body **automaticly generated by the SDK** :

```application/json
{
   "approved" : true,
   "do_not_create_invoice" : true
}
```

**NB : It is unuseful to prepare the request's body. The default values below are imposed by MapaDirect.**

List of validators included in the SDK

|Field | Message|
|---|---|
|X-SIRET (sent in header) | The siret is mandatory and is a sequence of 14 digits.|
|approved | Must value true. |
|do_not_create_invoice | The purchase process in public market imose the creation of an invoice after the receipt of the product. Must value true.|

The answer's envelope is established in json.

Answer's HTTP header :

| Status | Message |
| ------ | ------ |
| 200 | OK |
| 404 | The order doesn't exist |


### Exemple ###

```php
use MapaDirectSDK\MDApiClient;

$orderId = 123;

$wrapper = MDApiClient::getWrapper('ApproveOrder');
$wrapper->setToken($apiKey);
$wrapper->setSiret($siret);
$wrapper->setId($orderId);

$client = new MDApiClient();
try {
    $client->call($wrapper);
} catch (MDApiWrapperValidatorException $e) {
    // List of errors returned by the SDK
    $client->getErrors();
    exit;
}

if ($client->getResponse()->isSuccess()) {
    $data = $client->getResponse()->getContent();
} else {
    $data = $client->getResponse()->getContent();
    // List of errors returned by the API 
}
```

`$data` returns a php table as described in the answer's body.