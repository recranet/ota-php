<?php

namespace Recranet\OTA\Type\ProductDescriptionsType;

/**
 * Class representing ProductDescriptionAType
 */
class ProductDescriptionAType
{
    /**
     * This is a reference placeholder, used as an index for this object.
     *
     * @var string $productDescriptionRPH
     */
    private $productDescriptionRPH = null;

    /**
     * A brief description of the product at this lodging facility generally used by central reservations offices or travel agents.
     *
     * @var \Recranet\OTA\Type\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as productDescriptionRPH
     *
     * This is a reference placeholder, used as an index for this object.
     *
     * @return string
     */
    public function getProductDescriptionRPH()
    {
        return $this->productDescriptionRPH;
    }

    /**
     * Sets a new productDescriptionRPH
     *
     * This is a reference placeholder, used as an index for this object.
     *
     * @param string $productDescriptionRPH
     * @return self
     */
    public function setProductDescriptionRPH($productDescriptionRPH)
    {
        $this->productDescriptionRPH = $productDescriptionRPH;
        return $this;
    }

    /**
     * Gets as description
     *
     * A brief description of the product at this lodging facility generally used by central reservations offices or travel agents.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A brief description of the product at this lodging facility generally used by central reservations offices or travel agents.
     *
     * @param \Recranet\OTA\Type\ParagraphType $description
     * @return self
     */
    public function setDescription(?\Recranet\OTA\Type\ParagraphType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

