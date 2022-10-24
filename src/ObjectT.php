<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template T of object
 * @implements Type<T>
 */
final class ObjectT implements Type
{
    /**
     * @var list<Type>
     */
    public readonly array $templateTypes;

    /**
     * @no-named-arguments
     * @param class-string<T> $class
     */
    public function __construct(
        public readonly string $class,
        Type ...$templateTypes,
    ) {
        $this->templateTypes = $templateTypes;
    }
}
