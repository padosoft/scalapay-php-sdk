<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Customer;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Customer\ConsumerInterface;

/**
 * Class Consumer
 *
 * @package Scalapay\Sdk\Model\Customer
 */
class Consumer extends ModelAbstract implements ConsumerInterface
{
    /** @var string $phoneNumber */
    protected $phoneNumber;

    /** @var string $givenNames */
    protected $givenNames;

    /** @var string $surname */
    protected $surname;

    /** @var string $email */
    protected $email;

    /**
     * Returns phone number key.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets phone number key.
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Returns given names key.
     *
     * @return string
     */
    public function getGivenNames()
    {
        return $this->givenNames;
    }

    /**
     * Sets given names key.
     *
     * @param string $givenNames
     * @return $this
     */
    public function setGivenNames($givenNames)
    {
        $this->givenNames = $givenNames;
        return $this;
    }

    /**
     * Returns surname key.
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Sets surname key.
     *
     * @param string $surname
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * Returns email key.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets email key.
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}
