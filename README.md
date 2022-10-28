# PHP Poseidon Type

Collection of value objects that represent the types of the PHP static analysis type system (Psalm, PHPStan).

All implementations of `Type` should be treated as sealed. The `Type` interface MUST NOT be implemented in userland.
If one needs an alias for a complex compound type, implement `Alias` or create a builder/function instead.

This library will never have any dependencies. Once full and stable, it might be proposed as a PSR.

# Installation

```
composer require poseidon/type
```

# Naming

Value objects, representing native PHP types cannot be named after them, because words like `Int`, `Strind` etc. are [reserved](https://www.php.net/manual/en/reserved.php).
A suffix might be introduced to fix this problem. `Type` suffix is too verbose, so we have chosen `T`: `int -> IntT`, `float -> FloatT`.
Although types like `non-empty-list` can be safely named `NonEmptyList`, for now we have decided to follow the T-convention for all types.

# Supported types

## Scalar types

- [x] `bool`
- [x] `int`
- [x] `positive-int`
- [x] `float`
- [x] `non-empty-string`
- [x] `string`
- [ ] `literal-string`
- [x] `array-key`
- [x] `numeric-string`
- [x] `class-string`
- [x] `class-string<T>`
- [ ] `interface-string`
- [ ] `trait-string`
- [ ] `enum-string`
- [ ] `callable-string`
- [x] `numeric`
- [x] `scalar`

## Literals

- [x] `null`
- [x] `true`
- [x] `false`
- [x] `-10`
- [x] `-0.34`
- [x] `'foo'`

## Array types

- [x] `list<TValue>`
- [x] `non-empty-list<TValue>`
- [x] `array<TKey, TValue>`
- [x] `non-empty-array<TKey, TValue>`
- [x] `array{foo: int, bar?: string}`, `array{int, string}`
- [ ] `callable-array`

## Object types

- [x] `object`
- [x] `Foo\MyClass<T>`
- [x] `Generator<TKey, TValue, TSend, TReturn>`
- [x] `static`

## Callable types

- [x] `callable(Foo, Bar=): Baz`
- [x] `\Closure(Foo, Bar=): Baz`

## Constants

- [ ] `Foo\Bar::MY_SCALAR_CONST`
- [ ] `key-of<Foo\Bar::ARRAY_CONST>`
- [ ] `value-of<Foo\Bar::ARRAY_CONST>`
- [ ] `key-of<T>`, `T[TKey]` ([example](https://psalm.dev/r/3e935ed485)) 

## Other types

- [x] `?T`
- [x] `never`
- [x] `void`
- [x] `mixed`
- [x] `iterable<TKey, TValue>`
- [x] `resource`
- [x] union types
- [x] intersection types
- [x] template types
