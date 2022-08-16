import React from 'react'
import SkillItem from './SkillItem'



const Skill = ({ categories: myCategories, skills: mySkills }) => {
 
    const [categories, setCategories] = React.useState([])
    const [skills, setSkills] = React.useState([])

    React.useEffect(()=> {

        Array.isArray(myCategories) && myCategories.length > 0 && setCategories(myCategories)
        Array.isArray(mySkills) && mySkills.length > 0 && setSkills(mySkills)
    
    }, [myCategories, mySkills])

    return (
        <div className="dizme_tm_section" id="skill">
            <div className="dizme_tm_portfolio" style={{paddingTop: 0}}>
                <div className="container">
                    <div className="dizme_tm_main_title" data-align="center">
                        <span>Skill</span>
                        <h3>My Skills</h3>
                        <p>I'm very enthused to learn new skills and make them more productive for you than ever.</p>
                    </div>
                    <div className="portfolio_filter">
                        <ul>
                            <li><a href="#" className="current" data-filter="*">All</a></li>
                            {Array.from(categories).map((category, index) => <li key={index}><a href="#" data-filter={`.${category.value}`}>{category.label}</a></li>)}
                        </ul>
                    </div>
                    <div className="dizme_tm_portfolio_titles"></div>
                    <div className="portfolio_list dodo_progress wow fadeInUp" data-wow-duration="1s">
                        <ul className="gallery_zoom grid">
                            {skills.map((skill, index) => {
                                
                                const category = skill.categories.map(({value})=> value)
                                
                                return (
                                    <li key={index} className={`${category.join(" ")} grid-item skill`}>
                                        <SkillItem {...skill} />
                                    </li>
                                )
                            })}
                        </ul>
                    </div>
                </div>
                <div className="brush_1 wow zoomIn" data-wow-duration="1s"><img   src="/img/brushes/portfolio/1.png" alt="" />
                </div>
                <div className="brush_2 wow fadeInRight" data-wow-duration="1s">
                    {/* <img src="/img/brushes/portfolio/2.png" alt="" /> */}
                </div>
            </div>
        </div>
    )
}

export default Skill