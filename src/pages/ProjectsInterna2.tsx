import React from 'react';
import './ProjectsInterna2.css';
import { html } from './ProjectsInterna2Content';

export default function ProjectsInterna2() {
  return (
    <div className="figma-root-wrapper" dangerouslySetInnerHTML={{ __html: html }} />
  );
}
