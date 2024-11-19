<?php

namespace Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType;

/**
 * Class representing ExhibitDetailsAType
 */
class ExhibitDetailsAType
{
    /**
     * Describes a single exhibit within an exhibitiion.
     *
     * @var \Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[] $exhibitDetail
     */
    private $exhibitDetail = [
        
    ];

    /**
     * Adds as exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @return self
     * @param \Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType $exhibitDetail
     */
    public function addToExhibitDetail(\Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType $exhibitDetail)
    {
        $this->exhibitDetail[] = $exhibitDetail;
        return $this;
    }

    /**
     * isset exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExhibitDetail($index)
    {
        return isset($this->exhibitDetail[$index]);
    }

    /**
     * unset exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExhibitDetail($index)
    {
        unset($this->exhibitDetail[$index]);
    }

    /**
     * Gets as exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @return \Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[]
     */
    public function getExhibitDetail()
    {
        return $this->exhibitDetail;
    }

    /**
     * Sets a new exhibitDetail
     *
     * Describes a single exhibit within an exhibitiion.
     *
     * @param \Recranet\OTA\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\ExhibitDetailsAType\ExhibitDetailAType[] $exhibitDetail
     * @return self
     */
    public function setExhibitDetail(array $exhibitDetail)
    {
        $this->exhibitDetail = $exhibitDetail;
        return $this;
    }
}

