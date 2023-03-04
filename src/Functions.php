<?php
declare(strict_types=1);

use Helmich\Psr7Assert\Constraint\BodyMatchesConstraint;
use Helmich\Psr7Assert\Constraint\HasHeaderConstraint;
use Helmich\Psr7Assert\Constraint\HasMethodConstraint;
use Helmich\Psr7Assert\Constraint\HasQueryParameterConstraint;
use Helmich\Psr7Assert\Constraint\HasQueryParametersConstraint;
use Helmich\Psr7Assert\Constraint\HasStatusConstraint;
use Helmich\Psr7Assert\Constraint\HasUriConstraint;
use Helmich\Psr7Assert\Constraint\IsAbsoluteUriConstraint;
use Helmich\Psr7Assert\Psr7AssertionsClass;
use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\Constraint\LogicalAnd;

function hasUri(string $uri): HasUriConstraint
{
    return Psr7AssertionsClass::hasUri($uri);
}

function hasHeader(string $name, $constraint = null): HasHeaderConstraint
{
    return Psr7AssertionsClass::hasHeader($name, $constraint);
}

function hasHeaderEqualTo(string $name, string $expected): HasHeaderConstraint
{
    return Psr7AssertionsClass::hasHeaderEqualTo($name, $expected);
}

function hasHeaders(array $constraints): LogicalAnd
{
    return Psr7AssertionsClass::hasHeaders($constraints);
}

function hasStatus($status): HasStatusConstraint
{
    return Psr7AssertionsClass::hasStatus($status);
}

function hasQueryParameter($name, $value = null): HasQueryParameterConstraint
{
    return Psr7AssertionsClass::hasQueryParameter($name, $value);
}

function hasQueryParameters(array $parameters): HasQueryParametersConstraint
{
    return Psr7AssertionsClass::hasQueryParameters($parameters);
}

function isSuccess(): HasStatusConstraint
{
    return Psr7AssertionsClass::isSuccess();
}

function isRedirect(): HasStatusConstraint
{
    return Psr7AssertionsClass::isRedirect();
}

function isClientError(): HasStatusConstraint
{
    return Psr7AssertionsClass::isClientError();
}

function isServerError(): HasStatusConstraint
{
    return Psr7AssertionsClass::isServerError();
}

function hasContentType(string $contentType): HasHeaderConstraint
{
    return Psr7AssertionsClass::hasContentType($contentType);
}

function hasMethod(string $method): HasMethodConstraint
{
    return Psr7AssertionsClass::hasMethod($method);
}

function isGet(): HasMethodConstraint
{
    return Psr7AssertionsClass::isGet();
}

function isPost(): HasMethodConstraint
{
    return Psr7AssertionsClass::isPost();
}

function isPut(): HasMethodConstraint
{
    return Psr7AssertionsClass::isPut();
}

function isDelete(): HasMethodConstraint
{
    return Psr7AssertionsClass::isDelete();
}

function bodyMatches(Constraint $constraint): BodyMatchesConstraint
{
    return Psr7AssertionsClass::bodyMatches($constraint);
}

function bodyMatchesJson(array $constraints): LogicalAnd
{
    return Psr7AssertionsClass::bodyMatchesJson($constraints);
}

function bodyMatchesForm(array $constraints): LogicalAnd
{
    return Psr7AssertionsClass::bodyMatchesForm($constraints);
}

function isAbsoluteUri(): IsAbsoluteUriConstraint
{
    return Psr7AssertionsClass::isAbsoluteUri();
}
