<?php

namespace Telegram\Bot\Objects\Passport;

use Telegram\Bot\Objects\BaseObject;

/**
 * @link https://core.telegram.org/bots/api#securedata
 *
 * @property SecureValue $personalDetails            (Optional). Credentials for encrypted personal details
 * @property SecureValue $passport                   (Optional). Credentials for encrypted passport
 * @property SecureValue $internalPassport           (Optional). Credentials for encrypted internal passport
 * @property SecureValue $driverLicense              (Optional). Credentials for encrypted driver license
 * @property SecureValue $identityCard               (Optional). Credentials for encrypted ID card
 * @property SecureValue $address                    (Optional). Credentials for encrypted residential address
 * @property SecureValue $utilityBill                (Optional). Credentials for encrypted utility bill
 * @property SecureValue $bankStatement              (Optional). Credentials for encrypted bank statement
 * @property SecureValue $rentalAgreement            (Optional). Credentials for encrypted rental agreement
 * @property SecureValue $passportRegistration       (Optional). Credentials for encrypted registration from internal passport
 * @property SecureValue $temporaryRegistration      (Optional). Credentials for encrypted temporary registration
 */
class SecureData extends BaseObject
{
}
