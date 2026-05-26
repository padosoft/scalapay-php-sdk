<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Customer;

/**
 * Interface ConsumerInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Customer
 */
interface ConsumerInterface
{
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
     * Returns given names key.
     *
     * @return string
     */
    public function getGivenNames();

    /**
     * Sets given names key.
     *
     * @param string $givenNames
     * @return $this
     */
    public function setGivenNames($givenNames);

    /**
     * Returns surname key.
     *
     * @return string
     */
    public function getSurname();

    /**
     * Sets surname key.
     *
     * @param string $surname
     * @return $this
     */
    public function setSurname($surname);

    /**
     * Returns email key.
     *
     * @return string
     */
    public function getEmail();

    /**
     * Sets email key.
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email);
}
