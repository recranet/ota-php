<?php

namespace Recranet\OTA\Serializer;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;
use Recranet\OTA\OTA;

class SerializerBuilderFactory
{
    public static function create(): SerializerBuilder
    {
        $serializerBuilder = SerializerBuilder::create();

        $serializerBuilder->addMetadataDir(OTA::getMetadataDirBasePath(), 'Recranet\OTA\Type');
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler());
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler());
        });

        return $serializerBuilder;
    }
}
