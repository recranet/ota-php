<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType;

/**
 * Class representing DaySummariesAType
 */
class DaySummariesAType
{
    /**
     * A container for the previous event detail data.
     *
     * @var \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType[] $daySummary
     */
    private $daySummary = [
        
    ];

    /**
     * Adds as daySummary
     *
     * A container for the previous event detail data.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType $daySummary
     */
    public function addToDaySummary(\Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType $daySummary)
    {
        $this->daySummary[] = $daySummary;
        return $this;
    }

    /**
     * isset daySummary
     *
     * A container for the previous event detail data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDaySummary($index)
    {
        return isset($this->daySummary[$index]);
    }

    /**
     * unset daySummary
     *
     * A container for the previous event detail data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDaySummary($index)
    {
        unset($this->daySummary[$index]);
    }

    /**
     * Gets as daySummary
     *
     * A container for the previous event detail data.
     *
     * @return \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType[]
     */
    public function getDaySummary()
    {
        return $this->daySummary;
    }

    /**
     * Sets a new daySummary
     *
     * A container for the previous event detail data.
     *
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType[] $daySummary
     * @return self
     */
    public function setDaySummary(array $daySummary)
    {
        $this->daySummary = $daySummary;
        return $this;
    }
}

