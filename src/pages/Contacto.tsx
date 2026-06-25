import React from 'react';
import './Contacto.css';
import { html } from './ContactoContent';

export default function Contacto() {
  return (
    <div className="figma-root-wrapper" dangerouslySetInnerHTML={{ __html: html }} />
  );
}
