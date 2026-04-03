<?php

namespace App\Repositories\Firestore;

use App\Services\Firestore\FirestoreClient;

abstract class BaseFirestoreRepository implements FirestoreRepositoryInterface
{
    protected string $collection = '';

    public function __construct(protected FirestoreClient $client)
    {
    }

    public function collection(string $name): static
    {
        $this->collection = $name;

        return $this;
    }

    public function find(string $id): ?array
    {
        return $this->client->find($this->collection, $id);
    }

    public function all(array $filters = [], int $limit = 50): array
    {
        return $this->client->query($this->collection, $filters, $limit);
    }

    public function create(array $data): array
    {
        return $this->client->insert($this->collection, $data);
    }

    public function update(string $id, array $data): array
    {
        return $this->client->update($this->collection, $id, $data);
    }
}
