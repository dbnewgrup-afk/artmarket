<?php

namespace App\Services\Firestore;

use Illuminate\Support\Str;

class FirestoreClient
{
    /**
     * Placeholder Firestore adapter.
     * Replace with google/cloud-firestore implementation in production.
     */
    protected array $memory = [];

    public function find(string $collection, string $id): ?array
    {
        return $this->memory[$collection][$id] ?? null;
    }

    public function query(string $collection, array $filters = [], int $limit = 50): array
    {
        $records = array_values($this->memory[$collection] ?? []);

        foreach ($filters as $field => $expected) {
            $records = array_values(array_filter($records, fn ($item) => ($item[$field] ?? null) === $expected));
        }

        return array_slice($records, 0, $limit);
    }

    public function insert(string $collection, array $data): array
    {
        $id = $data['id'] ?? (string) Str::uuid();
        $data['id'] = $id;
        $data['created_at'] = $data['created_at'] ?? now()->toIso8601String();
        $data['updated_at'] = now()->toIso8601String();

        $this->memory[$collection][$id] = $data;

        return $data;
    }

    public function update(string $collection, string $id, array $data): array
    {
        $existing = $this->memory[$collection][$id] ?? ['id' => $id];
        $payload = array_merge($existing, $data, ['updated_at' => now()->toIso8601String()]);
        $this->memory[$collection][$id] = $payload;

        return $payload;
    }
}
