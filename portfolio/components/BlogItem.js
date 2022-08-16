import React from 'react'



<<<<<<< HEAD
const BlogItem = ({ link, date, image, title, category_link, category }) => {
=======
const BlogItem = ({ link, date, image, title, category_link, category, baseUrl }) => {
>>>>>>> 730e11681474db7f672081965333ef2dabe5baf4
    return (
        <div className="list_inner">
            <div className="image">
                <img  src="/img/thumbs/42-29.jpg" alt="" />
<<<<<<< HEAD
                <div className="main" data-img-url={`/img/blog/${image}`}></div>
=======
                <div className="main" data-img-url={`${baseUrl}assets/blog/${image}`}></div>
>>>>>>> 730e11681474db7f672081965333ef2dabe5baf4
                <div className="date">
                    <h3>{new Date(date).getDate()}</h3>
                    <span>{new Date(date).toLocaleString('en-US', { month: 'short' })}</span>
                </div>
                <a target="_blank" className="dizme_tm_full_link" href={link} rel="noreferrer"></a>
            </div>
            <div className="details">
                <span className="category"><a target="_blank" href={category_link ? category_link : link } rel="noreferrer">{category}</a></span>
                <h3 className="title"><a target="_blank" href={link} rel="noreferrer">{title}</a></h3>
            </div>
        </div>
    )
}

export default BlogItem