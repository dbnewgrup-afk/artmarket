<?php

namespace App\Repositories\Firestore;

interface FirestoreRepositoryInterface
{
    public function collection(string $name): static;

    public function find(string $id): ?array;

    public function all(array $filters = [], int $limit = 50): array;

    public function create(array $data): array;

    public function update(string $id, array $data): array;
}
