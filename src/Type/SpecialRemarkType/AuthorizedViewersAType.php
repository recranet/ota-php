<?php

namespace Recranet\OTA\Type\SpecialRemarkType;

/**
 * Class representing AuthorizedViewersAType
 */
class AuthorizedViewersAType
{
    /**
     * Specifies those authorized to view a confidential special remark.
     *
     * @var \Recranet\OTA\Type\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[] $authorizedViewer
     */
    private $authorizedViewer = [
        
    ];

    /**
     * Adds as authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @return self
     * @param \Recranet\OTA\Type\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType $authorizedViewer
     */
    public function addToAuthorizedViewer(\Recranet\OTA\Type\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType $authorizedViewer)
    {
        $this->authorizedViewer[] = $authorizedViewer;
        return $this;
    }

    /**
     * isset authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthorizedViewer($index)
    {
        return isset($this->authorizedViewer[$index]);
    }

    /**
     * unset authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthorizedViewer($index)
    {
        unset($this->authorizedViewer[$index]);
    }

    /**
     * Gets as authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @return \Recranet\OTA\Type\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[]
     */
    public function getAuthorizedViewer()
    {
        return $this->authorizedViewer;
    }

    /**
     * Sets a new authorizedViewer
     *
     * Specifies those authorized to view a confidential special remark.
     *
     * @param \Recranet\OTA\Type\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[] $authorizedViewer
     * @return self
     */
    public function setAuthorizedViewer(array $authorizedViewer)
    {
        $this->authorizedViewer = $authorizedViewer;
        return $this;
    }
}

