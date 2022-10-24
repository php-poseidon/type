<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template T
 * @implements Type<T>
 */
final class UnionT implements Type
{
    /**
     * @var non-empty-list<Type<T>>
     */
    public readonly array $types;

    /**
     * @no-named-arguments
     * @param Type<T> $type
     * @param Type<T> ...$types
     */
    public function __construct(
        Type $type,
        Type ...$types,
    ) {
        $this->types = [$type, ...$types];
    }
}
