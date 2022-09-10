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
           body{font-family: 'Mouse Memoirs', sans-serif;  background: linear-gradient(to right, #fc00ff, #00dbde);}
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
           
           
           
           
           
.heading{color:white; font-size:50px; text-align:center; padding:10px;}
           .container{display:grid; grid-template-columns:2fr 1fr; gap:15px; align-items:flex-start; padding:5px 5%;}
           .container .main-video{background:#fff; border-radius:5px; padding:10px;}
           .container .main-video video{width:100%; border-radius:5px;}
           .container .main-video .title{color:#333; font-size:23px; padding-top:15px; padding-bottom:15px;}
           .container .video-list{background:#fff; border-radius:5px; height:520px; overflow-y:scroll;}
           .container .video-list::-webkit-scrollbar{width:7px;}
           .container .video-list::-webkit-scrollbar-track{background:#ccc; border-radius:50px;}
           .container .video-list::-webkit-scrollbar-thumb{background:#666; border-radius:50px;}
           .container .video-list .vid video{width:100px; border-radius:5px;}
           .container .video-list .vid{display:flex; align-items:center; gap:15px; background:#f7f7f7; border-radius:5px; margin:10px; padding:10px; border:1px solid rgba(0,0,0,.1); cursor:pointer;}
           .container .video-list .vid:hover{background:#eee;}
           .container .video-list .vid.active{background:#2980b9;}
           .container .video-list .vid.active .title{color:#fff;}
           .container .video-list .vid .title{color:#333; font-size:17px;}
           @media(max-width:991px){
                                  .container{grid-template-columns:1.5fr 1fr; padding:10px;}
                                  }
           @media(max-width:768px){
                                  .container{grid-template-columns:1fr;}
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
       <img src="logo.png"> 
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












<a href="courses.html">HTML</a>
     <h3 class="heading">HTML</h3>
     <div class="container">
                           <div class="main-video">
                                                  <div class="video">
                                                            <video src="vid1.mp4" controls autoplay></video>
                                                            <h3 class="title">0.1-HTML Introduction</h3>
                                                  </div>
                           </div>

                           <div class="video-list">
                                            <div class="vid active">
                                                <video src="vid1.mp4" muted></video>
                                                <h3 class="title">0.1-HTML Introduction</h3>
                                            </div>

                                            <div class="vid">
                                                <video src="vid2.mp4" muted></video>
                                                <h3 class="title">0.2-HTML Struture</h3>
                                            </div>

                                            <div class="vid">
                                                <video src="vid3.mp4" muted></video>
                                                <h3 class="title">0.3-HTML Heading</h3>
                                            </div>

                                            <div class="vid">
                                                <video src="vid4.mp4" muted></video>
                                                <h3 class="title">0.4-HTML Paragraph</h3>
                                            </div>

                                            <div class="vid">
                                                <video src="vid1.mp4" muted></video>
                                                <h3 class="title">0.5-HTML Formatting Tags</h3>
                                            </div>

                                            <div class="vid">
                                                <video src="vid2.mp4" muted></video>
                                                <h3 class="title">0.6-HTML Image</h3>
                                            </div>

                                            <div class="vid">
                                                <video src="vid3.mp4" muted></video>
                                                <h3 class="title">0.7-HTML Video</h3>
                                            </div>

                                            <div class="vid">
                                                <video src="vid4.mp4" muted></video>
                                                <h3 class="title">0.8-HTML Audio</h3>
                                            </div>
                           </div>
     </div> 
     
     <br><br><br><br>
     
     <a href="htmlpdf.pdf">Download HTML Notes</a>


     <script>
        let listVideo = document.querySelectorAll('.video-list .vid');
        let mainVideo = document.querySelector('.main-video video');
        let title = document.querySelector('.main-video .title');

        listVideo.forEach(video =>{
        video.onclick = () =>{
        listVideo.forEach(vid => vid.classList.remove('active'));
        video.classList.add('active');
        if(video.classList.contains('active')){
            let src = video.children[0].getAttribute('src');
            mainVideo.src = src;
            let text = video.children[1].innerHTML;
            title.innerHTML =  text;
            

        };
    };
         
        
        });
</script>




<Footer>
       <div class="footerdiv">                                                                                    <!-------------------------Footer Div----------------------->
                             <center><img src="logo.png"  id="footerlogo"></center><br><br>
                             <center><input type="text" id="subfield" placeholder="enter your email address...."><button id="subbtn">SUBSCRIBE</button></center><br><br>
                             <center><h1><i class="fa-brands fa-youtube" class="smi"></i> <i class="fa-brands fa-facebook" ></i> <i class="fa-brands fa-instagram" ></i> <i class="fa-brands fa-twitter"></i> <i class="fa-brands fa-linkedin" ></i></h1></center><br><br><br>
                             <center><h2><i class="fa-solid fa-copyright"></i>Neurake.com</h2></center>
       </div>
       <div style="background:orange; width:100%; height:5px;"></div>
       <div style="background:blue; width:100%; height:5px;"></div>
       <div style="background:green; width:100%; height:5px;"></div>
</Footer>
</body>
</html>

