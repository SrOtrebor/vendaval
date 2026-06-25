import React from 'react';
import './Nosotras.css';
import { html } from './NosotrasContent';

export default function Nosotras() {
  return (
    <div className="figma-root-wrapper" dangerouslySetInnerHTML={{ __html: html }} />
  );
}
