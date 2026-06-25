import React from 'react';
import './Tienda.css';
import { html } from './TiendaContent';

export default function Tienda() {
  return (
    <div className="figma-root-wrapper" dangerouslySetInnerHTML={{ __html: html }} />
  );
}
