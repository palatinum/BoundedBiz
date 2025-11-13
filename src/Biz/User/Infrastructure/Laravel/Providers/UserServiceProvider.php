<?php

namespace BoundedBiz\Biz\User\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;
use BoundedBiz\User\Domain\Repositories\UserRepositoryInterface;
use BoundedBiz\User\Infrastructure\Persistence\EloquentUserRepository;
use BoundedBiz\User\Infrastructure\Persistence\DoctrineUserRepository;
use BoundedBiz\User\Infrastructure\Persistence\InMemoryUserRepository;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $orm = config('boundedbiz.orm');

        $this->app->bind(UserRepositoryInterface::class, function () use ($orm) {
            $modelClass = config('boundedbiz.models.user');

            return match ($orm) {
                'eloquent' => new EloquentUserRepository($modelClass),
                //'doctrine' => new DoctrineUserRepository($modelClass),
                //'inmemory' => new InMemoryUserRepository(),
                default => throw new \Exception("ORM no soportado: $orm"),
            };
        });
    }
}