import React from 'react'
import PortfolioItem from './PortfolioItem'

const Portfolio = ({ portfolios: PORTFOLIOS, baseUrl }) => {

    const [portfolios, setPortfolios] = React.useState([])

    React.useEffect(() => {
        Array.isArray(PORTFOLIOS) && PORTFOLIOS.length > 0 && setPortfolios(PORTFOLIOS)
    }, [portfolios])

    return (
        <div className="dizme_tm_section" id="portfolio">
            <div className="dizme_tm_portfolio">
                <div className="container">
                    <div className="dizme_tm_main_title" data-align="center">
                        <span>Portfolio</span>
                        <h3>My Amazing Works</h3>
                        <p>Most common methods for designing websites that work well on desktop is responsive and
                            adaptive design</p>
                    </div>
                    <div className="portfolio_filter">
                        <ul>
                            <li><a href="#" className="current" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".personal">Personal Project</a></li>
                            <li><a href="#" data-filter=".client">Client Project</a></li>
                        </ul>
                    </div>
                    <div className="dizme_tm_portfolio_titles"></div>
                    <div className="portfolio_list wow fadeInUp" data-wow-duration="1s">
                        <ul className="gallery_zoom grid">
                            {portfolios.map((item, index) => (
                                <li key={index} className={`${item.category} grid-item`}>
                                    <PortfolioItem {...item} baseUrl={baseUrl} />
                                </li>
                            ))}
                        </ul>
                    </div>
                </div>
                <div className="brush_1 wow zoomIn" data-wow-duration="1s"><img  src="/img/brushes/portfolio/1.png" alt="" />
                </div>
                <div className="brush_2 wow fadeInRight" data-wow-duration="1s"><img  src="/img/brushes/portfolio/2.png"
                    alt="" /></div>
            </div>
        </div>
    )
}

export default Portfolio