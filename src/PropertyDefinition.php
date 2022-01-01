<?php

declare(strict_types=1);

namespace EventSauce\ObjectHydrator;

/**
 * @internal
 */
class PropertyDefinition
{
    public function __construct(
        /** @var array<string, string> */
        public array $keys,
        public string $property,
        public array $propertyCasters,
        public bool $canBeHydrated,
        public bool $isEnum,
        public ?string $concreteTypeName,
    )
    {
    }
}
