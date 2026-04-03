import React from 'react';
import { useParams } from 'react-router-dom';

export function ArtworkDetailPage() {
  const { slug } = useParams();

  return (
    <main>
      <h1>{slug}</h1>
      <p>Detail karya, medium, dimensi, harga, dan CTA add to cart / buy now.</p>
    </main>
  );
}
