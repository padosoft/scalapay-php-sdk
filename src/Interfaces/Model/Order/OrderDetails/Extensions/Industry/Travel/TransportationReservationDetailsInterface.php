<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Industry\Travel;

use Exception;

/**
 * Interface TransportationReservationDetailsInterface
 *
 * @package Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Industry\Travel
 */
interface TransportationReservationDetailsInterface
{
    /**
     * Returns the type key.
     *
     * @return string
     */
    public function getType();

    /**
     * Sets the type key.
     *
     * @param string $type
     * @return $this
     * @throws Exception
     */
    public function setType($type);

    /**
     * Returns the departure key.
     *
     * @return string
     */
    public function getDeparture();

    /**
     * Sets the departure key.
     *
     * @param string $departure
     * @return $this
     */
    public function setDeparture($departure);

    /**
     * Returns the arrival key.
     *
     * @return string
     */
    public function getArrival();

    /**
     * Sets the arrival key.
     *
     * @param string $arrival
     * @return $this
     */
    public function setArrival($arrival);

    /**
     * Returns the ticket class key.
     *
     * @return string
     */
    public function getTicketClass();

    /**
     * Sets the ticket class key.
     *
     * @param string $ticketClass
     * @return $this
     * @throws Exception
     */
    public function setTicketClass($ticketClass);

    /**
     * Returns the ticket type key.
     *
     * @return string
     */
    public function getTicketType();

    /**
     * Sets the ticket type key.
     *
     * @param string $ticketType
     * @return $this
     * @throws Exception
     */
    public function setTicketType($ticketType);

    /**
     * Returns loyalty programme key.
     *
     * @return bool
     */
    public function getLoyaltyProgramme();

    /**
     * Sets loyalty programme key.
     *
     * @param bool $loyaltyProgramme
     * @return $this
     */
    public function setLoyaltyProgramme($loyaltyProgramme);
}
