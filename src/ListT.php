<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template TValue
 * @implements Type<list<TValue>>
 */
final class ListT implements Type
{
    /**
     * @param Type<TValue> $valueType
     */
    public function __construct(
        public readonly Type $valueType = new MixedT(),
    ) {
    }
}
