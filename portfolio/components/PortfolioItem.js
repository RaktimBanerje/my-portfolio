import React from 'react'

const PortfolioItem = ({ title, description, image, category, link, subTitle, images, baseUrl }) => {
  
  return (
    <div className="inner">
      <div className="entry dizme_tm_portfolio_animation_wrap" data-title={title} data-category={subTitle} >
          <a className="portfolio_popup" href={link}>
              <img src="img/thumbs/42-34.jpg" alt="" />
              <div className="main" data-img-url={`${baseUrl}assets/portfolio/${image}`}></div>
          </a>
      </div>
    <div className="mobile_title">
        <h3>{title}</h3>
        <span>{description}</span>
    </div>
    <div className="hidden_content">
        <div className="popup_details">
            <div className="main_details">
                <div className="textbox" style={{width: "100%"}}>
                  {
                    link && (
                      <div className="button">
                        <div className="dizme_tm_button" style={{textAlign: "center"}}>
                          <a className="anchor" target="_blank" href={link} rel="noreferrer"><span>Live link</span></a>
                        </div>
                      </div>
                    )
                  }
                </div>
            </div>
            <div className="additional_images">
                <ul>
                  {Array.isArray(images) && images.map((imageData, index) => (
                      <li key={index}>
                          <div className="list_inner">
                              <div className="my_image">
                                  <img src="img/thumbs/4-2.jpg" alt="" />
                                  <div className="main" data-img-url={`${baseUrl}assets/portfolio/${imageData.image}`}>
                                  </div>
                              </div>
                          </div>
                      </li>
                  ))}
                </ul>
            </div>
        </div>
    </div>
</div>
  )
}

export default PortfolioItem