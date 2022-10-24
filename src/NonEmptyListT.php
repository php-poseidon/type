<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template TValue
 * @implements Type<non-empty-list<TValue>>
 */
final class NonEmptyListT implements Type
{
    /**
     * @param Type<TValue> $valueType
     */
    public function __construct(
        public readonly Type $valueType = new MixedT(),
    ) {
    }
}
