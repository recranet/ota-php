<?php

namespace Recranet\OTA\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType;

use Recranet\OTA\UniqueIDType;

/**
 * Class representing MessageIDAType
 */
class MessageIDAType extends UniqueIDType
{
    /**
     * A collection of RFP_ID.
     *
     * @var \Recranet\OTA\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType\RFPIDsAType\RFPIDAType[] $rFPIDs
     */
    private $rFPIDs = null;

    /**
     * Adds as rFPID
     *
     * A collection of RFP_ID.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType\RFPIDsAType\RFPIDAType $rFPID
     */
    public function addToRFPIDs(\Recranet\OTA\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType\RFPIDsAType\RFPIDAType $rFPID)
    {
        $this->rFPIDs[] = $rFPID;
        return $this;
    }

    /**
     * isset rFPIDs
     *
     * A collection of RFP_ID.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRFPIDs($index)
    {
        return isset($this->rFPIDs[$index]);
    }

    /**
     * unset rFPIDs
     *
     * A collection of RFP_ID.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRFPIDs($index)
    {
        unset($this->rFPIDs[$index]);
    }

    /**
     * Gets as rFPIDs
     *
     * A collection of RFP_ID.
     *
     * @return \Recranet\OTA\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType\RFPIDsAType\RFPIDAType[]
     */
    public function getRFPIDs()
    {
        return $this->rFPIDs;
    }

    /**
     * Sets a new rFPIDs
     *
     * A collection of RFP_ID.
     *
     * @param \Recranet\OTA\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType\RFPIDsAType\RFPIDAType[] $rFPIDs
     * @return self
     */
    public function setRFPIDs(array $rFPIDs = null)
    {
        $this->rFPIDs = $rFPIDs;
        return $this;
    }
}

