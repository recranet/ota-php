<?php

namespace Recranet\OTA;

/**
 * Class representing CommissionEventsType
 *
 * A collection of CommissionsEvent elements that result from a guest stay to be sent to the system responsible for processing agent commission payments.
 * XSD Type: CommissionEventsType
 */
class CommissionEventsType
{
    /**
     * The CommissionEvent element is used to identify the commission to be paid to a central server. The Commission Event is initiated on the schedule that the hotel typically pays commissions (e.g.: following night audit), and a CommissionEvent occurs for every check out.
     *
     * @var \Recranet\OTA\CommissionEventType[] $commissionEvent
     */
    private $commissionEvent = [
        
    ];

    /**
     * Adds as commissionEvent
     *
     * The CommissionEvent element is used to identify the commission to be paid to a central server. The Commission Event is initiated on the schedule that the hotel typically pays commissions (e.g.: following night audit), and a CommissionEvent occurs for every check out.
     *
     * @return self
     * @param \Recranet\OTA\CommissionEventType $commissionEvent
     */
    public function addToCommissionEvent(\Recranet\OTA\CommissionEventType $commissionEvent)
    {
        $this->commissionEvent[] = $commissionEvent;
        return $this;
    }

    /**
     * isset commissionEvent
     *
     * The CommissionEvent element is used to identify the commission to be paid to a central server. The Commission Event is initiated on the schedule that the hotel typically pays commissions (e.g.: following night audit), and a CommissionEvent occurs for every check out.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommissionEvent($index)
    {
        return isset($this->commissionEvent[$index]);
    }

    /**
     * unset commissionEvent
     *
     * The CommissionEvent element is used to identify the commission to be paid to a central server. The Commission Event is initiated on the schedule that the hotel typically pays commissions (e.g.: following night audit), and a CommissionEvent occurs for every check out.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommissionEvent($index)
    {
        unset($this->commissionEvent[$index]);
    }

    /**
     * Gets as commissionEvent
     *
     * The CommissionEvent element is used to identify the commission to be paid to a central server. The Commission Event is initiated on the schedule that the hotel typically pays commissions (e.g.: following night audit), and a CommissionEvent occurs for every check out.
     *
     * @return \Recranet\OTA\CommissionEventType[]
     */
    public function getCommissionEvent()
    {
        return $this->commissionEvent;
    }

    /**
     * Sets a new commissionEvent
     *
     * The CommissionEvent element is used to identify the commission to be paid to a central server. The Commission Event is initiated on the schedule that the hotel typically pays commissions (e.g.: following night audit), and a CommissionEvent occurs for every check out.
     *
     * @param \Recranet\OTA\CommissionEventType[] $commissionEvent
     * @return self
     */
    public function setCommissionEvent(array $commissionEvent)
    {
        $this->commissionEvent = $commissionEvent;
        return $this;
    }
}

