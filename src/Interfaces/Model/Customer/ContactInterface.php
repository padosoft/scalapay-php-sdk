<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Customer;

/**
 * Interface ContactInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Customer
 */
interface ContactInterface
{
    /**
     * Returns name key.
     *
     * @return string
     */
    public function getName();

    /**
     * Sets name key.
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Returns line1 key.
     *
     * @return string
     */
    public function getLine1();

    /**
     * Sets line1 key.
     *
     * @param string $line1
     * @return $this
     */
    public function setLine1($line1);

    /**
     * Returns line2 key.
     *
     * @return string
     */
    public function getLine2();

    /**
     * Set line2 key.
     *
     * @param string $line2
     * @return $this
     */
    public function setLine2($line2);

    /**
     * Returns suburb key.
     *
     * @return string
     */
    public function getSuburb();

    /**
     * Sets suburb key.
     *
     * @param string $suburb
     * @return $this
     */
    public function setSuburb($suburb);

    /**
     * Returns state key.
     *
     * @return string
     */
    public function getState();

    /**
     * Sets state key.
     *
     * @param string $state
     * @return $this
     */
    public function setState($state);

    /**
     * Returns postcode key.
     *
     * @return string
     */
    public function getPostcode();

    /**
     * Sets postcode key.
     *
     * @param string $postcode
     * @return $this
     */
    public function setPostcode($postcode);

    /**
     * Returns country code key.
     *
     * @return string
     */
    public function getCountryCode();

    /**
     * Sets country code key.
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode);

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
}
