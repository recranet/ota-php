<?php

namespace Recranet\OTA\Type\StatisticApplicationSetType;

/**
 * Class representing ReportSummariesAType
 *
 * Container for ReportSummary elements of type ParagraphType.
 */
class ReportSummariesAType
{
    /**
     * This element has text information, included with the data in the report as needed.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $reportSummary
     */
    private $reportSummary = [
        
    ];

    /**
     * Adds as reportSummary
     *
     * This element has text information, included with the data in the report as needed.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $reportSummary
     */
    public function addToReportSummary(\Recranet\OTA\Type\ParagraphType $reportSummary)
    {
        $this->reportSummary[] = $reportSummary;
        return $this;
    }

    /**
     * isset reportSummary
     *
     * This element has text information, included with the data in the report as needed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReportSummary($index)
    {
        return isset($this->reportSummary[$index]);
    }

    /**
     * unset reportSummary
     *
     * This element has text information, included with the data in the report as needed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReportSummary($index)
    {
        unset($this->reportSummary[$index]);
    }

    /**
     * Gets as reportSummary
     *
     * This element has text information, included with the data in the report as needed.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getReportSummary()
    {
        return $this->reportSummary;
    }

    /**
     * Sets a new reportSummary
     *
     * This element has text information, included with the data in the report as needed.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $reportSummary
     * @return self
     */
    public function setReportSummary(array $reportSummary)
    {
        $this->reportSummary = $reportSummary;
        return $this;
    }
}

