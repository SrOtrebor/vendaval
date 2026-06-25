import React from 'react';
import './Paks.css';
import { html } from './PaksContent';

export default function Paks() {
  return (
    <div className="figma-root-wrapper" dangerouslySetInnerHTML={{ __html: html }} />
  );
}
