import React from 'react';
import { Link, Route, Routes } from 'react-router-dom';
import { HomePage } from '../pages/HomePage';
import { ArtworksPage } from '../pages/ArtworksPage';
import { ArtworkDetailPage } from '../pages/ArtworkDetailPage';
import { CheckoutPage } from '../pages/CheckoutPage';

export function StorefrontApp() {
  return (
    <div style={{ maxWidth: 1200, margin: '0 auto', padding: 24 }}>
      <header style={{ display: 'flex', gap: 12, marginBottom: 24 }}>
        <strong>ArtMarket</strong>
        <Link to="/">Home</Link>
        <Link to="/artworks">Artworks</Link>
        <Link to="/checkout">Checkout</Link>
      </header>

      <Routes>
        <Route path="/" element={<HomePage />} />
        <Route path="/artworks" element={<ArtworksPage />} />
        <Route path="/artworks/:slug" element={<ArtworkDetailPage />} />
        <Route path="/checkout" element={<CheckoutPage />} />
      </Routes>
    </div>
  );
}
