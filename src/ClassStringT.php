<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template T of object
 * @implements Type<class-string<T>>
 */
final class ClassStringT implements Type
{
    /**
     * @param Type<T> $type
     */
    public function __construct(
        public readonly Type $type,
    ) {
    }
}
