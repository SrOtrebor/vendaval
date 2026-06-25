import React from 'react';
import './TiendaInterna.css';
import { html } from './TiendaInternaContent';

export default function TiendaInterna() {
  return (
    <div className="figma-root-wrapper" dangerouslySetInnerHTML={{ __html: html }} />
  );
}
