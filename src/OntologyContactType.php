<?php

namespace Recranet\OTA;

/**
 * Class representing OntologyContactType
 *
 * Contact information with ontology reference.
 * XSD Type: OntologyContactType
 */
class OntologyContactType
{
    /**
     * Email.
     * Example: abc@opentrravel.org
     *
     * @var \Recranet\OTA\OntologyContactType\EmailAType $email
     */
    private $email = null;

    /**
     * Phone.
     * Example: OpenTravel
     *
     * @var \Recranet\OTA\OntologyContactType\PhoneAType $phone
     */
    private $phone = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as email
     *
     * Email.
     * Example: abc@opentrravel.org
     *
     * @return \Recranet\OTA\OntologyContactType\EmailAType
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Email.
     * Example: abc@opentrravel.org
     *
     * @param \Recranet\OTA\OntologyContactType\EmailAType $email
     * @return self
     */
    public function setEmail(?\Recranet\OTA\OntologyContactType\EmailAType $email = null)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as phone
     *
     * Phone.
     * Example: OpenTravel
     *
     * @return \Recranet\OTA\OntologyContactType\PhoneAType
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * Phone.
     * Example: OpenTravel
     *
     * @param \Recranet\OTA\OntologyContactType\PhoneAType $phone
     * @return self
     */
    public function setPhone(?\Recranet\OTA\OntologyContactType\PhoneAType $phone = null)
    {
        $this->phone = $phone;
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

