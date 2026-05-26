<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Type\Link;

use Exception;

/**
 * Interface NotificationInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Type\Link
 */
interface NotificationInterface
{
    /**
     * Returns preferred language key.
     *
     * @return string
     */
    public function getPreferredLanguage();

    /**
     * Sets preferred language key.
     *
     * @param string $preferredLanguage
     * @return $this
     * @throws Exception
     */
    public function setPreferredLanguage($preferredLanguage);

    /**
     * Returns email address key.
     *
     * @return string
     */
    public function getEmailAddress();

    /**
     * Sets email address key.
     *
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress);

    /**
     * Returns phone country code key.
     *
     * @return string
     */
    public function getPhoneCountryCode();

    /**
     * Sets phone country code key.
     *
     * @param string $phoneCountryCode
     * @return $this
     */
    public function setPhoneCountryCode($phoneCountryCode);

    /**
     * Returns phone number key.
     *
     * @return string
     */
    public function getPhoneNumber();

    /**
     * Sets phone number key.
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber);

    /**
     * Returns channels key.
     *
     * @return string[]
     */
    public function getChannels();

    /**
     * Sets channels key.
     *
     * @param string[] $channels
     * @return $this
     */
    public function setChannels($channels);
}
