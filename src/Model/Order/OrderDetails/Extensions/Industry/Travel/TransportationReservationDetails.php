<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel;

use Exception;
use Scalapay\Sdk\Abstracts\ModelAbstract;
use Scalapay\Sdk\Interfaces\Model\Order\OrderDetails\Extensions\Industry\Travel\TransportationReservationDetailsInterface;

/**
 * Class TransportationReservationDetails
 *
 * @package Scalapay\Sdk\Model\Order\OrderDetails\Extensions\Industry\Travel
 */
class TransportationReservationDetails extends ModelAbstract implements TransportationReservationDetailsInterface
{
    /** @var string[] ALLOWED_TYPES */
    const ALLOWED_TYPES = ['air', 'train', 'bus', 'ferry'];

    /** @var string[] ALLOWED_TICKET_CLASSES */
    const ALLOWED_TICKET_CLASSES = ['economy', 'premium_economy', 'business', 'first', 'other'];

    /** @var string[] ALLOWED_TICKET_TYPES */
    const ALLOWED_TICKET_TYPES = ['one_way', 'return', 'other'];

    /** @var string $type */
    protected $type;

    /** @var string $departure */
    protected $departure;

    /** @var string $arrival */
    protected $arrival;

    /** @var string $ticketClass */
    protected $ticketClass;

    /** @var string $ticketType */
    protected $ticketType;

    /** @var bool $loyaltyProgramme */
    protected $loyaltyProgramme;

    /**
     * Returns the type key.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type key.
     *
     * @param string $type
     * @return $this
     * @throws Exception
     */
    public function setType($type)
    {
        $type = strtolower($type);
        if (!in_array($type, self::ALLOWED_TYPES)) {
            throw new Exception(
                'Travel Type must be a value between ' .
                implode(', ', self::ALLOWED_TYPES) .
                '.'
            );
        }

        $this->type = $type;
        return $this;
    }

    /**
     * Returns the departure key.
     *
     * @return string
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Sets the departure key.
     *
     * @param string $departure
     * @return $this
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;
        return $this;
    }

    /**
     * Returns the arrival key.
     *
     * @return string
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Sets the arrival key.
     *
     * @param string $arrival
     * @return $this
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;
        return $this;
    }

    /**
     * Returns the ticket class key.
     *
     * @return string
     */
    public function getTicketClass()
    {
        return $this->ticketClass;
    }

    /**
     * Sets the ticket class key.
     *
     * @param string $ticketClass
     * @return $this
     * @throws Exception
     */
    public function setTicketClass($ticketClass)
    {
        $ticketClass = strtolower($ticketClass);
        if (!in_array($ticketClass, self::ALLOWED_TICKET_CLASSES)) {
            throw new Exception(
                'Ticket Class must be a value between ' .
                implode(', ', self::ALLOWED_TICKET_CLASSES) .
                '.'
            );
        }

        $this->ticketClass = $ticketClass;
        return $this;
    }

    /**
     * Returns the ticket type key.
     *
     * @return string
     */
    public function getTicketType()
    {
        return $this->ticketType;
    }

    /**
     * Sets the ticket type key.
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

    /**
     * Returns loyalty programme key.
     *
     * @return bool
     */
    public function getLoyaltyProgramme()
    {
        return $this->loyaltyProgramme;
    }

    /**
     * Sets loyalty programme key.
     *
     * @param bool $loyaltyProgramme
     * @return $this
     */
    public function setLoyaltyProgramme($loyaltyProgramme)
    {
        $this->loyaltyProgramme = $loyaltyProgramme;
        return $this;
    }
}
