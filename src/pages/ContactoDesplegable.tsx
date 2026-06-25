import React from 'react';
import './ContactoDesplegable.css';
import { html } from './ContactoDesplegableContent';

export default function ContactoDesplegable() {
  return (
    <div className="figma-root-wrapper" dangerouslySetInnerHTML={{ __html: html }} />
  );
}
