<!DOCTYPE html>
<html lang="en">
<Head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/831fe01b9b.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="icon" type="image/x-icon" href="assets/logo.png">
    <title>Neurake</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap');
           body{font-family: 'Mouse Memoirs', sans-serif;}
           *{margin:0; padding:0; list-style:none; text-decoration:none; box-sizing:border-box;}
                                               /*Navigation Bar*/
           nav{height:60px; background:black;}
           nav img{width:140px; position:absolute; top:7px; left:5%;}
           nav ul{float:right; margin-right:25px;}
           nav ul li{display:inline-block; line-height:80px; margin:0 15px; margin-top:-10px;}
           nav ul li a{position:relative; color:white; font-size:23px; padding:5px 0;}
           nav ul li a:before{position:absolute; content:''; left:0; bottom:0; height:3px; width:100%; background:white; transform:scaleX(0); transform-origin:right; transition:transform .4s                  linear;}
           nav ul li a:hover:before{transform:scaleX(1); transform-origin:left;}
           label #btn,
           label #cancel{color:white; font-size:21px; float:right; line-height:60px; margin-right:40px; cursor:pointer; display:none;}
           #check{display:none;}
           ul li a.active,
           ul li a:hover{color:aqua;}
           @media (max-width: 1118px){
                                     nav img{left:8%;}
           }
           @media (max-width: 944px){
                                     nav img{left:6%; top:10px; width:130px; left:28%;}
                                     nav ul li a{font-size:17px;}
                                     #gameshide{display:none;}
           }
           @media (max-width: 860px){
                                     label #btn{display:block;}
                                     ul{position:fixed; width:100%; height:100vh; background:#34495e; top:60px; left:-100%; text-align:center; transition:all .5s;}
                                     nav ul li{display:block; margin:50px 0; line-height:10px;}
                                     nav ul li a{font-size:25px;}
                                     #check:checked ~ ul{left: 0;}
                                     #check:checked ~ label #btn{display:none; }
                                     #check:checked ~ label #cancel{display:block; }
           }
                                                /*Course Div*/
           .course-section{width:100%; min-height:100vh; background-color:white; font-family:'Cairo', sans-serif;}
           .course-container{width:80%; display:block; margin:auto; padding-top:100px;}
           .content-section{float:left; width:55%;}
           .image-section{float:right; width:40%;}
           .image-section img{width:100%; height:auto;}
           .content-section .title{text-transform:uppercase; font-size:28px;}
           .content-section .content h3{margin-top:20px; color:#5d5d5d; font-size:21px;}
           .content-section .content p{margin-top:10px; font-family:sans-serif; font-size:18px; line-height:1.5;}
           .content-section .content .button{margin-top:30px;}
           .content-section .content .button a{background-color:#3d3d3d; padding:12px 40px; text-decoration:none; color:#fff; font-size:25px; letter-spacing:1.5px;}
           .content-section .content .button a:hover{background-color:#a52a2a; color:#fff;}
           .content-section .social{margin:40px 40px;}
           .content-section .social i{color:#a52a2a;font-size:30px; padding:0px 10px;}
           .content-section .social i:hover{color:#3d3d3d;}
           @media screen and (max-width: 768px){
	                                           .course-container{width:80%; display:block; margin:auto; padding-top:50px;}
                                               .content-section{float:none; width:100%; display:block; margin:auto;}
                                               .image-section{float:none; width:100%;}
                                               .image-section img{width:100%; height:auto; display:block; margin:auto;}
                                               .content-section .title{text-align:center; font-size:19px;}
                                               .content-section .content .button{text-align:center;}
                                               .content-section .content .button a{padding:9px 30px;}
                                               .content-section .social{text-align:center;}
           }
                                                        /*Blog Div*/
           .mainblogsection{background:linear-gradient(to right, #00b4db, #0083b0); font-family:Dubai Medium; }
           .container{max-width:1200px; margin:0 auto; text-align:center; padding:25px 20px;}
           .container .heading{font-size:40px; margin-bottom:20px; color:#334;}
           .container .box-container{display:grid; grid-template-columns:repeat(auto-fit, minmax(350px, 1fr)); gap:20px;}
           .container .box-container .box{background-color:#fff; padding:20px; border-radius:5px; box-shadow:0 5px 10px rgba(0,0,0,.2); display:none;}
           .container .box-container .box:nth-child(1),
           .container .box-container .box:nth-child(2),
           .container .box-container .box:nth-child(3){display:inline-block;}
           .container .box-container .box .image{margin-bottom:20px; overflow:hidden; height:250px; border-radius:5px;}
           .container .box-container .box .image img{height:100%; width:100%; object-fit:cover;}
           .container .box-container .box:hover .image img{transform:scale(1.1);}
           .container .box-container .box .content h3{font-size:20px; color:#334;}
           .container .box-container .box .content p{font-size:15px; color:#777; line-height:2; padding:15px 0;}
           .container .box-container .box .content .btn{display:inline-block; padding:10px 30px; border:1px solid #334; color:#334; font-size:16px;}
           .container .box-container .box .content .btn:hover{background-color:crimson; border-color:crimson; color:#fff;}
           .container .box-container .box .content .icons{display:flex; align-items:center; justify-content:space-between; margin-top:20px; padding-top:15px; border-top:1px solid #334;}
           .container .box-container .box .content .icons span{font-size:14px; color:#777;}
           .container .box-container .box .content .icons span i{color:crimson;padding-right:5px;}
           #blogbtn{width:170px; height:45px;  background: linear-gradient(to right, #12c2e9, #c471ed, #f64f59);border-radius:20px; color:white; }
           @media (max-width:450px){
                                   .container .heading{font-size:25px;}
                                   .container .box-container{grid-template-columns:1fr;}
                                   .container .box-container .box .image{height:200px;}
                                   .container .box-container .box .content p{font-size:12px;}
                                   .container .box-container .box .content .icons span{font-size:12px;}
           }
                                                        /*About Div*/
           .about{width:100%; height:100vh; background-color:#161922; display:flex; justify-content:center; align-items:center;}
           .about .about-content img{height:auto; width:400px; max-width:100%;}
           .about-text{width:550px; max-width:100%; padding:0 10px;}
           .about-content{width:1280px; max-width:95%; margin:0 auto; display:flex; flex-wrap:wrap; align-items:center; justify-content:space-between;}
           .about-text h1{color:#ffcc74; font-size:85px; margin-bottom:20px; text-transform:capitalize;}
           .about-text h5{color:white; font-size:25px; margin-bottom:25px; text-transform:capitalize; letter-spacing:2px;}
           .about-text p{color:#c0c4d6; font-size:18px; line-height:28px; letter-spacing:1px; margin-bottom:45px;}
           #aboutbtn{background-color: #ffcc74; color:black; border:2px solid transparent; text-decoration: none; padding:10px 30px; border-radius: 30px; font-size:17px; font-weight: bold;}
           @media screen and (max-width:1180px){
                                               .about{width:100%; height:auto; padding:70px 0px;}
           }
           @media screen and (max-width:650px){
                                              .about .about-content img{margin-bottom:35px; }
                                              .about-text h1{font-size:60px; margin-bottom:25px;}
           }
                                                      /*Footer Div*/
           .footerdiv{background: linear-gradient(to right, #232526, #414345); width:100%; height:350px;}
           #footerlogo{width:150px; margin-top:40px;}
           #subfield{width:240px; height:40px; border:none; outline:none; border-top-left-radius:10px; border-bottom-left-radius:10px;}
           #subbtn{height:45px;  background: linear-gradient(to right, #00b4db, #0083b0); color:white;}
    </style>
</Head>




<Body>
<Header>
       <nav>                                                                                        <!----------------Navigation Bar------------------->
       <input type="checkbox" id="check">
       <label for="check">
       <i class="fa-solid fa-bars" id="btn"></i>
       <i class="fa-solid fa-xmark" id="cancel"></i>
       </label>
       <img src="assets/logo.png"> 
       <ul>
       <li><a href="" class="active">Home</a></li>
       <li><a href="courses.php">Courses</a></li>
       <li><a href="blogs.php">Blogs</a></li>
       <li><a href="projects.php">Projects</a></li>
       <li><a href="tools.php">Tools</a></li>
       <li><a href="contact.php">Contact</a></li>
       <li><a href="games.php" id="gameshide">Games</a></li>
       </ul>
       </nav> 
</Header>


<Main>
     <div class="course-section">                                                                       <!--------------Course Div----------------->
	 <div class="course-container">
	 <div class="content-section">
	 <div class="title">
	 <h1>Tech Courses</h1>
	 </div>
	 <div class="content">
	 <h3>Coures That Makes You Sucessed  !</h3>
	 <p>Learn the variety of Tech Courses like Web Development, Android Development, Databases etc,  That makes you sucessed in this Digital World. </p>
     <div class="button">
	 <a href="courses.php">Start Learning</a>
	 </div>
	 </div>
	 <div class="social">
	 <i class="fa-brands fa-html5"></i>
	 <i class="fa-brands fa-css3-alt"></i>
	 <i class="fa-brands fa-js"></i>
	 <i class="fa-solid fa-database"></i>
	 </div>
	 </div>
	 <div class="image-section">
	 <img src="assets/course.gif">
	 </div>
	 </div>
 	 </div>

    <div class="mainblogsection">                                                            <!-------------------------Blog Div--------------------------------->
    <div class="container">
    <h1 class="heading">Explore Blogs</h1>
    <div class="box-container">
                              <div class="box">
                                              <div class="image">
                                              <img src="assets/mobile tips.jpg" alt="">
                                              </div>
                                              <div class="content">
                                              <h3>Top 5 Mobile Graphic Design Apps</h3>
                                              <p>Top 5 mobile graphic design apps you should try to boost your creativity......</p>
                                              <a href="blogs/robotics/blog1.php" class="btn">read more</a>
                                              <div class="icons">
                                              <span><i class="fas fa-calendar"></i> 21st may, 2022 </span>
                                              <span><i class="fas fa-user"></i> by neurake </span>
                                              </div>
                                              </div>
                              </div>
                              <div class="box">
                                              <div class="image">
                                              <img src="assets/computer shortcuts.jpg" alt="">
                                              </div>
                                              <div class="content">
                                              <h3>Aamazing Computer Shortcuts</h3>
                                              <p>There are lots of amazing comuter keyboard shortcuts you must try......</p>
                                              <a href="#" class="btn">read more</a>
                                              <div class="icons">
                                              <span><i class="fas fa-calendar"></i> 21st may, 2022 </span>
                                              <span><i class="fas fa-user"></i> by neurake </span>
                                              </div>
                                              </div>
                              </div>
                              <div class="box">
                                              <div class="image">
                                              <img src="assets/artifical intelligence.jpg" alt="">
                                              </div>
                                              <div class="content">
                                              <h3>What is Artifical Intelligence</h3>
                                              <p>Artifical Intelligence is the most amazing field in technlogy that makes machine......</p>
                                              <a href="#" class="btn">read more</a>
                                              <div class="icons">
                                              <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
                                              <span><i class="fas fa-user"></i> by neurake </span>
                                              </div>
                                              </div>
                              </div>
                              
    </div>
    </div>
    <center><button id="blogbtn"><h2>More Blogs</h2></button></center>
    <br><br><br>
    </div>

    <section class="about">                                                                                       <!--------------------About Div--------------------->
                          <div class="about-content">
                          <img src="assets/image.png">
                          <div class="about-text">
                          <h1>About Neurake</h1>
                          <h5>The Mind Behind Neurake</h5>
                          <p>I am Vishal Thombre. I am a Software Enginner by profession. 
                             The Main reseaon behind the neurake is to provide the tech knowledge free of cost. 
                             I am from Maharashtra (India).
                          </p>
                         <button id="aboutbtn"><a href="contact.php" style="cursor:pointer;color:black;">Connect With Me</a></button>
                         </div>
                         </div>
    </section>        
</Main>


<Footer>
       <div class="footerdiv">                                                                                    <!-------------------------Footer Div----------------------->
                             <center><img src="assets/logo.png"  id="footerlogo"></center><br><br>
                             <center><input type="text" id="subfield" placeholder="enter your email address...."><button id="subbtn">SUBSCRIBE</button></center><br><br>
                             <center><h1><i class="fa-brands fa-youtube" class="smi" style="color:white"></i> <i class="fa-brands fa-facebook"style="color:white" ></i> <i class="fa-brands fa-instagram" style="color:white" ></i> <i class="fa-brands fa-twitter" style="color:white"></i> <i class="fa-brands fa-linkedin" style="color:white" ></i></h1></center><br><br><br>
                             <center><h2><i class="fa-solid fa-copyright"></i>Neurake.com</h2></center>
       </div>
       <div style="background:orange; width:100%; height:4px;"></div>
       <div style="background:blue; width:100%; height:4px;"></div>
       <div style="background:green; width:100%; height:4px;"></div>
</Footer>

 </Body>
 </html>