import React from 'react'

const MenuItem = () => {
    return (
        <ul className="anchor_nav">
            <li className="current"><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#skill">Skill</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
            <li className="download_cv"><a href="/img/cv/1.jpg" download><span>Download CV</span></a></li>
        </ul>
    )
}

export default MenuItem