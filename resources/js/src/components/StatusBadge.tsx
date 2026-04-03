import React from 'react';

export function StatusBadge({ status }: { status: string }) {
  return <span style={{ fontSize: 12, borderRadius: 999, padding: '2px 8px', background: '#eef2ff' }}>{status}</span>;
}
