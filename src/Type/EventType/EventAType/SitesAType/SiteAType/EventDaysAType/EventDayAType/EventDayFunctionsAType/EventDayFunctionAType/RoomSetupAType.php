<?php

namespace Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType;

/**
 * Class representing RoomSetupAType
 */
class RoomSetupAType
{
    /**
     * Indicates the arrangement of the function space (e.g. conference or banquet style). Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @var string $roomSetupCode
     */
    private $roomSetupCode = null;

    /**
     * The number of people for whom the room should be set.
     *
     * @var int $setForQuantity
     */
    private $setForQuantity = null;

    /**
     * The time or date and time by which the function space must be set up.
     *
     * @var \DateTime $setByTime
     */
    private $setByTime = null;

    /**
     * The time or date and time by which the function space must be broken down.
     *
     * @var \DateTime $dismantleByTime
     */
    private $dismantleByTime = null;

    /**
     * A collection of setup requirements for the function.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType\SetupDetailsAType\SetupDetailAType[] $setupDetails
     */
    private $setupDetails = null;

    /**
     * A diagram of the room setup.
     *
     * @var \Recranet\OTA\Type\ParagraphType $diagram
     */
    private $diagram = null;

    /**
     * Gets as roomSetupCode
     *
     * Indicates the arrangement of the function space (e.g. conference or banquet style). Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @return string
     */
    public function getRoomSetupCode()
    {
        return $this->roomSetupCode;
    }

    /**
     * Sets a new roomSetupCode
     *
     * Indicates the arrangement of the function space (e.g. conference or banquet style). Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @param string $roomSetupCode
     * @return self
     */
    public function setRoomSetupCode($roomSetupCode)
    {
        $this->roomSetupCode = $roomSetupCode;
        return $this;
    }

    /**
     * Gets as setForQuantity
     *
     * The number of people for whom the room should be set.
     *
     * @return int
     */
    public function getSetForQuantity()
    {
        return $this->setForQuantity;
    }

    /**
     * Sets a new setForQuantity
     *
     * The number of people for whom the room should be set.
     *
     * @param int $setForQuantity
     * @return self
     */
    public function setSetForQuantity($setForQuantity)
    {
        $this->setForQuantity = $setForQuantity;
        return $this;
    }

    /**
     * Gets as setByTime
     *
     * The time or date and time by which the function space must be set up.
     *
     * @return \DateTime
     */
    public function getSetByTime()
    {
        return $this->setByTime;
    }

    /**
     * Sets a new setByTime
     *
     * The time or date and time by which the function space must be set up.
     *
     * @param \DateTime $setByTime
     * @return self
     */
    public function setSetByTime(\DateTime $setByTime)
    {
        $this->setByTime = $setByTime;
        return $this;
    }

    /**
     * Gets as dismantleByTime
     *
     * The time or date and time by which the function space must be broken down.
     *
     * @return \DateTime
     */
    public function getDismantleByTime()
    {
        return $this->dismantleByTime;
    }

    /**
     * Sets a new dismantleByTime
     *
     * The time or date and time by which the function space must be broken down.
     *
     * @param \DateTime $dismantleByTime
     * @return self
     */
    public function setDismantleByTime(\DateTime $dismantleByTime)
    {
        $this->dismantleByTime = $dismantleByTime;
        return $this;
    }

    /**
     * Adds as setupDetail
     *
     * A collection of setup requirements for the function.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType\SetupDetailsAType\SetupDetailAType $setupDetail
     */
    public function addToSetupDetails(\Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType\SetupDetailsAType\SetupDetailAType $setupDetail)
    {
        $this->setupDetails[] = $setupDetail;
        return $this;
    }

    /**
     * isset setupDetails
     *
     * A collection of setup requirements for the function.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSetupDetails($index)
    {
        return isset($this->setupDetails[$index]);
    }

    /**
     * unset setupDetails
     *
     * A collection of setup requirements for the function.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSetupDetails($index)
    {
        unset($this->setupDetails[$index]);
    }

    /**
     * Gets as setupDetails
     *
     * A collection of setup requirements for the function.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType\SetupDetailsAType\SetupDetailAType[]
     */
    public function getSetupDetails()
    {
        return $this->setupDetails;
    }

    /**
     * Sets a new setupDetails
     *
     * A collection of setup requirements for the function.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType\SetupDetailsAType\SetupDetailAType[] $setupDetails
     * @return self
     */
    public function setSetupDetails(array $setupDetails = null)
    {
        $this->setupDetails = $setupDetails;
        return $this;
    }

    /**
     * Gets as diagram
     *
     * A diagram of the room setup.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getDiagram()
    {
        return $this->diagram;
    }

    /**
     * Sets a new diagram
     *
     * A diagram of the room setup.
     *
     * @param \Recranet\OTA\Type\ParagraphType $diagram
     * @return self
     */
    public function setDiagram(?\Recranet\OTA\Type\ParagraphType $diagram = null)
    {
        $this->diagram = $diagram;
        return $this;
    }
}

