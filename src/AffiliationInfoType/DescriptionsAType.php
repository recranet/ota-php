<?php

namespace Recranet\OTA\AffiliationInfoType;

/**
 * Class representing DescriptionsAType
 */
class DescriptionsAType
{
    /**
     * Describes affiliation information (e.g., accolades, recognition).
     *
     * @var \Recranet\OTA\ParagraphType[] $description
     */
    private $description = [
        
    ];

    /**
     * Adds as description
     *
     * Describes affiliation information (e.g., accolades, recognition).
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $description
     */
    public function addToDescription(\Recranet\OTA\ParagraphType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Describes affiliation information (e.g., accolades, recognition).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Describes affiliation information (e.g., accolades, recognition).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Describes affiliation information (e.g., accolades, recognition).
     *
     * @return \Recranet\OTA\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Describes affiliation information (e.g., accolades, recognition).
     *
     * @param \Recranet\OTA\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }
}

