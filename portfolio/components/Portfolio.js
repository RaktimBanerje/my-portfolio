import React from 'react'
import PortfolioItem from './PortfolioItem'

<<<<<<< HEAD
const Portfolio = ({ portfolios: PORTFOLIOS }) => {
=======
const Portfolio = ({ portfolios: PORTFOLIOS, baseUrl }) => {
>>>>>>> 730e11681474db7f672081965333ef2dabe5baf4

    const [portfolios, setPortfolios] = React.useState([])

    React.useEffect(() => {
        Array.isArray(PORTFOLIOS) && PORTFOLIOS.length > 0 && setPortfolios(PORTFOLIOS)
    }, [portfolios])

    return (
        <div className="dizme_tm_section" id="portfolio">
            <div className="dizme_tm_portfolio">
                <div className="container portfolio-container">
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
<<<<<<< HEAD
                                    <PortfolioItem {...item} />
=======
                                    <PortfolioItem {...item} baseUrl={baseUrl} />
>>>>>>> 730e11681474db7f672081965333ef2dabe5baf4
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