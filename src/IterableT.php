<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template TKey
 * @template TValue
 * @implements Type<iterable<TKey, TValue>>
 */
final class IterableT implements Type
{
    /**
     * @param Type<TKey>   $keyType
     * @param Type<TValue> $valueType
     */
    public function __construct(
        public readonly Type $keyType = new MixedT(),
        public readonly Type $valueType = new MixedT(),
    ) {
    }
}
