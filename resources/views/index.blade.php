@extends('layout')

@section('content')
     <!-- Sub Header -->
 <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <a href="https://www.instagram.com/bootcoding1">
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg>
                </li>
              </a>
              <a href="">
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg>
                </li>
              </a>
             <a href="">
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
              </li>
             </a>
              <li></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="/" class="logo">
                         < BOOTCODING />
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#courses">Courses</a></li> 
                          <li><a href="/refund">Refund Policy</a></li> 
                          <li><a href="/privacy">Privacy Policy</a></li> 
                          <li><a href="/aboutus">About US</a></li> 
                          <li class="scroll-to-section"><a href="#courses">Courses</a></li> 
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Hello Students</h6>
              <h2>Welcome to BOOTCODING</h2>
              <p>Are you looking to level up your programming skills? Look no further! Your bootcoding website is your one-stop destination for mastering languages like Java, C++, and more.</p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">SHOP NOW</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>Best Education</h4>
                <p>Our goal is to provide high-quality and accessible courses for everyone, whether you are a beginner or looking to enhance your existing knowledge. We offer a wide range of courses covering various programming languages, frameworks, tools, and essential concepts in computer development.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Best Teachers</h4>
                <p>Our courses are created by industry experts with extensive experience in the field of computer development. They are designed to be easy to follow, with clear explanations, practical examples, and exercises to help you reinforce your skills.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Best Experience</h4>
                <p>Whether you want to learn the fundamentals of programming, master a specific language like Python, Java, C++, JavaScript, or specialize in areas such as web development, mobile development, databases, or artificial intelligence, our courses provide a variety of options tailored to your needs.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Best Offer</h4>
                <p>In addition to courses, we also offer supplementary resources such as tutorials, e-books, practical projects, and discussion forums where you can interact with other learners and ask questions.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Best Networking</h4>
                <p>Whether you are a student, a career changer, or an IT enthusiast,bootcoding website is here to support you in your learning journey. Join us now and start developing your computer skills effectively and rewarding.</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings " id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ">
          <div class="section-heading">
            <h2></h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>The most requested lessons in the labor market</h4>
            <ul>
              <li><a href="">Spring Boot / Java EE</a></li>
              <li><a href="">Data Analytics</a></li>
              <li><a href="">Big data / Transaction Sql</a></li>
              <li><a href="">Laravel / PhP</a></li>
              <li><a href="">Flutter</a></li>
            </ul>
            <div class="main-button-red">
              <a href="meetings.html">All Upcoming Meetings</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                 <form action="{{route('productPage')}}" method="post">
                  @csrf
                  <input type="hidden" name="valeurAjeuter" value=" Students will learn how to analyze and interpret data effectively, enabling them to make informed decisions based on data-driven insights. This skill is highly valuable in today's data-driven business landscape, where decisions are increasingly influenced by data analysis.">
                  <input type="hidden" name="price" value="43">
                  <input type="hidden" name="videos" value="30"> 
                  <input type="hidden" name="course" value="data analytics"> 
                  <input type="hidden" name="duration" value="This course consists of 30 videos, and each video contains half an hour. It should take a person 30 days to fully complete this course."> 
                  <div class="thumb">
                    <div class="price">
                      <span>$43.00</span>
                    </div>
                    <a ><img src="assets/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                  </div>
                  <div class="down-content">
                    <div class="date">
                      <h6 class="mb-3">New Course</h6>
                    </div>
                    <a ><h4>data analytics advanced course</h4></a>
                   <button type="submit" class="main-button-red btn fw-bold btn-success">Shop Now</button>
                  
                 </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item"> 
                <form action="{{route('productPage')}}" method="post">
                  @csrf
                  <input type="hidden" name="valeurAjeuter" value=" Big data has become a critical aspect of many industries, and organizations are actively seeking professionals with expertise in handling and analyzing large volumes of data. By acquiring skills in big data, students position themselves for exciting career opportunities in fields such as data engineering, data science, data analytics, and more.">
                  <input type="hidden" name="price" value="12"> 
                  <input type="hidden" name="videos" value="30"> 
                  <input type="hidden" name="course" value="big data"> 
                  <input type="hidden" name="duration" value="This course consists of 30 videos, and each video contains half an hour. It should take a person 30 days to fully complete this course."> 
                <div class="thumb">
                  <div class="price">
                    <span>$12.00</span>
                  </div>
                  <a ><img src="assets/images/meeting-02.jpg" alt="Online Teaching"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6 class="mb-3">New Course</h6>
                  </div>
                  <a ><h4>big data advanced course </h4></a>
                  <button type="submit" class="main-button-red btn fw-bold btn-success">Shop Now</button>
                </div>
               </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <form action="{{route('productPage')}}" method="post">
                  @csrf
                  <input type="hidden" name="valeurAjeuter" value=" Spring Boot simplifies the development process by providing a convention-over-configuration approach and auto-configuration capabilities. Students who complete the course gain proficiency in leveraging these features, allowing them to build applications faster and with less boilerplate code. This translates to increased productivity and shorter time to market for software projects."> 
                  <input type="hidden" name="videos" value="30">  
                  <input type="hidden" name="course" value="Spring boot"> 
                  <input type="hidden" name="duration" value="This course consists of 30 videos, and each video contains half an hour. It should take a person 30 days to fully complete this course."> 
                  <input type="hidden" name="price" value="43">
                  <div class="thumb">
                    <div class="price">
                      <span>$43.00</span>
                    </div>
                    <a ><img src="assets/images/meeting-03.jpg" alt="Higher Education"></a>
                  </div>
                  <div class="down-content">
                    <div class="date">
                      <h6 class="mb-3">New Course</h6>
                    </div>
                    <a ><h4>Spring boot advanced course</h4></a>
                    <button type="submit" class="main-button-red btn fw-bold btn-success">Shop Now</button>
                </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <form action="{{route('productPage')}}" method="post">
                  @csrf
                  <input type="hidden" name="valeurAjeuter" value=" Angular JavaScript is a popular framework for building single-page applications (SPAs). By completing the course, students gain proficiency in Angular and learn how to create dynamic and responsive web applications that deliver a seamless user experience. This skill is highly valuable as SPAs continue to gain traction in modern web development."> 
                  <input type="hidden" name="videos" value="30">  
                  <input type="hidden" name="course" value="JavaScript Angular"> 
                  <input type="hidden" name="duration" value="This course consists of 30 videos, and each video contains half an hour. It should take a person 30 days to fully complete this course."> 
                  <input type="hidden" name="price" value="32">
                  <div class="thumb">
                    <div class="price">
                      <span>$32.00</span>
                    </div>
                    <a ><img src="assets/images/meeting-04.jpg" alt="Student Training"></a>
                  </div>
                  <div class="down-content">
                    <div class="date">
                      <h6 class="mb-3">New Course</h6>
                    </div>
                    <a ><h4>JavaScript Angular advanced course</h4></a>
                    <button type="submit" class="main-button-red btn fw-bold btn-success">Shop Now</button>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>YOU CAN CONTACT US FOR MORE EXPERIENCE</h3>
                <p>You can write to us and tell us about the problems you are facing, and you will receive the answer via your email</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Contact Us Now!</a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>YOU CAN CONTACT US FOR GUIDANCE</h3>
                <p>Tell us about the studies you have received, the evidence you hold, how old you are, and your country, in order to give you the best guidance.</p>
                <div class="main-button-yellow">
                  <div class="scroll-to-section"><a href="#contact">Contact Us Now!</a></div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
                <div class="accordion-head">
                    <span>About Front-end web development</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Front-end web development is the development of the graphical user interface of a website, through the use of HTML, CSS, and JavaScript, so that users can view and interact with that website</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>About Back-end web development</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Back-end development references a client server architecture common in ecommerce. Client side tends to have a strong user interface skill and the server side a strong API skill. But they overlap.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>About Database management systems</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>A database management system (or DBMS) is essentially nothing more than a computerized data-keeping system. Users of the system are given facilities to perform several kinds of operations on such a system for either manipulation of the data in the database or the management of the database structure itself. Database Management Systems (DBMSs) are categorized according to their data structures or types.</p>
                    </div>
                </div>
            </article>
           
        </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Our Popular Courses</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <form action="{{route('productPage')}}" method="post">
              @csrf
              <input type="hidden" name="valeurAjeuter" value="ReactJS is a popular JavaScript library for building user interfaces. By completing the course, students gain a deep understanding of ReactJS and become proficient in developing efficient and interactive web applications. They learn how to leverage React's component-based architecture, virtual DOM, and declarative syntax to create reusable and scalable UI components."> 
              <input type="hidden" name="videos" value="30">  
              <input type="hidden" name="course" value="MasteringReact React Js"> 
              <input type="hidden" name="duration" value="This course consists of 30 videos, and each video contains half an hour. It should take a person 30 days to fully complete this course."> 
              <input type="hidden" name="price" value="16">
              <div class="item">
                <img src="assets/images/react.png" style="max-height:150px">
                <div class="down-content">
                  <h4>MasteringReact React Js</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                         <span>$16</span>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="main-button-red btn fw-bold btn-success m-1">Shop Now</button>
                </div>
              </div>
            </form>
            <form action="{{route('productPage')}}" method="post">
              @csrf
              <input type="hidden" name="valeurAjeuter" value=" Angular JavaScript is a popular framework for building single-page applications (SPAs). By completing the course, students gain proficiency in Angular and learn how to create dynamic and responsive web applications that deliver a seamless user experience. This skill is highly valuable as SPAs continue to gain traction in modern web development."> 
              <input type="hidden" name="videos" value="30">  
              <input type="hidden" name="course" value="Mastering Angular Js"> 
              <input type="hidden" name="duration" value="This course consists of 30 videos, and each video contains half an hour. It should take a person 30 days to fully complete this course."> 
              <input type="hidden" name="price" value="18">
            <div class="item">
             
              <img src="assets/images/angular.png" style="max-height:150px">
              <div class="down-content">
                <h4>Mastering Angular Js</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">  
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$18</span>
                    </div>
                  </div>
                </div>
                <button type="submit" class="main-button-red btn fw-bold btn-success m-1">Shop Now</button>
              </div>
             </form>
            </div>
            <form action="{{route('productPage')}}" method="post">
              @csrf
              <input type="hidden" name="valeurAjeuter" value="Laravel is known for its elegant syntax, simplicity, and extensive set of features. By completing the course, students gain proficiency in Laravel and learn how to build web applications rapidly. The framework provides a wide range of tools and functionalities that streamline the development process, allowing developers to create robust and feature-rich applications with ease."> 
              <input type="hidden" name="videos" value="30">  
              <input type="hidden" name="course" value="Mastering Laravel"> 
              <input type="hidden" name="duration" value="This course consists of 30 videos, and each video contains half an hour. It should take a person 30 days to fully complete this course."> 
              <input type="hidden" name="price" value="20">
            <div class="item">
              
              <img src="assets/images/laravel.png" alt="" style="max-height:150px">
              <div class="down-content">
                <h4>Mastering Laravel</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$20</span>
                    </div>
                  </div>
                </div>
                <button type="submit" class="main-button-red btn fw-bold btn-success m-1">Shop Now</button>
              </div>
              </form>
            </div>
            <form action="{{route('productPage')}}" method="post">
              @csrf
              <input type="hidden" name="valeurAjeuter" value="Java is a versatile programming language that can be used to develop a wide range of applications, from desktop and web applications to mobile apps and enterprise systems. By completing the course, students gain proficiency in Java and can apply their skills to various platforms and domains. Additionally, Java's 'write once, run anywhere' principle allows applications to be easily deployed across different operating systems, making it highly portable."> 
              <input type="hidden" name="videos" value="30">  
              <input type="hidden" name="course" value="Mastering Java"> 
              <input type="hidden" name="duration" value="This course consists of 30 videos, and each video contains half an hour. It should take a person 30 days to fully complete this course."> 
              <input type="hidden" name="price" value="20">
              <div class="item"> 
                  <img src="assets/images/java.png" alt="" style="max-height:150px">
                  <div class="down-content">
                    <h4>Mastering Java</h4>
                    <div class="info">
                      <div class="row">
                        <div class="col-8">
                          <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>
                        <div class="col-4">
                           <span>$20</span>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="main-button-red btn fw-bold btn-success m-1">Shop Now</button>
                  </div>
                </form>
            </div>
            <form action="{{route('productPage')}}" method="post">
              @csrf
              <input type="hidden" name="valeurAjeuter" value="Spring Boot simplifies the development process by providing a convention-over-configuration approach and auto-configuration capabilities. Students who complete the course gain proficiency in leveraging these features, allowing them to build applications faster and with less boilerplate code. This translates to increased productivity and shorter time to market for software projects."> 
              <input type="hidden" name="videos" value="30">  
              <input type="hidden" name="course" value="Mastering Spring Boot"> 
              <input type="hidden" name="duration" value="This course consists of 30 videos, and each video contains half an hour. It should take a person 30 days to fully complete this course."> 
              <input type="hidden" name="price" value="43"> 
            <div class="item">
                <img src="assets/images/springboot.png" alt="" style="max-height:150px">
                <div class="down-content">
                  <h4>Mastering Spring Boot</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                         <span>$43</span>
                      </div>
                    </div>
                  </div> 
                  <button type="submit" class="main-button-red btn fw-bold btn-success m-1">Shop Now</button>
                </div>
               </form>
            </div>
            <form action="{{route('productPage')}}" method="post">
              @csrf
              <input type="hidden" name="valeurAjeuter" value=" SQL is the standard language for managing and manipulating relational databases. By completing the course, students gain proficiency in SQL and learn how to effectively interact with databases. They acquire skills in creating, modifying, and querying databases, as well as managing data through operations such as insertion, deletion, and updating. These skills are valuable in various industries where data management is crucial."> 
              <input type="hidden" name="videos" value="30">  
              <input type="hidden" name="course" value="Mastering Sql"> 
              <input type="hidden" name="duration" value="This course consists of 30 videos, and each video contains half an hour. It should take a person 30 days to fully complete this course."> 
             <input type="hidden" name="price" value="20"> 
            <div class="item">  
              <img src="assets/images/sql.png" alt="" style="max-height:150px">
              <div class="down-content">
                <h4>Mastering Sql</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$20</span>
                    </div>
                  </div>
                </div>
                <button type="submit" class="main-button-red btn fw-bold btn-success m-1">Shop Now</button>
              </div>
               </form>
            </div>
            <form action="{{route('productPage')}}" method="post">
              @csrf
              <input type="hidden" name="valeurAjeuter" value="  MongoDB is a popular NoSQL (non-relational) database that provides flexibility, scalability, and performance advantages over traditional relational databases. By completing the course, students gain proficiency in MongoDB and learn how to work with a NoSQL database, understand its principles, and leverage its features effectively."> 
              <input type="hidden" name="videos" value="30">  
              <input type="hidden" name="course" value="Mastering Mongodb"> 
              <input type="hidden" name="duration" value="This course consists of 30 videos, and each video contains half an hour. It should take a person 30 days to fully complete this course."> 
              <input type="hidden" name="price" value="18"> 
            <div class="item">
             
                <img src="assets/images/mongodb.jpg" alt="" style="max-height:150px">
              <div class="down-content">
                <h4>Mastering Mongodb</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$18</span>
                    </div>
                  </div>
                </div>
                <button type="submit" class="main-button-red btn fw-bold btn-success m-1">Shop Now</button>
              </div>
              </form>
            </div>
            <form action="{{route('productPage')}}" method="post">
              @csrf
              <input type="hidden" name="valeurAjeuter" value="  MySQL is one of the most widely used relational database management systems (RDBMS) in the world. By completing the course, students gain proficiency in MySQL and learn how to effectively manage relational databases. They acquire skills in creating and managing database structures, designing efficient schemas, and querying data using SQL (Structured Query Language)."> 
              <input type="hidden" name="videos" value="30">  
              <input type="hidden" name="course" value="Mastering MySql"> 
              <input type="hidden" name="duration" value="This course consists of 30 videos, and each video contains half an hour. It should take a person 30 days to fully complete this course."> 
              <input type="hidden" name="price" value="12"> 
            <div class="item"> 
                <img src="assets/images/mysql.jpg" alt="" style="max-height:150px">
                <div class="down-content">
                  <h4>Mastering MySql</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                         <span>$12</span>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="main-button-red btn fw-bold btn-success m-1">Shop Now</button>
                </div>
              </form>
            </div>
            <form action="{{route('productPage')}}" method="post">
              @csrf
              <input type="hidden" name="valeurAjeuter" value="Symfony is a high-performance PHP framework known for its robustness and scalability. By completing the course, students gain proficiency in Symfony and learn how to build powerful web applications. They acquire skills in leveraging Symfony's extensive set of components and tools to develop scalable, maintainable, and feature-rich applications."> 
              <input type="hidden" name="videos" value="30">  
              <input type="hidden" name="course" value="Mastering Symfony"> 
              <input type="hidden" name="duration" value="This course consists of 30 videos, and each video contains half an hour. It should take a person 30 days to fully complete this course."> 
             <input type="hidden" name="price" value="43"> 
            <div class="item"> 
                <img src="assets/images/symfony.png" alt="" style="max-height:150px">
                <div class="down-content">
                  <h4>Mastering Symfony</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                         <span>$43</span>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="main-button-red btn fw-bold btn-success m-1">Shop Now</button>
                </div>
               </form>
            </div>
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A Few Facts About Our Service</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">94</div>
                    <div class="count-title">Succesed Students</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">23</div>
                    <div class="count-title">Current Teachers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">300</div>
                    <div class="count-title">New Students</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">12</div>
                    <div class="count-title">Awards</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=HhvJFxM02GQ" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Let's get in touch</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>010-020-0340</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>contact@boot-coding.com</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Street Address</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer text-light">
      &copy; {{ date("Y") }} <a class="border-bottom" href="#">BOOTCODING</a>, All Right Reserved. 
    </div>
  </section>
@endsection