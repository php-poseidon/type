<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @implements Type<callable>
 */
final class ClosureT implements Type
{
    /**
     * @param list<CallableParameter> $parameters
     */
    public function __construct(
        public readonly array $parameters = [],
        public readonly Type $returnType = new MixedT(),
    ) {
    }
}
