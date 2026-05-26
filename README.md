# Scalapay PHP SDK
This package is a Padosoft-maintained clone of the original `scalapay/scalapay-php-sdk`, which is no longer maintained upstream.

PHP library to integrate with the Scalapay API: at the following link you can find Scalapay complete [API documentation](https://developers.scalapay.com/reference/get-started-with-our-apis).<br>
Using the Scalapay PHP SDK you can manage the flow of a Scalapay order, from creation to capture and refund.

## Installation
You can install this SDK via [Composer](http://getcomposer.org).
```bash
composer require padosoft/scalapay-php-sdk
```

This clone supports PHP versions from 5.6 up to PHP 8.5.

Include Composer's auto-loader in your PHP files:
```php
require 'vendor/autoload.php';
```

## Configure the SDK Client
To create the instance of Scalapay PHP SDK use the snippet below adding your API KEY.<br>
For test environment (SANDBOX_URI), please find the API KEY in [Scalapay documentation](https://developers.scalapay.com/reference/get-started-with-our-apis).<br>
For production environment (PRODUCTION_URI), the API key will be shared by Scalapay Team and will be available in your Scalapay merchant portal.<br>
In this document you can find all methods that you can execute through this SDK.

```php
// instance
$scalapayApi = \Scalapay\Sdk\Api::configure('YOUR_API_KEY', \Scalapay\Sdk\Model\Api\Client::SANDBOX_URI);

// example
$apiResponse = $scalapayApi->createOrder($orderDetails);
```

## Methods
- [Create Order](#create-order)
- [Update merchant reference](#update-merchant-reference)
- [Capture an Order with a delay](#capture-order-with-delay)
- [Capture an order](#capture)
- [Void an order](#void)
- [Refund a payment](#refund)
- [Get order details](#get-order-details)
- [Get payment info](#get-payment-info)
- [Get merchant configurations](#get-merchant-configurations)

### Create Order <a id="create-order"></a>
You can create an order using the createOrder() API method.<br>
The response will contain the Scalapay order token and the redirect url where to redirect the customer (customer will be redirected to Scalapay portal to authorize the payment).

```php
// Create Order API
// set Customer object
$consumer = new \Scalapay\Sdk\Model\Customer\Consumer();
$consumer->setEmail('test@scalapay.com')
    ->setGivenNames('John')
    ->setSurname('Doe')
    ->setPhoneNumber('0214255312');

// set Billing Details Contact object
$billing = new \Scalapay\Sdk\Model\Customer\Contact();
$billing->setName('John billing')
    ->setLine1('123 Test Street')
    ->setSuburb('Test')
    ->setPostcode('00000')
    ->setCountryCode('IT')
    ->setPhoneNumber('0522789651');

// set Shipping Details Contact object
$shipping = new \Scalapay\Sdk\Model\Customer\Contact();
$shipping->setName('John shipping')
    ->setLine1('123 Test Street')
    ->setSuburb('Test')
    ->setPostcode('00000')
    ->setCountryCode('IT')
    ->setPhoneNumber('0522789651');

// set Item object list
$itemList = [];
$item = new \Scalapay\Sdk\Model\Order\OrderDetails\Item();
$item->setName('test product')
    ->setSku('test123')
    ->setQuantity(1);
$itemPrice = new \Scalapay\Sdk\Model\Order\OrderDetails\Money();
$itemPrice->setAmount(100);
$item->setPrice($itemPrice);
$itemList[] = $item;

// set Merchant Options object
// Replace Confirm and Failure URLS with your own redirect urls
$merchantOptions = new \Scalapay\Sdk\Model\Merchant\MerchantOptions();
$merchantOptions->setRedirectConfirmUrl('https://portal.integration.scalapay.com/success')
        ->setRedirectCancelUrl('https://portal.integration.scalapay.com/failure');

// set Order total amount object
$totalAmount = new \Scalapay\Sdk\Model\Order\OrderDetails\Money();
$totalAmount->setAmount(104);

// set Tax total amount object
$taxAmount = new \Scalapay\Sdk\Model\Order\OrderDetails\Money();
$taxAmount->setAmount(2);

// set Shipping total amount object
$shippingAmount = new \Scalapay\Sdk\Model\Order\OrderDetails\Money();
$shippingAmount->setAmount(5);

// set Discount total object
$discountAmount = new \Scalapay\Sdk\Model\Order\OrderDetails\Money();
$discountAmount->setAmount(3);
$discount = new \Scalapay\Sdk\Model\Order\OrderDetails\Discount();
$discount->setDisplayName('scalapay')
    ->setAmount($discountAmount);
$discountList = array();
$discountList[] = $discount;

// set Frequency object
$frequency = new \Scalapay\Sdk\Model\Order\OrderDetails\Frequency();
$frequency->setFrequencyType('monthly')
    ->setNumber(1);

// set Risk object (optional)
$risk = new \Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Risk();
$risk->setReturning(true) // valorize as true if the customer has placed an order with Scalapay before else false
    ->setOrderCountLifetime(10)
    ->setOrderCountL30d(3)
    ->setOrderCountL180d(9)
    ->setOrderCountLifetimeRefunded(1)
    ->setOrderCountL30dRefunded(1)
    ->setOrderAmountLifetimeEur(340.42)
    ->setOrderAmountL30dEur(78.32)
    ->setOrderAmountLifetimeRefundedEur(12.22)
    ->setOrderAmountL30dRefundedEur(12.22)
    ->setLastOrderTimestamp('2024-10-01 00:00:00')
    ->setLastRefundTimestamp('2024-01-01 00:00:00')
    ->setAccountCreationTimestamp('2022-01-01 00:00:00')
    ->setPaymentMethodCount(4)
    ->setShippingAddressCount(2)
    ->setShippingAddressTimestamp('2023-01-01 00:00:00')
    ->setShippingAddressUseCount(3)
    ->setPhoneVerifiedTimestamp('2023-01-01 00:00:00');

// set Transportation Reservation Details object (optional)
$transportationReservationDetails = new \Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel\TransportationReservationDetails();
$transportationReservationDetails->setType('air')
    ->setDeparture('BCN')
    ->setArrival('MXP')
    ->setTicketClass('economy')
    ->setTicketType('one_way')
    ->setLoyaltyProgramme(true);

// set Hotel Reservation Details object (optional)
$hotelReservationDetails = new \Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel\HotelReservationDetails();
$hotelReservationDetails->setNights(4)
    ->setHotelName('Best Western')
    ->setHotelCountry('IT')
    ->setHotelStars(4)
    ->setInsurance(true)
    ->setLoyaltyProgramme(true);

// set Events object (optional)
$events = new \Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel\Events();
$events->setEventName('Muse Concert in Rome')
    ->setEventCountry('IT')
    ->setCategory('concert')
    ->setTicketType('singleuse');
    
// set Travel object (optional)
$travel = new \Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel();
$travel->setPersonsCount(1)
    ->setStartDate('2023-06-01')
    ->setEndDate('2023-06-10')
    ->setRefundable(true)
    ->setTransportationReservationDetails([$transportationReservationDetails])
    ->setHotelReservationDetails($hotelReservationDetails)
    ->setEvents($events);

// set Industry object (optional)
$industry = new \Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry();
$industry->setCheckoutAttemptDeclineCount(2)
    ->setShippingLat(0.0)
    ->setShippingLng(0.0)
    ->setTravel($travel);
    
// set Notification object (optional)
$notification = new \Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Type\Link\Notification();
$notification->setPreferredLanguage('italiano')
    ->setEmailAddress('scalapay-customer-example@gmail.com')
    ->setPhoneCountryCode('+39')
    ->setPhoneNumber('3353535335')
    ->setChannels(['sms']);
    
// set Link object (optional)
$link = new \Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Type\Link();
$link->setNotification($notification);

// set Type object (optional)
$type = new \Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Type();
$type->setLink($link);

// set Plugin Details object
$pluginDetails = new \Scalapay\Sdk\Model\Order\OrderDetails\Extensions\PluginDetails();
$pluginDetails->setCheckout('woocommerce')
    ->setPlatform('WordPress')
    ->setCustomized('0')
    ->setPluginVersion('1.2.1')
    ->setCheckoutVersion('5.7')
    ->setPlatformVersion('6.2');

// set Extensions object
$extensions = new \Scalapay\Sdk\Model\Order\OrderDetails\Extensions();
$extensions->setRisk($risk)
    ->setIndustry($industry)
    ->setType($type)
    ->setPluginDetails($pluginDetails);

// set Order Details object
$orderDetails = new \Scalapay\Sdk\Model\Order\OrderDetails();
$orderDetails->setConsumer($consumer)
    ->setBilling($billing)
    ->setShipping($shipping)
    ->setMerchant($merchantOptions)
    ->setItems($itemList)
    ->setTotalAmount($totalAmount)
    ->setShippingAmount($shippingAmount)
    ->setTaxAmount($taxAmount)
    ->setDiscounts($discountList)
    ->setMerchantReference('123') // merchant reference is the order id in your platform
    ->setType('online')
    ->setProduct('pay-in-3')
    ->setFrequency($frequency)
    ->setExtensions($extensions);

// Create Order API call
// You will get the order token and the redirect url where to redirect the customer (customer will be redirected to Scalapay portal to authorize the payment).
$scalapayApi = \Scalapay\Sdk\Api::configure('YOUR_API_KEY', \Scalapay\Sdk\Model\Api\Client::SANDBOX_URI);
$apiResponse = $scalapayApi->createOrder($orderDetails);
var_dump($apiResponse);
```

### Update merchant reference <a id="update-merchant-reference"></a>
It is possible to add or update the merchant reference subsequently to the order creation using the updateMerchantReference() API method.

```php
// Update Merchant Reference API call
// You obtain the token when creating the order on the Scalapay side
// The value of $merchantReference variable corresponds to the order id in your platform
$scalapayApi = \Scalapay\Sdk\Api::configure('YOUR_API_KEY', \Scalapay\Sdk\Model\Api\Client::SANDBOX_URI);
$apiResponse = $scalapayApi->updateMerchantReference($token, $merchantReference);
var_dump($apiResponse);
```

### Capture an Order with a delay <a id="capture-order-with-delay"></a>
It is possible to delay the capture of an order extending the payment authorization expiration using the delayCapture() API method.
After calling this API, the payment authorization will be extended to 5 days.
To modify or extend the payment authorization you need to reach out to Scalapay Team.
During this time frame it will be necessary to capture the payment using the capture() API method, otherwise the payment authorization will be cancelled.

```php
// Delay Capture API call
// Delay Capture API work exclusively upon successful payment authorization
// You obtain the token when creating the order on the Scalapay side
$scalapayApi = \Scalapay\Sdk\Api::configure('YOUR_API_KEY', \Scalapay\Sdk\Model\Api\Client::SANDBOX_URI);
$apiResponse = $scalapayApi->delayCapture($token);
var_dump($apiResponse);
```

### Capture an order <a id="capture"></a>
It is possible to capture the payment authorization of an order using the capture() API method.
The funds will be deducted from user account and transferred to merchant account.

```php
// Capture API call
// Capture API work exclusively with a successful payment authorization
// You obtain the token when creating the order on the Scalapay side
$scalapayApi = \Scalapay\Sdk\Api::configure('YOUR_API_KEY', \Scalapay\Sdk\Model\Api\Client::SANDBOX_URI);
$apiResponse = $scalapayApi->capture($token);
var_dump($apiResponse);
```

### Void an order <a id="void"></a>
It is possible to discard a payment authorization of an order using the void() API method.
The customer will be informed of the cancellation and any funds held will be released.

```php
// Void API call
// Void API work exclusively with a successful payment authorization
// You obtain the token when creating the order on the Scalapay side
// The value of $merchantReference variable corresponds to the order id in your platform
$scalapayApi = \Scalapay\Sdk\Api::configure('YOUR_API_KEY', \Scalapay\Sdk\Model\Api\Client::SANDBOX_URI);
$apiResponse = $scalapayApi->void($token, $merchantReference);
var_dump($apiResponse);
```

### Refund a payment <a id="refund"></a>
It is possible to refund a payment using the refund() API method.

```php
// Build order refund request object
// The value of $merchantReference variable corresponds to the order id in your platform
$orderRefund = new \Scalapay\Sdk\Model\Refund\OrderRefund();
$orderRefund->setRefundAmount($refundAmount);
$orderRefund->setMerchantReference($merchantReference);

// Refund API call
$scalapayApi = \Scalapay\Sdk\Api::configure('YOUR_API_KEY', \Scalapay\Sdk\Model\Api\Client::SANDBOX_URI);
$apiResponse = $scalapayApi->refund($token, $orderRefund);
var_dump($apiResponse);
```

### Get order details <a id="get-order-details"></a>
It is possible check the status of an order payment using the getOrderDetails() API method.

```php
// Order Details API call
// You obtain the token when creating the order on the Scalapay side
$scalapayApi = \Scalapay\Sdk\Api::configure('YOUR_API_KEY', \Scalapay\Sdk\Model\Api\Client::SANDBOX_URI);
$apiResponse = $scalapayApi->getOrderDetails($token);
var_dump($apiResponse);
```

### Get payment info <a id="get-payment-info"></a>
It is possible to retrieve the information about a Scalapay payment using the getPaymentInfo() API method.

```php
// Payment Info API call
// You obtain the token when creating the order on the Scalapay side
$scalapayApi = \Scalapay\Sdk\Api::configure('YOUR_API_KEY', \Scalapay\Sdk\Model\Api\Client::SANDBOX_URI);
$apiResponse = $scalapayApi->getPaymentInfo($token);
var_dump($apiResponse);
```

### Get merchant configurations <a id="get-merchant-configurations"></a>
It is possible to retrieve the configuration of the merchant's Scalapay account using the getMerchantConfiguration() API method.

```php
// Merchant Configuration API call
$scalapayApi = \Scalapay\Sdk\Api::configure('YOUR_API_KEY', \Scalapay\Sdk\Model\Api\Client::SANDBOX_URI);
$apiResponse = $scalapayApi->getMerchantConfiguration();
var_dump($apiResponse);
```
