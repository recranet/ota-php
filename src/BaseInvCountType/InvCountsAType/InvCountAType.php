<?php

namespace Recranet\OTA\BaseInvCountType\InvCountsAType;

/**
 * Class representing InvCountAType
 */
class InvCountAType
{
    /**
     * This identifies the type of inventory count being reported. Refer to OpenTravel Code List Inventory Count Type (INV).
     *
     * @var string $countType
     */
    private $countType = null;

    /**
     * @var int $count
     */
    private $count = null;

    /**
     * Additional information as to the nature of the inventory adjustment; eg. GUEST EXTENDED STAY, or ROOM CHANGE, etc.
     *
     * @var string $adjustReason
     */
    private $adjustReason = null;

    /**
     * An enumerated type. 'Adjustment' is the offset up or down to the inventoried item (day to day business); 'Used' means the Inv value is how much of this inventoried item has been used/sold at this point in time; 'Remaining' means that the Inv value shows what is left for the inventoried item at this point in time; 'Allocation' means this is how much of the inventoried item is going to be allocated to the receiver for them to pull from inventory.
     *
     * @var string $actionType
     */
    private $actionType = null;

    /**
     * Used for information regarding inventory block cutoff dates.
     *
     * @var \Recranet\OTA\BaseInvCountType\InvCountsAType\InvCountAType\InvBlockCutoffAType $invBlockCutoff
     */
    private $invBlockCutoff = null;

    /**
     * Gets as countType
     *
     * This identifies the type of inventory count being reported. Refer to OpenTravel Code List Inventory Count Type (INV).
     *
     * @return string
     */
    public function getCountType()
    {
        return $this->countType;
    }

    /**
     * Sets a new countType
     *
     * This identifies the type of inventory count being reported. Refer to OpenTravel Code List Inventory Count Type (INV).
     *
     * @param string $countType
     * @return self
     */
    public function setCountType($countType)
    {
        $this->countType = $countType;
        return $this;
    }

    /**
     * Gets as count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets as adjustReason
     *
     * Additional information as to the nature of the inventory adjustment; eg. GUEST EXTENDED STAY, or ROOM CHANGE, etc.
     *
     * @return string
     */
    public function getAdjustReason()
    {
        return $this->adjustReason;
    }

    /**
     * Sets a new adjustReason
     *
     * Additional information as to the nature of the inventory adjustment; eg. GUEST EXTENDED STAY, or ROOM CHANGE, etc.
     *
     * @param string $adjustReason
     * @return self
     */
    public function setAdjustReason($adjustReason)
    {
        $this->adjustReason = $adjustReason;
        return $this;
    }

    /**
     * Gets as actionType
     *
     * An enumerated type. 'Adjustment' is the offset up or down to the inventoried item (day to day business); 'Used' means the Inv value is how much of this inventoried item has been used/sold at this point in time; 'Remaining' means that the Inv value shows what is left for the inventoried item at this point in time; 'Allocation' means this is how much of the inventoried item is going to be allocated to the receiver for them to pull from inventory.
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * An enumerated type. 'Adjustment' is the offset up or down to the inventoried item (day to day business); 'Used' means the Inv value is how much of this inventoried item has been used/sold at this point in time; 'Remaining' means that the Inv value shows what is left for the inventoried item at this point in time; 'Allocation' means this is how much of the inventoried item is going to be allocated to the receiver for them to pull from inventory.
     *
     * @param string $actionType
     * @return self
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as invBlockCutoff
     *
     * Used for information regarding inventory block cutoff dates.
     *
     * @return \Recranet\OTA\BaseInvCountType\InvCountsAType\InvCountAType\InvBlockCutoffAType
     */
    public function getInvBlockCutoff()
    {
        return $this->invBlockCutoff;
    }

    /**
     * Sets a new invBlockCutoff
     *
     * Used for information regarding inventory block cutoff dates.
     *
     * @param \Recranet\OTA\BaseInvCountType\InvCountsAType\InvCountAType\InvBlockCutoffAType $invBlockCutoff
     * @return self
     */
    public function setInvBlockCutoff(?\Recranet\OTA\BaseInvCountType\InvCountsAType\InvCountAType\InvBlockCutoffAType $invBlockCutoff = null)
    {
        $this->invBlockCutoff = $invBlockCutoff;
        return $this;
    }
}

