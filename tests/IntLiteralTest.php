<?php

declare(strict_types=1);

namespace Poseidon\Type;

/** @psalm-check-type-exact $_intLiteral = 123 */
$_intLiteral = extractType(new IntLiteralT(123));

/** @psalm-check-type-exact $_negativeIntLiteral = -223 */
$_negativeIntLiteral = extractType(new IntLiteralT(-223));

/** @psalm-check-type-exact $_genericInt = int */
$_genericInt = extractType(new IntLiteralT(crc32('')));
