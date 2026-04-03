import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter } from 'react-router-dom';
import { StorefrontApp } from './app/StorefrontApp';

const mount = document.getElementById('app');

if (mount) {
  ReactDOM.createRoot(mount).render(
    <React.StrictMode>
      <BrowserRouter>
        <StorefrontApp />
      </BrowserRouter>
    </React.StrictMode>,
  );
}
