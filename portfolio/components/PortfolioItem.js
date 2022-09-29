import React from 'react'
import portfolioItemDetails from './portfolioItemDetails'

const PortfolioItem = ({ index, title, description, image, category, link, subTitle, images }) => {
  return (
    <>
        <div className='portfolio-item-container shadow rounded p-1' data-bs-toggle="modal" data-bs-target={`#portfolioItemModal-${index}`}>
            <div className='portfolio-item' style={{background: `url(/img/portfolio/${image})`, backgroundSize: "cover", width: "100%", height: "240px"}}>
            </div>
            <div class="row mt-3 mb-1">
                <h5 className='text-center'>{title}</h5>
            </div>
        </div>
        <div class="modal fadeIn" id={`portfolioItemModal-${index}`}>
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">{title}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div id={`carouselExampleIndicators-${index}`} class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            {images.map((image, index) => (
                                <button type="button" data-bs-target={`#carouselExampleIndicators-${index}`} data-bs-slide-to={index} class={`${index == 0 ? "active" : ""}`} aria-current="true" aria-label={`Slide ${index + 1}`}></button>
                            ))}
                        </div>
                        <div class="carousel-inner">
                            {images.map((image, index) => (
                                <div class={`carousel-item ${index == 0 ? "active" : ""}`} key={index}>
                                    <img src={`/img/portfolio/${image}`} class="d-block w-100" />
                                </div>
                            ))}
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target={`#carouselExampleIndicators-${index}`} data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target={`#carouselExampleIndicators-${index}`} data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div className="textbox mt-4" style={{width: "100%"}}>
                        {
                            link && (
                            <div className="button">
                                <div className="dizme_tm_button" style={{textAlign: "center"}}>
                                    <a className="anchor" target="_blank" href={link} rel="noreferrer"><span>Live link</span></a>
                                    <h5>{link}</h5>
                                </div>
                            </div>
                            )
                        }
                    </div>
                    <div class="row">
                        <p>{description}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>
    </> 
  )
}

export default PortfolioItem