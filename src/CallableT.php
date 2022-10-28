<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template TReturn
 * @implements Type<callable(): TReturn>
 */
final class CallableT implements Type
{
    /**
     * @param list<CallableParameter> $parameters
     * @param Type<TReturn>           $returnType
     */
    public function __construct(
        public readonly array $parameters = [],
        public readonly Type $returnType = new MixedT(),
    ) {
    }
}
