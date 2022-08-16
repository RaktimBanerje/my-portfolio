<<<<<<< HEAD
import categories from "../data/categories.js"
import skills from "../data/skills.js"
import portfolios from "../data/portfolios.js"
import articles from "../data/articles.js"

=======
>>>>>>> 730e11681474db7f672081965333ef2dabe5baf4
import React from 'react'
import Head from "next/head"
import Script from "next/script"
import Header from '../components/Header'
import Banner from '../components/Banner'
import Process from '../components/Process'
import About from '../components/About'
import Portfolio from '../components/Portfolio'
import Skill from '../components/Skill'
import Service from '../components/Service'
import Blog from '../components/Blog'
import Contact from '../components/Contact'
import Footer from '../components/Footer'

import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

<<<<<<< HEAD
const Index = ({ categories, skills, portfolios, articles }) => {
=======
const Index = ({ categories, skills, portfolios, articles, baseUrl }) => {
>>>>>>> 730e11681474db7f672081965333ef2dabe5baf4
    
    const toastId = React.useRef(null)
    
    return (
        <React.Fragment>
            <Head>
                <meta charset="utf-8" />
                <meta name="description" content="Name of your web site" />
                <meta name="author" content="Marketify" />
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
                <title>Raktim | Portfolio</title>

                <link
                    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
                    rel="stylesheet" />
                <link
                    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
                    rel="stylesheet" />
                <link rel="stylesheet" type="text/css" href="/css/plugins.css" />
                <link rel="stylesheet" type="text/css" href="/css/dark.css" />
                <link rel="stylesheet" type="text/css" href="/css/style.css" />
            </Head>

            <Script src="/js/jquery.js" strategy="beforeInteractive" />
            <Script src="/js/init.js" strategy="afterInteractive" />
            <Script src="/js/plugins.js" strategy="beforeInteractive" />

            {/* <PreLoader /> */}
                
            <div className="dizme_tm_all_wrap" data-magic-cursor="show">
                <Header />
                <Banner />
                <Process />
                <About />
<<<<<<< HEAD
                <Portfolio portfolios={portfolios} />
                <Skill categories={categories} skills={skills} />
                <Service />
                {/* <Blog articles={articles} /> */}
=======
                <Portfolio portfolios={portfolios} baseUrl={baseUrl} />
                <Skill categories={categories} skills={skills} baseUrl={baseUrl} />
                <Service />
                <Blog articles={articles} baseUrl={baseUrl} />
>>>>>>> 730e11681474db7f672081965333ef2dabe5baf4
                <Contact toastId={toastId} />
                <Footer />

                <div className="mouse-cursor cursor-outer"></div>
                <div className="mouse-cursor cursor-inner"></div>

                <div className="progressbar">
                    <a href="#"><span className="text">To Top</span></a>
                    <span className="line"></span>
                </div>

                <ToastContainer position="top-right" ref={toastId} />
            </div>
        </React.Fragment>
    )
}

export async function getStaticProps() {

<<<<<<< HEAD
=======
    const baseUrl = "https://bluekeyboardsoftware.com/raktim/"
    
    const categoryResponse = await fetch(`${baseUrl}api/category`)
    const categories = await categoryResponse.json()    
    
    const skillResponse = await fetch(`${baseUrl}api/skill`)
    const skills = await skillResponse.json()

    const portfolioResponse = await fetch(`${baseUrl}api/portfolio`)
    const portfolios = await portfolioResponse.json()

    const articleResponse = await fetch(`${baseUrl}api/blog`)
    const articles = await articleResponse.json()

>>>>>>> 730e11681474db7f672081965333ef2dabe5baf4
    return {
        props: {
            categories,
            skills,
            portfolios,
            articles,
<<<<<<< HEAD
=======
            baseUrl
>>>>>>> 730e11681474db7f672081965333ef2dabe5baf4
        },
        revalidate: 10
    }
}

export default Index