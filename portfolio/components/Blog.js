import React from 'react'
import BlogItem from './BlogItem'

const Blog = ({ articles, baseUrl }) => {
    return (
        <div className="dizme_tm_section" id="blog" style={{paddingTop: 0}}>
            <div className="dizme_tm_news" style={{paddingTop: 0}}>
                <div className="container">
                    <div className="dizme_tm_main_title" data-align="center">
                        <span>From My Blog</span>
                        <h3>Our Recent Updates, Blog, Tips, Tricks &amp; More</h3>
                    </div>
                    <div className="news_list">
                        <ul>
                            {articles.map((article, index) => (
                                <li key={index} className="wow fadeInUp" data-wow-duration="1s" data-wow-delay={`0.${index * 2}s`}>
                                    <BlogItem {...article} baseUrl={baseUrl} />
                                </li>
                            ))}
                        </ul>
                    </div>
                </div>
                <div className="brush_1 wow zoomIn" data-wow-duration="1s"><img  src="/img/brushes/news/1.png" alt="" /></div>
                <div className="brush_2 wow zoomIn" data-wow-duration="1s"><img  src="/img/brushes/news/2.png" alt="" /></div>
            </div>
        </div>
    )
}

export default Blog