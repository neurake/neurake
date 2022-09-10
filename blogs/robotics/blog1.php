<!DOCTYPE html>
<html lang="en">
<Head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/831fe01b9b.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="../../assets/fontawesome/css/all.css">
    <link rel="icon" type="image/x-icon" href="../../assets/logo.png">
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
                                                 /*Blog Div*/
           .header{padding:30px; font-size:40px; text-align:center; background:white;}
           .leftcolumn{float:left; width:75%;}
           .rightcolumn{float:left; width:25%; padding-left:20px;}
           .fakeimg{width:100%;}
           .fakeimg img{height:200px; width:600px;}
           .card{background-color:white; padding:20px; margin-top:20px;}
           .row:after{content:""; display:table; clear:both;}
           @media screen and (max-width: 700px){
                                               .leftcolumn, .rightcolumn{width:100%; padding:0;}
                                               .fakeimg img{width:auto;}
           }
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
       <img src="../../assets/logo.png"> 
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



<div class="header">
  <h3>Top 5 Mobile Graphic Design Apps</h3>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Top 5 Computer Tips to boost your productivity.</h2>
      <h5>By Neurake, 9sep 2022</h5>
      <div class="fakeimg" style="height:200px;"><center><img src="img.jpg"></center></div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <div class="fakeimg" style="height:200px;"><center><img src="img.jpg"></center></div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
       <div class="fakeimg" style="height:200px;"><center><img src="img.jpg"></center></div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      
    </div>
    
  </div>
  
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</Body>
</HTML>