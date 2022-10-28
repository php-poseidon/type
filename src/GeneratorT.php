<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template TKey
 * @template TValue
 * @template TSend
 * @template TReturn
 * @implements TypeAlias<\Generator<TKey, TValue, TSend, TReturn>>
 */
final class GeneratorT implements TypeAlias
{
    /**
     * @param Type<TKey>    $keyType
     * @param Type<TValue>  $valueType
     * @param Type<TSend>   $sendType
     * @param Type<TReturn> $returnType
     */
    public function __construct(
        public readonly Type $keyType = new MixedT(),
        public readonly Type $valueType = new MixedT(),
        public readonly Type $sendType = new MixedT(),
        public readonly Type $returnType = new MixedT(),
    ) {
    }

    public function type(): Type
    {
        return new ObjectT(
            \Generator::class,
            $this->keyType,
            $this->valueType,
            $this->sendType,
            $this->returnType,
        );
    }
}
