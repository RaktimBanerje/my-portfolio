import React from 'react'

const PortfolioItem = ({ title, description, image, category, link }) => {
  return (
    <div className="inner">
        <div className="entry dizme_tm_portfolio_animation_wrap" data-category={category}>
          <a target="_blank" href={link}>
            <img src="/img/thumbs/42-56.jpg" alt="" />
            <div className="main" data-img-url={image}></div>
          </a>
        </div>
        <div style={{marginTop: "10px"}}>
            <h4 style={{textAlign: "center"}}>{title}</h4>
            <p style={{textAlign: "center"}}>{description}</p>
        </div>
        <hr />
    </div>
  )
}

export default PortfolioItem