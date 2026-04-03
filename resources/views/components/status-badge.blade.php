@php
$color = match($status) {
    'paid','active','published','approved' => '#166534',
    'pending','pending_review','requested','under_review','processing' => '#92400e',
    'failed','rejected','cancelled','suspended' => '#991b1b',
    default => '#374151',
};
@endphp
<span style="display:inline-block;padding:2px 10px;border-radius:999px;font-size:12px;background:{{ $color }}22;color:{{ $color }};">{{ str_replace('_', ' ', $status) }}</span>
