import React from 'react';
import './ElTaller.css';
import { html } from './ElTallerContent';

export default function ElTaller() {
  return (
    <div className="figma-root-wrapper" dangerouslySetInnerHTML={{ __html: html }} />
  );
}
