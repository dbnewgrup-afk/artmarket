import React from 'react';
import { Link } from 'react-router-dom';

export function ArtworksPage() {
  return (
    <main>
      <h1>Browse Artworks</h1>
      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(3, 1fr)', gap: 16 }}>
        {[1, 2, 3].map((item) => (
          <article key={item} style={{ border: '1px solid #e5e7eb', padding: 12, borderRadius: 12 }}>
            <div style={{ height: 160, background: '#f3f4f6', marginBottom: 8 }} />
            <h3>Artwork {item}</h3>
            <p>Rp 1.500.000</p>
            <Link to={`/artworks/artwork-${item}`}>View detail</Link>
          </article>
        ))}
      </div>
    </main>
  );
}
