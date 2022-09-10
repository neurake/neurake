<!DOCTYPE html>
<html lang="en">
<Head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/831fe01b9b.js" crossorigin="anonymous"></script>
    <title>Neurake</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap');
           body{font-family: 'Mouse Memoirs', sans-serif; background: linear-gradient(to right, #2193b0, #6dd5ed);}
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
           
           
           
           
           
        #section-wrapper{
    width: 100%;
    padding: 10px;
    
}
.box-wrapper{
    
    display: table;
    width:1100px;
    margin:auto;
    margin-top:35px;
    border-radius: 30px;
}
.info-wrap{
    width:35%;
    height: 551px;
    padding: 40px;
    float: left;
    display: block;
    border-radius: 30px 0px 0px 30px;
    background: linear-gradient(144deg, rgba(126,39,156,1) 0%, rgba(49,39,157,1) 49%);
    color: #fff;
}
.info-title{
    text-align: left;
    font-size: 28px;
    letter-spacing: 0.5px;
}
.info-sub-title{
    font-size: 18px;
    font-weight: 300;
    margin-top: 17px;
    letter-spacing: 0.5px;
    line-height: 26px;
}
.info-details {
    list-style: none;
    margin: 60px 0px;
}
.info-details li {
    margin-top: 25px;
    font-size: 18px;
    color: #fff;
}
.info-details li i {
    background: #F44770;
    padding: 12px;
    border-radius: 50%;
    margin-right: 5px;
}
.info-details li a {
    color: #fff;
    text-decoration: none;
}
.info-details li a:hover {
    color: #F44770;
}
.social-icons {
    list-style: none;
    text-align: center;
    margin: 10px 0px;
}
.social-icons li {
    display: inline-block;
}
.social-icons li i {
    background: #F44770;
    color: #fff;
    padding: 15px;
    font-size: 20px;
    border-radius: 22%;
    margin: 0px 5px;
    cursor: pointer;
    transition: all .5s;
}
.social-icons li i:hover {
    background: #fff;
    color: #000000;
}
.form-wrap{
    width:65%;
    float: right;
    padding:40px 25px 35px 25px;
    border-radius: 0px 30px 30px 0px;
    background: #ecf0f3;
}
.form-title{
    text-align: left;
    margin-left: 23px;
    font-size: 28px;
    letter-spacing: 0.5px;
}
.form-fields{
    display: table;
    width: 100%;
    padding: 15px 5px 5px 5px;
}
.form-fields input,
.form-fields textarea{
    border: none;
    outline:none;
    background: none;
    font-size: 18px;
    color:#555;
    padding: 20px 10px 20px 5px;
    width:100%
}
.form-fields textarea{
    height: 150px;
    resize: none;
}
.form-group{
    width: 46%;
    float: left;
    padding: 0px 30px;
    margin: 14px 12px;
    border-radius: 25px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #ffffff;
}
.form-fields .form-group:last-child {
    width: 96%;
}
.submit-button{
    width: 96%;
    height: 60px;
    margin: 0px 12px;
    border-radius: 30px;
    font-size: 20px;;
    font-weight: 700;
    outline: none;
    border:none;
    cursor: pointer;
    color:#fff;
    text-align: center;
    background: #F44770;
    box-shadow: 3px 3px 8px #b1b1b1, -3px -3px 8px #ffffff;
    transition: .5s;
}
.submit-button:hover{
    background: #31279d;
}


/* Responsive css */

@media only screen and (max-width: 767px) {
    .box-wrapper{
        width: 100%;
    }
    .info-wrap,
    .form-wrap{
        width: 100%;
        height: inherit;
        float: none;  
    }
    .info-wrap{
        border-radius: 30px 30px 0px 0px;
    }
    .form-wrap{
        border-radius: 0px 0px 30px 30px;
    }
    .form-group{
        width: 100%;
        float: none;
        margin: 25px 0px;
    }
    .form-fields .form-group:last-child, 
    .submit-button{
        width: 100%;
    }
    .submit-button{
        margin: 10px 0px;
    }
   
}











                                                         /*Footer Div*/
           .footerdiv{background: linear-gradient(to right, #009fff, #ec2f4b); width:100%; height:350px;}
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
       <li><a href="index.php">Home</a></li>
       <li><a href="courses.php" >Courses</a></li>
       <li><a href="blogs.php">Blogs</a></li>
       <li><a href="projects.php">Projects</a></li>
       <li><a href="tools.php">Tools</a></li>
       <li><a href="contact.php" class="active">Contact</a></li>
       <li><a href="games.php" id="gameshide">Games</a></li>
       </ul>
       </nav> 
</Header>




<section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="info-title"><img src="assets/logo.png" width="120px"></h2>
                <h3 class="info-sub-title">Fill up the form and we will get back to you within 24 hours.</h3>
                <br><br>
                <ul class="info-details">
                   
                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span>Email:</span> <a href="mailto:contact@neurake.com">contact@neurake.com</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <span>Website:</span> <a href="#">http://www.neurake.com</a>
                    </li>
                </ul>
               
            </div>
            <div class="form-wrap">
                <form action="sendmail.php" method="POST">
                    <h2 class="form-title">Send us a message</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text" class="fname"    name="firstname" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="lname" name="lastname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="email" name="email" placeholder="Mail">
                        </div>
                        <div class="form-group">
                            <input type="number" class="phone" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id=""  placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="submit" class="submit-button">
                </form>
            </div>
        </div>
    </section>
   <br><br><br> 
    
    
    
<Footer>
       <div class="footerdiv">                                                                                    <!-------------------------Footer Div----------------------->
                             <center><img src="assets/logo.png"  id="footerlogo"></center><br><br>
                             <center><input type="text" id="subfield" placeholder="enter your email address...."><button id="subbtn">SUBSCRIBE</button></center><br><br>
                             <center><h1><i class="fa-brands fa-youtube" class="smi"></i> <i class="fa-brands fa-facebook" ></i> <i class="fa-brands fa-instagram" ></i> <i class="fa-brands fa-twitter"></i> <i class="fa-brands fa-linkedin" ></i></h1></center><br><br><br>
                             <center><h2><i class="fa-solid fa-copyright"></i>Neurake.com</h2></center>
       </div>
       <div style="background:orange; width:100%; height:5px;"></div>
       <div style="background:blue; width:100%; height:5px;"></div>
       <div style="background:green; width:100%; height:5px;"></div>
</Footer>
</Body>
</HTML>