<?php

declare(strict_types=1);

namespace Poseidon\Type;

/** @psalm-check-type-exact $_stringLiteral = 'abc' */
$_stringLiteral = extractType(new StringLiteralT('abc'));

/** @psalm-check-type-exact $_genericString = string */
$_genericString = extractType(new StringLiteralT(md5('')));
