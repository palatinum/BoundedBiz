<?php

namespace Shared\Domain\ValueObjects;

final class Role
{
    private string $value;

    const MASTER = 'master';
    const ADMIN = 'admin';
    const MANAGER = 'manager';
    const EMPLOYEE = 'employee';


    private const VALID_ROLES = [
        self::MASTER,
        self::ADMIN,
        self::MANAGER,
        self::EMPLOYEE,
    ];

    public function __construct(string $value)
    {
        if (!in_array($value, self::VALID_ROLES, true)) {
            throw new \InvalidArgumentException("Rol inválido: {$value}");
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public static function master(): self
    {
        return new self('master');
    }

    public static function admin(): self
    {
        return new self('admin');
    }

    public static function manager(): self
    {
        return new self('manager');
    }

    public static function employee(): self
    {
        return new self('employee');
    }

    public static function all(): array
    {
        return array_map(fn($role) => new self($role), self::VALID_ROLES);
    }
}
