<?php

namespace Recranet\OTA;

/**
 * Class representing FolioIDsType
 *
 * Collection of strings (recommended length - 20 characters) indicating the PMS folio identifiers associated with this revenue detail item.
 * XSD Type: FolioIDsType
 */
class FolioIDsType
{
    /**
     * The PMS folio identifier associated with this revenue detail item.
     *
     * @var string[] $folioID
     */
    private $folioID = [
        
    ];

    /**
     * Adds as folioID
     *
     * The PMS folio identifier associated with this revenue detail item.
     *
     * @return self
     * @param string $folioID
     */
    public function addToFolioID($folioID)
    {
        $this->folioID[] = $folioID;
        return $this;
    }

    /**
     * isset folioID
     *
     * The PMS folio identifier associated with this revenue detail item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFolioID($index)
    {
        return isset($this->folioID[$index]);
    }

    /**
     * unset folioID
     *
     * The PMS folio identifier associated with this revenue detail item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFolioID($index)
    {
        unset($this->folioID[$index]);
    }

    /**
     * Gets as folioID
     *
     * The PMS folio identifier associated with this revenue detail item.
     *
     * @return string[]
     */
    public function getFolioID()
    {
        return $this->folioID;
    }

    /**
     * Sets a new folioID
     *
     * The PMS folio identifier associated with this revenue detail item.
     *
     * @param string $folioID
     * @return self
     */
    public function setFolioID(array $folioID)
    {
        $this->folioID = $folioID;
        return $this;
    }
}

