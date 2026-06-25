import React from 'react';
import './Formacion.css';
import { html } from './FormacionContent';

export default function Formacion() {
  return (
    <div className="figma-root-wrapper" dangerouslySetInnerHTML={{ __html: html }} />
  );
}
