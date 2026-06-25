import React from 'react';
import './Home.css';
import { html } from './HomeContent';

export default function Home() {
  return (
    <div className="figma-root-wrapper" dangerouslySetInnerHTML={{ __html: html }} />
  );
}
