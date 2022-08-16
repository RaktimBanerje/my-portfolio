import React from 'react'
import BlogItem from './BlogItem'

<<<<<<< HEAD
const Blog = ({ articles }) => {
=======
const Blog = ({ articles, baseUrl }) => {
>>>>>>> 730e11681474db7f672081965333ef2dabe5baf4
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
<<<<<<< HEAD
                                    <BlogItem {...article} />
=======
                                    <BlogItem {...article} baseUrl={baseUrl} />
>>>>>>> 730e11681474db7f672081965333ef2dabe5baf4
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