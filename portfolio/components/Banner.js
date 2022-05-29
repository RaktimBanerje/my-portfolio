import React from 'react'

import Image from "next/image"

import avatar from "../public/img/slider/avatar.webp"

const Banner = () => {
    return (
        <div className="dizme_tm_section" id="home">
            <div className="dizme_tm_hero">
                <div className="background" data-img-url="/img/slider/1.jpg"></div>
                <div className="container">
                    <div className="content">
                        <div className="details">
                            <div className="hello">
                                <h3 className="orangeText">Hello, I'm</h3>
                            </div>
                            <div className="name">
                                <h3>Raktim Banerjee</h3>
                            </div>
                            <div className="job">
                                <p>A <span className="greenText">Full Stack Developer</span> From <span className="purpleText">India</span></p>
                            </div>
                            <div className="text">
                                <p>My misson is to fulfil your demand and vision is to see you happy.</p>
                            </div>
                            <div className="button">
                                <div className="dizme_tm_button">
                                    <a className="anchor" href="#about"><span>About Me</span></a>
                                </div>
                                {/* <div className="social">
                                    <ul>
                                        <li><a href="#"><i className="icon-facebook-1"></i></a></li>
                                        <li><a href="#"><i className="icon-twitter-1"></i></a></li>
                                        <li><a href="#"><i className="icon-linkedin-1"></i></a></li>
                                        <li><a href="#"><i className="icon-behance"></i></a></li>
                                    </ul>
                                </div> */}
                            </div>
                        </div>
                        <div className="avatar">
                            <div className="image">
                                <Image placeholder="blur" src={avatar} alt="" />
                                {/* <span className="skills illustrator anim_moveBottom"><img className="svg"
                                    src="/img/svg/skills/illustrator.svg" alt="" /></span>
                                <span className="skills photoshop anim_moveBottom"><img className="svg"
                                    src="/img/svg/skills/photoshop.svg" alt="" /></span>
                                <span className="skills figma anim_moveBottom"><img className="svg"
                                    src="/img/svg/skills/figma.svg" alt="" /></span> */}
                            </div>
                        </div>
                    </div>
                </div>
                <div className="dizme_tm_down">
                    <a className="anchor" href="#process">
                    </a>
                </div>
            </div>
        </div>

    )
}

export default Banner