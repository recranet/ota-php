<?php

namespace Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType;

/**
 * Class representing HistoriesAType
 */
class HistoriesAType
{
    /**
     * Data pertaining to previous instances of the same or similar event in the past.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType[] $history
     */
    private $history = [
        
    ];

    /**
     * Adds as history
     *
     * Data pertaining to previous instances of the same or similar event in the past.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType $history
     */
    public function addToHistory(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType $history)
    {
        $this->history[] = $history;
        return $this;
    }

    /**
     * isset history
     *
     * Data pertaining to previous instances of the same or similar event in the past.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHistory($index)
    {
        return isset($this->history[$index]);
    }

    /**
     * unset history
     *
     * Data pertaining to previous instances of the same or similar event in the past.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHistory($index)
    {
        unset($this->history[$index]);
    }

    /**
     * Gets as history
     *
     * Data pertaining to previous instances of the same or similar event in the past.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType[]
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Sets a new history
     *
     * Data pertaining to previous instances of the same or similar event in the past.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType[] $history
     * @return self
     */
    public function setHistory(array $history)
    {
        $this->history = $history;
        return $this;
    }
}

