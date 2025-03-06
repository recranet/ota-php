<?php

namespace Recranet\OTA\Type\BaggageSpecificationType;

/**
 * Class representing SpecialItemAType
 */
class SpecialItemAType
{
    /**
     * Code.
     * Example: 123, ABC123
     * Note: Codes may represent any item, for example, type of traveler, service code, room amenity, etc.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Code source.
     * Example: OpenTravel
     * Note: This is a named source that created, owns or manages the code(s).
     *
     * @var string $codeContext
     */
    private $codeContext = null;

    /**
     * URI.
     * Example: http://www.opentravel.org
     * Note: This is a URI to additional information about the code or the code source.
     *
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * Gets as code
     *
     * Code.
     * Example: 123, ABC123
     * Note: Codes may represent any item, for example, type of traveler, service code, room amenity, etc.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code.
     * Example: 123, ABC123
     * Note: Codes may represent any item, for example, type of traveler, service code, room amenity, etc.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Code source.
     * Example: OpenTravel
     * Note: This is a named source that created, owns or manages the code(s).
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Code source.
     * Example: OpenTravel
     * Note: This is a named source that created, owns or manages the code(s).
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * URI.
     * Example: http://www.opentravel.org
     * Note: This is a URI to additional information about the code or the code source.
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * URI.
     * Example: http://www.opentravel.org
     * Note: This is a URI to additional information about the code or the code source.
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }
}

