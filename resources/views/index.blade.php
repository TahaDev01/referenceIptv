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
              <li></li>
              <li></li>
              <li></li>
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
                      <a href="index.html" class="logo">
                          BOOTCODING
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#courses">Shop Now</a></li>
                          <li class="scroll-to-section"><a href="#courses">Courses</a></li> 
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
                          <li class="scroll-to-section"><a href="#refund">Refund Policy</a></li>  
                          <li class="scroll-to-section"><a href="#aboutus">About Us</a></li>  
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
                 <form action="{{route('checkoutView')}}" method="post">
                  @csrf
                  <input type="hidden" name="price" value="43">
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
                    <a href="meeting-details.html"><h4>data analytics advanced course</h4></a>
                   <button type="submit" class="main-button-red btn fw-bold btn-success">Shop Now</button>
                 </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item"> 
               <form action="{{route('checkoutView')}}" method="post">
                @csrf
                <input type="hidden" name="price" value="12">
                <div class="thumb">
                  <div class="price">
                    <span>$12.00</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt="Online Teaching"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6 class="mb-3">New Course</h6>
                  </div>
                  <a href="meeting-details.html"><h4>big data advanced course </h4></a>
                  <button type="submit" class="main-button-red btn fw-bold btn-success">Shop Now</button>
                </div>
               </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <form action="{{route('checkoutView')}}" method="post">
                  @csrf
                  <input type="hidden" name="price" value="43">
                  <div class="thumb">
                    <div class="price">
                      <span>$43.00</span>
                    </div>
                    <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt="Higher Education"></a>
                  </div>
                  <div class="down-content">
                    <div class="date">
                      <h6 class="mb-3">New Course</h6>
                    </div>
                    <a href="meeting-details.html"><h4>Spring boot advanced course</h4></a>
                    <button type="submit" class="main-button-red btn fw-bold btn-success">Shop Now</button>
                </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <form action="{{route('checkoutView')}}" method="post">
                  @csrf
                  <input type="hidden" name="price" value="32">
                  <div class="thumb">
                    <div class="price">
                      <span>$32.00</span>
                    </div>
                    <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg" alt="Student Training"></a>
                  </div>
                  <div class="down-content">
                    <div class="date">
                      <h6 class="mb-3">New Course</h6>
                    </div>
                    <a href="meeting-details.html"><h4>JavaScript Angular advanced course</h4></a>
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
            <form action="{{route('checkoutView')}}" method="post">
              @csrf 
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
            <div class="item">
              <form action="{{route('checkoutView')}}" method="post">
              @csrf 
              <input type="hidden" name="price" value="18">
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
            <div class="item">
              <form action="{{route('checkoutView')}}" method="post">
                @csrf 
              <input type="hidden" name="price" value="20">
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
            <div class="item">
              <form action="{{route('checkoutView')}}" method="post">
                @csrf 
              <input type="hidden" name="price" value="20">
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
            <div class="item">
              <form action="{{route('checkoutView')}}" method="post">
                @csrf 
              <input type="hidden" name="price" value="43"> 
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
            <div class="item">
              <form action="{{route('checkoutView')}}" method="post">
                @csrf 
              <input type="hidden" name="price" value="43"> 
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
            <div class="item">
              <form action="{{route('checkoutView')}}" method="post">
                @csrf 
              <input type="hidden" name="price" value="18"> 
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
            <div class="item">
              <form action="{{route('checkoutView')}}" method="post">
                @csrf 
              <input type="hidden" name="price" value="12"> 
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
            <div class="item">
              <form action="{{route('checkoutView')}}" method="post">
                @csrf 
              <input type="hidden" name="price" value="43"> 
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
   
  <section class="contact-us" id="refund">  
    <div class="container">
      <div class="row">
        <div class=" align-self-center">
         
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <h2>Refund Policy</h2>
                  <p>
                    Thank you for choosing our web store for your development courses. We strive to provide the best learning experience and customer service possible. However, we understand that there may be circumstances where you might need to request a refund. This refund policy outlines the conditions and process for obtaining a refund.
                    
                    Eligibility for Refund:
                    
                    You are eligible for a refund within a specified time frame from the date of purchase, which is 12 days.
                    Refunds will be considered for courses that have not been accessed or partially accessed, as indicated by our system.
                    Refund Process:
                    
                    To request a refund, please contact our customer support team at live .
                    Provide your order details, including the course name, purchase date, and any other relevant information.
                    Our customer support team will review your request and respond within  6 houres.
                    If your refund request is approved, the refund will be processed using the original payment method within 1 day.
                    Please note that refunds may take some time to reflect in your account, depending on the policies of your financial institution.
                    
                    </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <section class="contact-us" id="aboutus">  
    <div class="container">
      <div class="row">
        <div class=" align-self-center">
         
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <h2>About Us</h2>
                  <p>
                    Welcome to our web store, your premier destination for high-quality development informatique courses. We are passionate about empowering individuals with the knowledge and skills they need to thrive in the rapidly evolving world of technology.

                    At BOOT-CODING, we believe that education is the key to personal and professional growth. Our carefully curated selection of courses is designed to cater to beginners as well as experienced professionals, ensuring that there is something for everyone.
                    
                    Why Choose Us?
                    
                    Expert Instructors: Our courses are developed and taught by industry experts with extensive experience in the field of development informatique. They bring real-world knowledge and practical insights to the learning experience, enabling you to gain relevant skills that can be applied immediately.
                    
                    Comprehensive Curriculum: We offer a wide range of courses covering various aspects of development informatique, including programming languages, web development, mobile app development, data science, and more. Our curriculum is regularly updated to keep pace with the latest industry trends and technologies.
                    
                    Interactive Learning: We believe that active engagement is crucial for effective learning. Our courses are designed to be interactive, with hands-on exercises, coding projects, quizzes, and assessments that help you reinforce your understanding and apply what you've learned.
                    
                    Flexible Learning Options: We understand that everyone has unique learning preferences and schedules. That's why we offer flexible learning options, including self-paced courses that allow you to learn at your own convenience. You can access the course materials anytime, anywhere, and progress at a pace that suits you.
                    
                    Continuous Support: We are committed to your success and provide ongoing support throughout your learning journey. Our dedicated support team is available to assist you with any questions or technical issues you may encounter. We also foster a vibrant online community where you can connect with fellow learners, share insights, and seek guidance.
                    
                    Competitive Pricing and Value: We believe in providing exceptional value for your investment. Our courses are priced competitively, offering you affordable access to high-quality educational content. We strive to deliver maximum value by ensuring that our courses are comprehensive, engaging, and relevant to your needs.
                    
                    Join us at BOOT-CODING and embark on an exciting learning journey in development informatique. Whether you are looking to start a new career, enhance your skills, or stay updated with the latest technologies, we have the courses to help you achieve your goals.
                    
                    We look forward to being a part of your learning and growth!
                    
                    </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

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
                <span>bootcoding@gmail.com</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Street Address</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.bootcoding.codes</span>
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