<?php

declare(strict_types=1);

namespace Enqueue\Wamp;

trait SerializerAwareTrait
{
    /**
     * @var Serializer
     */
    private $serializer;

    public function setSerializer(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @return Serializer
     */
    public function getSerializer()
    {
        return $this->serializer;
    }
}
