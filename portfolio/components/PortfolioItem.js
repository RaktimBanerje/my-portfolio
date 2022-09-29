import React from 'react'

const PortfolioItem = ({ index, title, description, image, category, link, subTitle, images }) => {
  return (
    <>
        <div className='portfolio-item-container shadow rounded p-1' data-bs-toggle="modal" data-bs-target={`#portfolioItemModal-${index}`}>
            <div className='portfolio-item' style={{background: `url(/img/portfolio/${image})`, backgroundSize: "cover", width: "100%", height: "240px"}}>
            </div>
            <div className="row mt-3 mb-1">
                <h5 className='text-center'>{title}</h5>
            </div>
        </div>
        <div className="modal fadeIn" id={`portfolioItemModal-${index}`}>
            <div className="modal-dialog modal-lg modal-dialog-scrollable">
                <div className="modal-content">

                <div className="modal-header">
                    <h4 className="modal-title">{title}</h4>
                    <button type="button" className="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div className="modal-body">
                    <div id={`carouselExampleIndicators-${index}`} className="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div className="carousel-indicators">
                            {images.map((image, index) => (
                                <button type="button" data-bs-target={`#carouselExampleIndicators-${index}`} data-bs-slide-to={index} className={`${index == 0 ? "active" : ""}`} aria-current="true" aria-label={`Slide ${index + 1}`} key={index}></button>
                            ))}
                        </div>
                        <div className="carousel-inner">
                            {images.map((image, index) => (
                                <div className={`carousel-item ${index == 0 ? "active" : ""}`} key={index}>
                                    <img src={`/img/portfolio/${image}`} className="d-block w-100" />
                                </div>
                            ))}
                        </div>
                        <button className="carousel-control-prev" type="button" data-bs-target={`#carouselExampleIndicators-${index}`} data-bs-slide="prev">
                            <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span className="visually-hidden">Previous</span>
                        </button>
                        <button className="carousel-control-next" type="button" data-bs-target={`#carouselExampleIndicators-${index}`} data-bs-slide="next">
                            <span className="carousel-control-next-icon" aria-hidden="true"></span>
                            <span className="visually-hidden">Next</span>
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
                    <div className="row">
                        <p>{description}</p>
                    </div>
                </div>
                <div className="modal-footer">
                    <button type="button" className="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>
    </> 
  )
}

export default PortfolioItem