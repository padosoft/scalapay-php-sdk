<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Customer;

use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Customer\ContactInterface;

/**
 * Class Contact
 *
 * @package Scalapay\Sdk\Model\Customer
 */
class Contact extends ModelAbstract implements ContactInterface
{
    /** @var string $name */
    protected $name;

    /** @var string $line1 */
    protected $line1;

    /** @var string $line2 */
    protected $line2;

    /** @var string $suburb */
    protected $suburb;

    /** @var string $state */
    protected $state;

    /** @var string */
    protected $postcode;

    /** @var string $countryCode */
    protected $countryCode;

    /** @var string $phoneNumber */
    protected $phoneNumber;

    /**
     * Returns name key.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name key.
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Returns line1 key.
     *
     * @return string
     */
    public function getLine1()
    {
        return $this->line1;
    }

    /**
     * Sets line1 key.
     *
     * @param string $line1
     * @return $this
     */
    public function setLine1($line1)
    {
        $this->line1 = $line1;
        return $this;
    }

    /**
     * Returns line2 key.
     *
     * @return string
     */
    public function getLine2()
    {
        return $this->line2;
    }

    /**
     * Set line2 key.
     *
     * @param string $line2
     * @return $this
     */
    public function setLine2($line2)
    {
        $this->line2 = $line2;
        return $this;
    }

    /**
     * Returns suburb key.
     *
     * @return string
     */
    public function getSuburb()
    {
        return $this->suburb;
    }

    /**
     * Sets suburb key.
     *
     * @param string $suburb
     * @return $this
     */
    public function setSuburb($suburb)
    {
        $this->suburb = $suburb;
        return $this;
    }

    /**
     * Returns state key.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets state key.
     *
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Returns postcode key.
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Sets postcode key.
     *
     * @param string $postcode
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * Returns country code key.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets country code key.
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

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
}
