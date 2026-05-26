<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Industry\Travel;

use Exception;

/**
 * Interface EventsInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Industry\Travel
 */
interface EventsInterface
{
    /**
     * Returns event name key.
     *
     * @return string
     */
    public function getEventName();

    /**
     * Sets event name key.
     *
     * @param string $eventName
     * @return $this
     */
    public function setEventName($eventName);

    /**
     * Returns event country key.
     *
     * @return string
     */
    public function getEventCountry();

    /**
     * Sets event country key.
     *
     * @param string $eventCountry
     * @return $this
     */
    public function setEventCountry($eventCountry);

    /**
     * Returns category key.
     *
     * @return string
     */
    public function getCategory();

    /**
     * Sets category key.
     *
     * @param string $category
     * @return $this
     * @throws Exception
     */
    public function setCategory($category);

    /**
     * Returns ticket type key.
     *
     * @return string
     */
    public function getTicketType();

    /**
     * Sets ticket type key.
     *
     * @param string $ticketType
     * @return $this
     * @throws Exception
     */
    public function setTicketType($ticketType);
}
