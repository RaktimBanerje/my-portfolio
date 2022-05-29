import React from 'react'
import { toast } from 'react-toastify'



const Contact = ({ toastId }) => {

    const [data, setData] = React.useState({name: "", email: "", phone: "", subject: "", message: ""})  
    
    const nameRef = React.useRef(null)
    const emailRef = React.useRef(null)
    const phoneRef = React.useRef(null)
    const subjectRef = React.useRef(null)
    const messageRef = React.useRef(null)

    const changeHandler = (event) => {
        setData((values)=> ({...values, [event.target.name]: event.target.value}))
    } 

    const submitHandler = async (event) => {
        event.preventDefault()

        const response = await toast.promise(
            fetch("https://bluekeyboardsoftware.com/raktim/api/message", {
                headers: {
                    "Content-Type": "application/json"
                },
                method: "POST",
                body: JSON.stringify(data)
            }),
            {
              pending: 'Sending',
              success: 'Send',
              error: 'Oop! something went wrong'
            }
        );

        if(response.status==200) {
            nameRef.current.value = ""
            emailRef.current.value = ""
            phoneRef.current.value = ""
            subjectRef.current.value = ""
            messageRef.current.value = ""
        }
    }

    return (
        <div className="dizme_tm_section" id="contact">
            <div className="dizme_tm_contact" style={{paddingTop: 0}}>
                <div className="container">
                    <div className="dizme_tm_main_title" data-align="center">
                        <span>Contact Me</span>
                        <h3>I Want To Hear From You</h3>
                    </div>
                    <div className="contact_inner">
                        <div className="left wow fadeInLeft" data-wow-duration="1s">
                            <ul>
                                <li>
                                    <div className="list_inner">
                                        <div className="icon orangeBackground">
                                            <i className="icon-location orangeText"></i>
                                        </div>
                                        <div className="short">
                                            <h3>Address</h3>
                                            <span>29E/1, </span> <br />
                                            <span>Rammohan Mukherjee Lane</span> <br /> 
                                            <span>Howrah, Kolkata 711102</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div className="list_inner">
                                        <div className="icon greenBackground">
                                            <i className="icon-mail-1 greenText"></i>
                                        </div>
                                        <div className="short">
                                            <h3>Email</h3>
                                            <span><a href="mailto:braktim99@gmail.com">braktim99@gmail.com</a></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div className="list_inner">
                                        <div className="icon purpleBackground">
                                            <i className="icon-phone purpleText"></i>
                                        </div>
                                        <div className="short">
                                            <h3>Phone</h3>
                                            <span><a href="tel:+919836739907">+91-98367 39907</a></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div className="right wow fadeInRight" data-wow-duration="1s">
                            <div className="fields">
                                <form className="contact_form" id="contact_form" autoComplete="off" onSubmit={(event) => submitHandler(event)}>
                                    <div className="returnmessage"
                                        data-success="Your message has been received, We will contact you soon."></div>
                                    <div className="empty_notice"><span>Please Fill Required Fields</span></div>
                                    <div className="input_list">
                                        <ul>
                                            <li><input name="name" type="text" placeholder="Your Name" onChange={(event) => changeHandler(event)} ref={nameRef} /></li>
                                            <li><input name="email" type="text" placeholder="Your Email" onChange={(event) => changeHandler(event)} ref={emailRef} /></li>
                                            <li><input name="phone" type="number" placeholder="Your Phone" onChange={(event) => changeHandler(event)} ref={phoneRef} /></li>
                                            <li><input name="subject" type="text" placeholder="Subject" onChange={(event) => changeHandler(event)} ref={subjectRef} /></li>
                                        </ul>
                                    </div>
                                    <div className="message_area">
                                        <textarea name="message" placeholder="Write your message here" onChange={(event) => changeHandler(event)} ref={messageRef}></textarea>
                                    </div>
                                    <div className="dizme_tm_button">
                                        <button id="send_message" style={{cursor: "pointer"}}><span>Submit Now</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div className="brush_2 wow fadeInRight" data-wow-duration="1s"><img  src="/img/brushes/contact/2.png"
                            alt="" /></div>
                    </div>
                    <div className="dizme_tm_map wow fadeInUp" data-wow-duration="1s">
                        <div className="mapouter">
                            
                            <div className="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.232999305685!2d88.31944551492494!3d22.570387285184022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0278299da89eed%3A0xce5993e7eef1af85!2s29e%2C%201%2C%20Rammohan%20Mukherjee%20Ln%2C%20Shibtala%2C%20Naora%2C%20Shibpur%2C%20Howrah%2C%20West%20Bengal%20711102!5e0!3m2!1sen!2sin!4v1651338953070!5m2!1sen!2sin" width="100%" height="375" style={{border: 0}} allowFullScreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><a
                                    href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon"></a><br />
                            </div>
                        </div>

                    </div>
                </div>
                <div className="brush_1 wow fadeInLeft" data-wow-duration="1s"><img  src="/img/brushes/contact/1.png"
                    alt="" /></div>
            </div>
        </div>

    )
}

export default Contact