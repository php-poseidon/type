<?php

declare(strict_types=1);

namespace Poseidon\Type;

/** @psalm-check-type-exact $_stringLiteral = 'abc' */
$_stringLiteral = extractType(new StringLiteralT('abc'));

/**
 * @return literal-string
 */
function generateLiteralString(): string
{
    return 'abc';
}

/** @psalm-check-type-exact $_genericLiteralString = literal-string */
$_genericLiteralString = extractType(new StringLiteralT(generateLiteralString()));
