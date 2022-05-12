import React from 'react'



const Service = () => {
    return (
        <div className="dizme_tm_section" id="service">
            <div className="dizme_tm_services">
                <div className="container">
                    <div className="dizme_tm_main_title" data-align="center">
                        <span>Services</span>
                        <h3>What I Do for Clients</h3>
                    </div>
                    <div className="service_list">
                        <ul>
                            <li className="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div className="list_inner tilt-effect">
                                    <span className="icon">
                                        <img  className="svg" src="/img/svg/service/web.svg" alt="" />
                                        <img  className="back" src="/img/brushes/service/4.png" alt="" />
                                    </span>
                                    <div className="title">
                                        <h3>Website Design and Development</h3>
                                    </div>
                                    <div className="text">
                                        <p>I can build any website for my client which can be anything from a personal blog to a full-fledged E-commerce site.</p>
                                    </div>
                                </div>
                            </li>
                            <li className="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div className="list_inner tilt-effect">
                                    <span className="icon">
                                        <img  className="svg" src="/img/svg/service/physics.svg" alt="" />
                                        <img  className="back" src="/img/brushes/service/2.png" alt="" />
                                    </span>
                                    <div className="title">
                                        <h3>Software Development</h3>
                                    </div>
                                    <div className="text">
                                        <p>I can build software like E-commerce admin panel, Inventory Management System, etc.</p>
                                    </div>
                                </div>
                            </li>
                            <li className="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div className="list_inner tilt-effect">
                                    <span className="icon">
                                        <img  className="svg" src="/img/svg/service/contact.svg" alt="" />
                                        <img  className="back" src="/img/brushes/service/3.png" alt="" />
                                    </span>
                                    <div className="title">
                                        <h3>App Development</h3>
                                    </div>
                                    <div className="text">
                                        <p>I can make mobile apps for my clients which are high performance, clear UI with awesome UX.</p>
                                    </div>
                                </div>
                            </li>
                            <li className="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div className="list_inner tilt-effect">
                                    <span className="icon">
                                        <img  className="svg" src="/img/svg/service/anchor.svg" alt="" />
                                        <img  className="back" src="/img/brushes/service/1.png" alt="" />
                                    </span>
                                    <div className="title">
                                        <h3>API Development</h3>
                                    </div>
                                    <div className="text">
                                        <p>I can make good API that can provide end-users with a hassle-free experience. Simplicity, clarity, consistency, predictability, and discoverability are only a few of the defining characteristics that developers should strive for.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div className="brush_1 wow fadeInLeft" data-wow-duration="1s"><img   src="/img/brushes/service/5.png"
                    alt="" /></div>
                <div className="brush_2 wow zoomIn" data-wow-duration="1s"><img   src="/img/brushes/service/6.png" alt="" />
                </div>
            </div>
        </div>
    )
}

export default Service