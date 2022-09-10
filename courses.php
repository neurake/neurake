 <!DOCTYPE html>
 <html lang="en">
 <Head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ed9da484e9.js" crossorigin="anonymous"></script>
    <title>Neurake</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap');
           body{font-family: 'Mouse Memoirs', sans-serif;}
           *{margin:0; padding:0; list-style:none; text-decoration:none; box-sizing:border-box; transition: .2s linear;}
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
           
           
           
           
           .container{
     background: linear-gradient(to right, #59c173, #a17fe0, #5d26c1); 
    padding:15px 9%;
    padding-bottom: 100px;
    font-family: 'Poppins', sans-serif;
}

.container .heading{
    text-align: center;
    padding-bottom: 15px;
    color:#fff;
    text-shadow: 0 5px 10px rgba(0,0,0,.2);
    font-size: 50px;
}

.container .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap:15px;
}

.container .box-container .box{
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    border-radius: 5px;
    background: #fff;
    text-align: center;
    padding:30px 20px;
}

.container .box-container .box img{
    height: 80px;
}

.container .box-container .box h3{
    color:#444;
    font-size: 22px;
    padding:10px 0;
}

.container .box-container .box p{
    color:#777;
    font-size: 15px;
    line-height: 1.8;
}

.container .box-container .box .btn{
    margin-top: 10px;
    display: inline-block;
    background:#333;
    color:#fff;
    font-size: 17px;
    border-radius: 5px;
    padding: 8px 25px;
}

.container .box-container .box .btn:hover{
    letter-spacing: 1px;
}

.container .box-container .box:hover{
    box-shadow: 0 10px 15px rgba(0,0,0,.3);
    transform: scale(1.03);
}

@media (max-width:768px){
    .container{
        padding:20px;
    }
}




 /*Footer Div*/
           .footerdiv{background: linear-gradient(to right, #009fff, #ec2f4b); width:100%; height:350px;}
           #footerlogo{width:150px; margin-top:40px;}
           #subfield{width:240px; height:40px; border:none; outline:none; border-top-left-radius:10px; border-bottom-left-radius:10px;}
           #subbtn{height:45px;  background: linear-gradient(to right, #00b4db, #0083b0); color:white;}
    </style>
</Header>




<Main>
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
       <li><a href="courses.php" class="active">Courses</a></li>
       <li><a href="blogs.php">Blogs</a></li>
       <li><a href="projects.php">Projects</a></li>
       <li><a href="tools.php">Tools</a></li>
       <li><a href="contact.php">Contact</a></li>
       <li><a href="games.php" id="gameshide">Games</a></li>
       </ul>
       </nav> 
</Header>


<Main>
     <div class="container">

    <h1 class="heading">Courses</h1>

    <div class="box-container">

        <div class="box">
            <img src="assets/icon-1.png" alt="">
            <h3>HTML 5</h3>
            <p>Hyper Text Markup Language. It is used to create the layout of the Website.</p>
            <a href="./courses/html/learnhtml.php" class="btn">Learn HTML</a>
        </div>

        <div class="box">
            <img src="assets/icon-2.png" alt="">
            <h3>CSS 3</h3>
            <p>Cascading Style Sheet. It is used to design the Website.</p>
            <a href="#" class="btn">Learn CSS</a>
        </div>

        <div class="box">
            <img src="assets/icon-3.png" alt="">
            <h3>JavaScript</h3>
            <p>Javascript is the scripting language. It is used to give additional functionality to the Website.</p>
            <a href="#" class="btn">Learn JavaScript</a>
        </div>

        <div class="box">
            <img src="assets/php logo.png" alt="">
            <h3>PHP</h3>
            <p>PHP is a general purpose scripting language. It is used as the backend language for the Website.</p>
            <a href="#" class="btn">Learn PHP</a>
        </div>


        <div class="box">
            <img src="assets/sql logo.png" alt="">
            <h3>SQL</h3>
            <p>SQL is a language used in programming and designed for managing data held in a relational database management system.</p>
            <a href="#" class="btn">Learn SQL</a>
        </div>
        
        
        <div class="box">
            <img src="assets/mysql logo.png" alt="">
            <h3>MySQL Database</h3>
            <p>MySQL is an open-source relational database management system.It stores the data in the database.</p>
            <a href="#" class="btn">Learn MyQL</a>
        </div>

    </div>

</div>
   
</Main>


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