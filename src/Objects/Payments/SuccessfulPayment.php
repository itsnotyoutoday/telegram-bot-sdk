<?php

namespace Telegram\Bot\Objects\Payments;

use Telegram\Bot\Objects\BaseObject;

/**
 * @link https://core.telegram.org/bots/api#invoice
 *
 * @property string    $currency                          Three-letter ISO 4217 currency code
 * @property int       $totalAmount                       Total price in the smallest units of the currency (integer, not float/double)
 * @property string    $invoicePayload                    Bot specified invoice payload
 * @property string    $shippingOptionId                  (Optional). Identifier of the shipping option chosen by the user.
 * @property OrderInfo $orderInfo                         (Optional). Order info provided by the user
 * @property string    $telegramPaymentChargeId           Telegram payment identifier.
 * @property string    $providerPaymentChargeId           Provider payment identifier.
 */
class SuccessfulPayment extends BaseObject
{
}
