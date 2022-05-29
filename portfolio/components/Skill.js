import React from 'react'
import SkillItem from './SkillItem'



const Skill = ({ categories: myCategories, skills: mySkills }) => {
 
    const [categories, setCategories] = React.useState(
        [
            {
                "label": "Front-end",
                "value": "frontend"
            },
            {
                "label": "Back-end",
                "value": "backend"
            },
            {
                "label": "Database",
                "value": "database"
            },
            {
                "label": "Mobile Platform",
                "value": "mobile"
            },
            {
                "label": "Cross Platform",
                "value": "cross"
            },
            {
                "label": "Hosting",
                "value": "hosting"
            },
            {
                "label": "Payment Gateway",
                "value": "payment"
            }
        ]
    )
    
    const [skills, setSkills] = React.useState(
        [
            {
                "id": "7",
                "name": "HTML5",
                "category": "7",
                "number": "100",
                "categories": [
                    {
                        "id": "7",
                        "label": "Front-end",
                        "value": "frontend"
                    }
                ]
            },
            {
                "id": "8",
                "name": "CSS3",
                "category": "7",
                "number": "95",
                "categories": [
                    {
                        "id": "7",
                        "label": "Front-end",
                        "value": "frontend"
                    }
                ]
            },
            {
                "id": "9",
                "name": "JavaScript (ES2015)",
                "category": "7",
                "number": "98",
                "categories": [
                    {
                        "id": "7",
                        "label": "Front-end",
                        "value": "frontend"
                    }
                ]
            },
            {
                "id": "10",
                "name": "Bootstrap",
                "category": "7",
                "number": "90",
                "categories": [
                    {
                        "id": "7",
                        "label": "Front-end",
                        "value": "frontend"
                    }
                ]
            },
            {
                "id": "11",
                "name": "WordPress (Theme Development)",
                "category": "7",
                "number": "80",
                "categories": [
                    {
                        "id": "7",
                        "label": "Front-end",
                        "value": "frontend"
                    }
                ]
            },
            {
                "id": "12",
                "name": "React JS",
                "category": "7",
                "number": "95",
                "categories": [
                    {
                        "id": "7",
                        "label": "Front-end",
                        "value": "frontend"
                    }
                ]
            },
            {
                "id": "13",
                "name": "Angular",
                "category": "7",
                "number": "40",
                "categories": [
                    {
                        "id": "7",
                        "label": "Front-end",
                        "value": "frontend"
                    }
                ]
            },
            {
                "id": "14",
                "name": "Next JS",
                "category": "7",
                "number": "99",
                "categories": [
                    {
                        "id": "7",
                        "label": "Front-end",
                        "value": "frontend"
                    }
                ]
            },
            {
                "id": "15",
                "name": "PHP",
                "category": "8",
                "number": "95",
                "categories": [
                    {
                        "id": "8",
                        "label": "Back-end",
                        "value": "backend"
                    }
                ]
            },
            {
                "id": "16",
                "name": "CodeIgniter",
                "category": "8",
                "number": "100",
                "categories": [
                    {
                        "id": "8",
                        "label": "Back-end",
                        "value": "backend"
                    }
                ]
            },
            {
                "id": "17",
                "name": "Laravel",
                "category": "8",
                "number": "100",
                "categories": [
                    {
                        "id": "8",
                        "label": "Back-end",
                        "value": "backend"
                    }
                ]
            },
            {
                "id": "18",
                "name": "Node JS",
                "category": "8",
                "number": "84",
                "categories": [
                    {
                        "id": "8",
                        "label": "Back-end",
                        "value": "backend"
                    }
                ]
            },
            {
                "id": "19",
                "name": "MySQL",
                "category": "9",
                "number": "80",
                "categories": [
                    {
                        "id": "9",
                        "label": "Database",
                        "value": "database"
                    }
                ]
            },
            {
                "id": "20",
                "name": "SQLite",
                "category": "9",
                "number": "80",
                "categories": [
                    {
                        "id": "9",
                        "label": "Database",
                        "value": "database"
                    }
                ]
            },
            {
                "id": "21",
                "name": "MongoDB",
                "category": "9",
                "number": "40",
                "categories": [
                    {
                        "id": "9",
                        "label": "Database",
                        "value": "database"
                    }
                ]
            },
            {
                "id": "22",
                "name": "React Native",
                "category": "10,11",
                "number": "92",
                "categories": [
                    {
                        "id": "10",
                        "label": "Mobile Platform",
                        "value": "mobile"
                    },
                    {
                        "id": "11",
                        "label": "Cross Platform",
                        "value": "cross"
                    }
                ]
            },
            {
                "id": "23",
                "name": "PWA",
                "category": "11",
                "number": "88",
                "categories": [
                    {
                        "id": "11",
                        "label": "Cross Platform",
                        "value": "cross"
                    }
                ]
            },
            {
                "id": "24",
                "name": "CPanel",
                "category": "12",
                "number": "90",
                "categories": [
                    {
                        "id": "12",
                        "label": "Hosting",
                        "value": "hosting"
                    }
                ]
            },
            {
                "id": "25",
                "name": "Vercel",
                "category": "12",
                "number": "50",
                "categories": [
                    {
                        "id": "12",
                        "label": "Hosting",
                        "value": "hosting"
                    }
                ]
            },
            {
                "id": "26",
                "name": "Heroku",
                "category": "12",
                "number": "50",
                "categories": [
                    {
                        "id": "12",
                        "label": "Hosting",
                        "value": "hosting"
                    }
                ]
            },
            {
                "id": "27",
                "name": "Razorpay",
                "category": "13",
                "number": "80",
                "categories": [
                    {
                        "id": "13",
                        "label": "Payment Gateway",
                        "value": "payment"
                    }
                ]
            },
            {
                "id": "29",
                "name": "Stripe",
                "category": "13",
                "number": "74",
                "categories": [
                    {
                        "id": "13",
                        "label": "Payment Gateway",
                        "value": "payment"
                    }
                ]
            }
        ]
    )

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