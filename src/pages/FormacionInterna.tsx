import React from 'react';
import './FormacionInterna.css';
import { html } from './FormacionInternaContent';

export default function FormacionInterna() {
  return (
    <div className="figma-root-wrapper" dangerouslySetInnerHTML={{ __html: html }} />
  );
}
