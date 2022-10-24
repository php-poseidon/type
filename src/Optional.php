<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template T
 */
final class Optional
{
    /**
     * @param Type<T> $type
     */
    public function __construct(
        public readonly Type $type,
    ) {
    }

    /**
     * @psalm-pure
     * @template TResolved
     * @param Optional<TResolved>|Type<TResolved> $element
     * @return array{Type<TResolved>, bool}
     */
    public static function resolve(self|Type $element): array
    {
        if ($element instanceof self) {
            return [$element->type, true];
        }

        return [$element, false];
    }
}
