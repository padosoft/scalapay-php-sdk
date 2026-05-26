<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Type\Link;

use Exception;
use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Type\Link\NotificationInterface;

/**
 * Class Notification
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Type\Link
 */
class Notification extends ModelAbstract implements NotificationInterface
{
    /** @var string[] ALLOWED_PREFERRED_LANGUAGES */
    const ALLOWED_PREFERRED_LANGUAGES = [
        'english',
        'francais',
        'italiano',
        'deutsch',
        'espanol',
        'dutch',
        'suomi',
        'portuguese'
    ];

    /** @var string $preferredLanguage */
    protected $preferredLanguage;

    /** @var string $emailAddress */
    protected $emailAddress;

    /** @var string $phoneCountryCode */
    protected $phoneCountryCode;

    /** @var string $phoneNumber */
    protected $phoneNumber;

    /** @var string[] $channels */
    protected $channels;

    /**
     * Returns preferred language key.
     *
     * @return string
     */
    public function getPreferredLanguage()
    {
        return $this->preferredLanguage;
    }

    /**
     * Sets preferred language key.
     *
     * @param string $preferredLanguage
     * @return $this
     * @throws Exception
     */
    public function setPreferredLanguage($preferredLanguage)
    {
        $preferredLanguage = strtolower($preferredLanguage);
        if (!in_array($preferredLanguage, self::ALLOWED_PREFERRED_LANGUAGES)) {
            throw new Exception(
                'Preferred Language must be a value between ' .
                implode(', ', self::ALLOWED_PREFERRED_LANGUAGES) .
                '.'
            );
        }

        $this->preferredLanguage = $preferredLanguage;
        return $this;
    }

    /**
     * Returns email address key.
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets email address key.
     *
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Returns phone country code key.
     *
     * @return string
     */
    public function getPhoneCountryCode()
    {
        return $this->phoneCountryCode;
    }

    /**
     * Sets phone country code key.
     *
     * @param string $phoneCountryCode
     * @return $this
     */
    public function setPhoneCountryCode($phoneCountryCode)
    {
        $this->phoneCountryCode = $phoneCountryCode;
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

    /**
     * Returns channels key.
     *
     * @return string[]
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * Sets channels key.
     *
     * @param string[] $channels
     * @return $this
     */
    public function setChannels($channels)
    {
        $this->channels = $channels;
        return $this;
    }
}
