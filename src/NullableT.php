<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template T
 * @implements Type<T|null>
 */
final class NullableT implements Type
{
    /**
     * @param Type<T> $type
     */
    public function __construct(
        public readonly Type $type,
    ) {
    }
}
