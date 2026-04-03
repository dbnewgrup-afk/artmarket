import React from 'react';

export function DashboardStatCard({ label, value }: { label: string; value: string }) {
  return (
    <div style={{ border: '1px solid #e5e7eb', borderRadius: 12, padding: 12, background: '#fff' }}>
      <div style={{ color: '#6b7280' }}>{label}</div>
      <div style={{ fontSize: 24 }}>{value}</div>
    </div>
  );
}
