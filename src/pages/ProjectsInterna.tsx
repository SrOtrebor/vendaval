import React from 'react';
import './ProjectsInterna.css';
import { html } from './ProjectsInternaContent';

export default function ProjectsInterna() {
  return (
    <div className="figma-root-wrapper" dangerouslySetInnerHTML={{ __html: html }} />
  );
}
