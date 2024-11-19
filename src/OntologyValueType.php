<?php

namespace Recranet\OTA;

/**
 * Class representing OntologyValueType
 *
 * Trip/ traveler value information with ontology reference.
 * XSD Type: OntologyValueType
 */
class OntologyValueType
{
    /**
     * Value score.
     * Example: 3
     * Implementer: This is a value score between 1 and 5, with 1 having the greatest value and 5 having the least value.
     *
     * @var int $score
     */
    private $score = null;

    /**
     * Metrics used for valuation.
     * Example: ClassOfService
     *
     * @var \Recranet\OTA\OntologyValueType\ScoreBasisAType[] $scoreBasis
     */
    private $scoreBasis = [
        
    ];

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as score
     *
     * Value score.
     * Example: 3
     * Implementer: This is a value score between 1 and 5, with 1 having the greatest value and 5 having the least value.
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * Value score.
     * Example: 3
     * Implementer: This is a value score between 1 and 5, with 1 having the greatest value and 5 having the least value.
     *
     * @param int $score
     * @return self
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Adds as scoreBasis
     *
     * Metrics used for valuation.
     * Example: ClassOfService
     *
     * @return self
     * @param \Recranet\OTA\OntologyValueType\ScoreBasisAType $scoreBasis
     */
    public function addToScoreBasis(\Recranet\OTA\OntologyValueType\ScoreBasisAType $scoreBasis)
    {
        $this->scoreBasis[] = $scoreBasis;
        return $this;
    }

    /**
     * isset scoreBasis
     *
     * Metrics used for valuation.
     * Example: ClassOfService
     *
     * @param int|string $index
     * @return bool
     */
    public function issetScoreBasis($index)
    {
        return isset($this->scoreBasis[$index]);
    }

    /**
     * unset scoreBasis
     *
     * Metrics used for valuation.
     * Example: ClassOfService
     *
     * @param int|string $index
     * @return void
     */
    public function unsetScoreBasis($index)
    {
        unset($this->scoreBasis[$index]);
    }

    /**
     * Gets as scoreBasis
     *
     * Metrics used for valuation.
     * Example: ClassOfService
     *
     * @return \Recranet\OTA\OntologyValueType\ScoreBasisAType[]
     */
    public function getScoreBasis()
    {
        return $this->scoreBasis;
    }

    /**
     * Sets a new scoreBasis
     *
     * Metrics used for valuation.
     * Example: ClassOfService
     *
     * @param \Recranet\OTA\OntologyValueType\ScoreBasisAType[] $scoreBasis
     * @return self
     */
    public function setScoreBasis(array $scoreBasis = null)
    {
        $this->scoreBasis = $scoreBasis;
        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Recranet\OTA\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Recranet\OTA\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(?\Recranet\OTA\OntologyExtension $ontologyExtension = null)
    {
        $this->ontologyExtension = $ontologyExtension;
        return $this;
    }
}

