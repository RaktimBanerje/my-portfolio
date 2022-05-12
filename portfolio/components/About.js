import React from 'react'

const About = () => {
    return (
        <div className="dizme_tm_section" id="about">
            <div className="dizme_tm_about">
                <div className="container">
                    <div className="wrapper">
                        <div className="left">
                            <div className="image">
                                <img placeholder="blur" src="/img/about/1.jpg" alt="" />
                                {/* <div className="numbers year">
                                    <div className="wrapper">
                                        <h3><span className="dizme_tm_counter" data-from="0" data-to="18"
                                            data-speed="2000">0</span></h3>
                                        <span className="name">Years of<br />Success</span>
                                    </div>
                                </div>
                                <div className="numbers project">
                                    <div className="wrapper">
                                        <h3><span className="dizme_tm_counter" data-from="0" data-to="9"
                                            data-speed="2000">0</span>K</h3>
                                        <span className="name">Total<br />Projects</span>
                                    </div>
                                </div> */}
                            </div>
                        </div>
                        <div className="right">
                            <div className="title wow fadeInUp" data-wow-duration="1s">
                                <span>I'm a Developer</span>
                                <h3>I Can Develop Anything You Want</h3>
                            </div>
                            <div className="text wow fadeInUp" data-wow-duration="1s">
                                <p>Hello there! I'm a full stack developer, and I'm very passionate and dedicated to my work.
                                    I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the
                                    developing phase, from discussion to deployment.</p>
                            </div>
                            <div className="dizme_tm_button wow fadeInUp" data-wow-duration="1s">
                                <a className="anchor" href="#contact"><span>Hire Me</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="brush_1 wow fadeInLeft" data-wow-duration="1s"><img  src="/img/brushes/about/1.png" alt="" />
                </div>
                <div className="brush_2 wow fadeInRight" data-wow-duration="1s"><img  src="/img/brushes/about/2.png" alt="" />
                </div>
            </div>
        </div>

    )
}

export default About