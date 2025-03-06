<?php

namespace Recranet\OTA\Type\BaseInvCountType;

/**
 * Class representing InvCountsAType
 */
class InvCountsAType
{
    /**
     * Individual inventory count (e.g., Physical, Available, Sold, OOO, NAFS).
     *
     * @var \Recranet\OTA\Type\BaseInvCountType\InvCountsAType\InvCountAType[] $invCount
     */
    private $invCount = [
        
    ];

    /**
     * Adds as invCount
     *
     * Individual inventory count (e.g., Physical, Available, Sold, OOO, NAFS).
     *
     * @return self
     * @param \Recranet\OTA\Type\BaseInvCountType\InvCountsAType\InvCountAType $invCount
     */
    public function addToInvCount(\Recranet\OTA\Type\BaseInvCountType\InvCountsAType\InvCountAType $invCount)
    {
        $this->invCount[] = $invCount;
        return $this;
    }

    /**
     * isset invCount
     *
     * Individual inventory count (e.g., Physical, Available, Sold, OOO, NAFS).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvCount($index)
    {
        return isset($this->invCount[$index]);
    }

    /**
     * unset invCount
     *
     * Individual inventory count (e.g., Physical, Available, Sold, OOO, NAFS).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvCount($index)
    {
        unset($this->invCount[$index]);
    }

    /**
     * Gets as invCount
     *
     * Individual inventory count (e.g., Physical, Available, Sold, OOO, NAFS).
     *
     * @return \Recranet\OTA\Type\BaseInvCountType\InvCountsAType\InvCountAType[]
     */
    public function getInvCount()
    {
        return $this->invCount;
    }

    /**
     * Sets a new invCount
     *
     * Individual inventory count (e.g., Physical, Available, Sold, OOO, NAFS).
     *
     * @param \Recranet\OTA\Type\BaseInvCountType\InvCountsAType\InvCountAType[] $invCount
     * @return self
     */
    public function setInvCount(array $invCount)
    {
        $this->invCount = $invCount;
        return $this;
    }
}

