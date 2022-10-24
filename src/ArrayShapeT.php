<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template T of array
 * @implements Type<T>
 */
final class ArrayShapeT implements Type
{
    /**
     * @param array<Type|Optional> $elements
     */
    public function __construct(
        public readonly array $elements,
    ) {
    }
}
