import categories from "../data/categories.js"
import skills from "../data/skills.js"
import portfolios from "../data/portfolios.js"
import articles from "../data/articles.js"

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

const Index = ({ categories, skills, portfolios, articles }) => {
    
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
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
                <link rel="stylesheet" type="text/css" href="/css/plugins.css" />
                <link rel="stylesheet" type="text/css" href="/css/dark.css" />
                <link rel="stylesheet" type="text/css" href="/css/style.css" />
            </Head>

            <Script src="/js/jquery.js" strategy="beforeInteractive" />
            <Script src="/js/init.js" strategy="afterInteractive" />
            <Script src="/js/plugins.js" strategy="beforeInteractive" />
            <Script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" strategy="beforeInteractive" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" />
            {/* <PreLoader /> */}
                
            <div className="dizme_tm_all_wrap" data-magic-cursor="show">
                <Header />
                <Banner />
                <Process />
                <About />
                <Portfolio portfolios={portfolios} />
                <Skill categories={categories} skills={skills} />
                <Service />
                {/* <Blog articles={articles} /> */}
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

    return {
        props: {
            categories,
            skills,
            portfolios,
            articles,
        },
    }
}

export default Index