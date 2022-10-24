<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template T
 * @implements Type<T>
 */
final class IntersectionT implements Type
{
    /**
     * @var non-empty-list<Type<mixed>>
     */
    public readonly array $types;

    /**
     * @no-named-arguments
     * @param Type<mixed> $type
     * @param Type<mixed> ...$types
     */
    public function __construct(
        Type $type,
        Type ...$types,
    ) {
        $this->types = [$type, ...$types];
    }
}
