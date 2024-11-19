<?php

namespace Recranet\OTA;

/**
 * Class representing BaseInvCountType
 *
 * The set of changes in the number of units of base inventory for one inventory type (code) to be made on the server. The server must successfully update all messages. Failure to update any single status message will result in the failure of all messages.
 * XSD Type: BaseInvCountType
 */
class BaseInvCountType
{
    /**
     * Information on what the InvCountNotif Message applies to (i.e. the combination of inventory and/or rate codes) and the period of application.
     *
     * @var \Recranet\OTA\StatusApplicationControlType $statusApplicationControl
     */
    private $statusApplicationControl = null;

    /**
     * A collection of inventory counts.
     *
     * @var \Recranet\OTA\BaseInvCountType\InvCountsAType\InvCountAType[] $invCounts
     */
    private $invCounts = null;

    /**
     * Communicates additional information about inventory that is not available for sale.
     * Communicates information about inventory that is not available for sale.
     *
     * @var \Recranet\OTA\BaseInvCountType\OffSellAType $offSell
     */
    private $offSell = null;

    /**
     * The unique identifier element allows the trading partners to uniquely identify each InvCountNotifRQ, (i.e. the entire message) for transaction traceability.
     *
     * @var \Recranet\OTA\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as statusApplicationControl
     *
     * Information on what the InvCountNotif Message applies to (i.e. the combination of inventory and/or rate codes) and the period of application.
     *
     * @return \Recranet\OTA\StatusApplicationControlType
     */
    public function getStatusApplicationControl()
    {
        return $this->statusApplicationControl;
    }

    /**
     * Sets a new statusApplicationControl
     *
     * Information on what the InvCountNotif Message applies to (i.e. the combination of inventory and/or rate codes) and the period of application.
     *
     * @param \Recranet\OTA\StatusApplicationControlType $statusApplicationControl
     * @return self
     */
    public function setStatusApplicationControl(?\Recranet\OTA\StatusApplicationControlType $statusApplicationControl = null)
    {
        $this->statusApplicationControl = $statusApplicationControl;
        return $this;
    }

    /**
     * Adds as invCount
     *
     * A collection of inventory counts.
     *
     * @return self
     * @param \Recranet\OTA\BaseInvCountType\InvCountsAType\InvCountAType $invCount
     */
    public function addToInvCounts(\Recranet\OTA\BaseInvCountType\InvCountsAType\InvCountAType $invCount)
    {
        $this->invCounts[] = $invCount;
        return $this;
    }

    /**
     * isset invCounts
     *
     * A collection of inventory counts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvCounts($index)
    {
        return isset($this->invCounts[$index]);
    }

    /**
     * unset invCounts
     *
     * A collection of inventory counts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvCounts($index)
    {
        unset($this->invCounts[$index]);
    }

    /**
     * Gets as invCounts
     *
     * A collection of inventory counts.
     *
     * @return \Recranet\OTA\BaseInvCountType\InvCountsAType\InvCountAType[]
     */
    public function getInvCounts()
    {
        return $this->invCounts;
    }

    /**
     * Sets a new invCounts
     *
     * A collection of inventory counts.
     *
     * @param \Recranet\OTA\BaseInvCountType\InvCountsAType\InvCountAType[] $invCounts
     * @return self
     */
    public function setInvCounts(array $invCounts = null)
    {
        $this->invCounts = $invCounts;
        return $this;
    }

    /**
     * Gets as offSell
     *
     * Communicates additional information about inventory that is not available for sale.
     * Communicates information about inventory that is not available for sale.
     *
     * @return \Recranet\OTA\BaseInvCountType\OffSellAType
     */
    public function getOffSell()
    {
        return $this->offSell;
    }

    /**
     * Sets a new offSell
     *
     * Communicates additional information about inventory that is not available for sale.
     * Communicates information about inventory that is not available for sale.
     *
     * @param \Recranet\OTA\BaseInvCountType\OffSellAType $offSell
     * @return self
     */
    public function setOffSell(?\Recranet\OTA\BaseInvCountType\OffSellAType $offSell = null)
    {
        $this->offSell = $offSell;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each InvCountNotifRQ, (i.e. the entire message) for transaction traceability.
     *
     * @return \Recranet\OTA\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each InvCountNotifRQ, (i.e. the entire message) for transaction traceability.
     *
     * @param \Recranet\OTA\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(?\Recranet\OTA\UniqueIDType $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }
}

