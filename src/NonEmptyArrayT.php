<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template TKey of array-key
 * @template TValue
 * @implements Type<non-empty-array<TKey, TValue>>
 */
final class NonEmptyArrayT implements Type
{
    /**
     * @param Type<TKey>   $keyType
     * @param Type<TValue> $valueType
     */
    public function __construct(
        public readonly Type $keyType = new ArrayKeyT(),
        public readonly Type $valueType = new MixedT(),
    ) {
    }
}
