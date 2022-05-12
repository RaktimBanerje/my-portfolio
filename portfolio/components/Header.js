import React from 'react'
import MenuItem from './MenuItem'

const Header = () => {
  return (
    <React.Fragment>
        <div className="dizme_tm_mobile_menu">
            <div className="mobile_menu_inner">
                <div className="mobile_in">
                    <div className="logo">
                        {/* <a href="#"><img src="/img/logo/logo.png" alt="" /></a> */}
                    </div>
                    <div className="trigger">
                        <div className="hamburger hamburger--slider">
                            <div className="hamburger-box">
                                <div className="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="dropdown">
                <div className="dropdown_inner">
                    <MenuItem />
                </div>
            </div>
        </div>


        <div className="dizme_tm_header">
            <div className="container">
                <div className="inner">
                    <div className="logo">
                        {/* <a href="#"><img src="/img/logo/logo.png" alt="" /></a> */}
                    </div>
                    <div className="menu">
                        <MenuItem />
                    </div>
                </div>
            </div>
        </div>
    </React.Fragment>
  )
}

export default Header