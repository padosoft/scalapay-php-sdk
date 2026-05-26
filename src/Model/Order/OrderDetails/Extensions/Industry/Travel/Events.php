<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel;

use Exception;
use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Industry\Travel\EventsInterface;

/**
 * Class Events
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel
 */
class Events extends ModelAbstract implements EventsInterface
{
    /** @var string[] ALLOWED_CATEGORIES */
    const ALLOWED_CATEGORIES = ['concert', 'club', 'festival', 'experience', 'other'];

    /** @var string[] ALLOWED_TICKET_TYPES */
    const ALLOWED_TICKET_TYPES = ['singleuse', 'subscription'];

    /** @var string $eventName */
    protected $eventName;

    /** @var string $eventCountry */
    protected $eventCountry;

    /** @var string $category */
    protected $category;

    /** @var string $ticketType */
    protected $ticketType;

    /**
     * Returns event name key.
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Sets event name key.
     *
     * @param string $eventName
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * Returns event country key.
     *
     * @return string
     */
    public function getEventCountry()
    {
        return $this->eventCountry;
    }

    /**
     * Sets event country key.
     *
     * @param string $eventCountry
     * @return $this
     */
    public function setEventCountry($eventCountry)
    {
        $this->eventCountry = $eventCountry;
        return $this;
    }

    /**
     * Returns category key.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets category key.
     *
     * @param string $category
     * @return $this
     * @throws Exception
     */
    public function setCategory($category)
    {
        $category = strtolower($category);
        if (!in_array($category, self::ALLOWED_CATEGORIES)) {
            throw new Exception(
                'Category must be a value between ' .
                implode(', ', self::ALLOWED_CATEGORIES) .
                '.'
            );
        }

        $this->category = $category;
        return $this;
    }

    /**
     * Returns ticket type key.
     *
     * @return string
     */
    public function getTicketType()
    {
        return $this->ticketType;
    }

    /**
     * Sets ticket type key.
     *
     * @param string $ticketType
     * @return $this
     * @throws Exception
     */
    public function setTicketType($ticketType)
    {
        $ticketType = strtolower($ticketType);
        if (!in_array($ticketType, self::ALLOWED_TICKET_TYPES)) {
            throw new Exception(
                'Ticket Type must be a value between ' .
                implode(', ', self::ALLOWED_TICKET_TYPES) .
                '.'
            );
        }

        $this->ticketType = $ticketType;
        return $this;
    }
}
