<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title> An About Us Page | CoderGirl </title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    .wrapper{
      height: 100%;
      width: 300px;
      position: relative;
    }
    .wrapper .menu-btn{
      position: absolute;
      left: 20px;
      top: 10px;
      background: #4a4a4a;
      color: #fff;
      height: 45px;
      width: 45px;
      z-index: 9999;
      border: 1px solid #333;
      border-radius: 5px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }
    #btn:checked ~ .menu-btn{
      left: 247px;
    }
    .wrapper .menu-btn i{
      position: absolute;

      font-size: 23px;
      transition: all 0.3s ease;
    }
    .wrapper .menu-btn i.fa-times{
      opacity: 0;
    }
    #btn:checked ~ .menu-btn i.fa-times{
      opacity: 1;
      transform: rotate(-180deg);
    }
    #btn:checked ~ .menu-btn i.fa-bars{
      opacity: 0;
      transform: rotate(180deg);
    }
    #sidebar{
      position: fixed;
      background: #404040;
      height: 100%;
      width: 270px;
      overflow: hidden;
      left: -270px;
      transition: all 0.3s ease;
    }
    #btn:checked ~ #sidebar{
      left: 0;
    }
    #sidebar .title{
      line-height: 65px;
      text-align: center;
      background: #333;
      font-size: 25px;
      font-weight: 600;
      color: #f2f2f2;
      border-bottom: 1px solid #222;
    }
    #sidebar .list-items{
      position: relative;
      background: #404040;
      width: 100%;
      height: 100%;
      list-style: none;
    }
    #sidebar .list-items li{
      padding-left: 40px;
      line-height: 50px;
      border-top: 1px solid rgba(255,255,255,0.1);
      border-bottom: 1px solid #333;
      transition: all 0.3s ease;
    }
    #sidebar .list-items li:hover{
      border-top: 1px solid transparent;
      border-bottom: 1px solid transparent;
      box-shadow: 0 0px 10px 3px #222;
    }
    #sidebar .list-items li:first-child{
      border-top: none;
    }
    #sidebar .list-items li a{
      color: #f2f2f2;
      text-decoration: none;
      font-size: 18px;
      font-weight: 500;
      height: 100%;
      width: 100%;
      display: block;
    }
    #sidebar .list-items li a i{
      margin-right: 20px;
    }
    #sidebar .list-items .icons{
      width: 100%;
      height: 40px;
      text-align: center;
      position: absolute;
      bottom: 100px;
      line-height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    #sidebar .list-items .icons a{
      height: 100%;
      width: 40px;
      display: block;
      margin: 0 5px;
      font-size: 18px;
      color: #f2f2f2;
      background: #4a4a4a;
      border-radius: 5px;
      border: 1px solid #383838;
      transition: all 0.3s ease;
    }
    #sidebar .list-items .icons a:hover{
      background: #404040;
    }
    .list-items .icons a:first-child{
      margin-left: 0px;
    }
    .content{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      color: #202020;
      z-index: -1;
      width: 100%;
      text-align: center;
    }
    .content .header{
      font-size: 45px;
      font-weight: 700;
    }
    .content p{
      font-size: 40px;
      font-weight: 700;
    }
h1,
h2,
h3,
h4,
h5,
h6 {}
a,
a:hover,
a:focus,
a:active {
    text-decoration: none;
    outline: none;
}

a,
a:active,
a:focus {
    color: #6f6f6f;
    text-decoration: none;
    transition-timing-function: ease-in-out;
    -ms-transition-timing-function: ease-in-out;
    -moz-transition-timing-function: ease-in-out;
    -webkit-transition-timing-function: ease-in-out;
    -o-transition-timing-function: ease-in-out;
    transition-duration: .2s;
    -ms-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -webkit-transition-duration: .2s;
    -o-transition-duration: .2s;
}

ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
img {
max-width: 100%;
height: auto;
}
section {
    padding: 60px 0;
   /* min-height: 100vh;*/
}

.sec-title{
position:relative;
z-index: 1;
margin-bottom:60px;
}

.sec-title .title{
position: relative;
display: block;
font-size: 18px;
line-height: 24px;
color: #ff2222;
font-weight: 500;
margin-bottom: 15px;
}

.sec-title h2{
position: relative;
display: block;
font-size:40px;
line-height: 1.28em;
color: #fff;
font-weight: 600;
padding-bottom:18px;
}

.sec-title h2:before{
position:absolute;
content:'';
left:0px;
bottom:0px;
width:50px;
height:3px;
background-color:#d1d2d6;
}

.sec-title .text{
position: relative;
font-size: 16px;
line-height: 26px;
color: #848484;
font-weight: 400;
margin-top: 35px;
}

.sec-title.light h2{
color: #ffffff;
}

.sec-title.text-center h2:before{
left:50%;
margin-left: -25px;
}

.list-style-one{
position:relative;
}

.list-style-one li{
position:relative;
font-size:16px;
line-height:26px;
color: #222222;
font-weight:400;
padding-left:35px;
margin-bottom: 12px;
}

.list-style-one li:before {
content: "\f058";
position: absolute;
left: 0;
top: 0px;
display: block;
font-size: 18px;
padding: 0px;
color: #ff2222;
font-weight: 600;
-moz-font-smoothing: grayscale;
-webkit-font-smoothing: antialiased;
font-style: normal;
font-variant: normal;
text-rendering: auto;
line-height: 1.6;
font-family: "Font Awesome 5 Free";
}

.list-style-one li a:hover{
color: #44bce2;
}

.btn-style-one{
position: relative;
display: inline-block;
font-size: 17px;
line-height: 30px;
color: #ffffff;
padding: 10px 30px;
font-weight: 600;
overflow: hidden;
letter-spacing: 0.02em;
background-color: #ff2222;
}

.btn-style-one:hover{
background-color: #001e57;
color: #ffffff;
}
.about-section{
position: relative;
padding: 120px 0 70px;
}

.about-section .sec-title{
margin-bottom: 45px;
}

.about-section .content-column{
position: relative;
margin-bottom: 50px;
}

.about-section .content-column .inner-column{
position: relative;
padding-left: 30px;
}

.about-section .text{
margin-bottom: 40px;
font-size: 16px;
line-height: 26px;
color: #848484;
font-weight: 400;
}

.about-section .list-style-one{
margin-bottom: 45px;
}

.about-section .btn-box{
position: relative;
}

.about-section .btn-box a{
padding: 15px 50px;
}

.about-section .image-column{
position: relative;
}

.about-section .image-column .text-layer{
position: absolute;
right: -110px;
top: 50%;
font-size: 325px;
line-height: 1em;
color: #ffffff;
margin-top: -175px;
font-weight: 500;
}

.about-section .image-column .inner-column{
position: relative;
padding-left: 120px;
padding-bottom: 125px;
}

.about-section .image-column .inner-column:before{
position: absolute;
left: -5px;
top: 65px;
height: 500px;
width: 500px;
background-image:url(https://i.ibb.co/fxJ1jtC/about-circle-1.png);
content: "";
}

.about-section .image-column .image-1{
position: relative;
}

.about-section .image-column .image-2{
position: absolute;
left: 0;
bottom: 0;
}

.about-section .image-column .image-2 img,
.about-section .image-column .image-1 img{
box-shadow: 0 30px 50px rgba(8,13,62,.15);
}

.about-section .image-column .video-link{
position: absolute;
left: 70px;
top: 170px;
}

.about-section .image-column .video-link .link{
position: relative;
display: block;
font-size: 22px;
color: #191e34;
font-weight: 400;
text-align: center;
height: 100px;
width: 100px;
line-height: 100px;
background-color: #ffffff;
border-radius: 50%;
box-shadow: 0 30px 50px rgba(8,13,62,.15);
-webkit-transition: all 300ms ease;
-moz-transition: all 300ms ease;
-ms-transition: all 300ms ease;
-o-transition: all 300ms ease;
transition: all 300ms ease;
}

.about-section .image-column .video-link .link:hover{
background-color: #191e34;
color: #fff;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Poppins;
}
.home-container{
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;

}
.profile-card{
    position: relative;
    width: 220px;
    height: 220px;
    background-color: #fff;
    padding: 30px;
    border-radius: 50%;
    box-shadow: -5px 8px 45px rgba(51, 51, 51, 0.126);
    transition: all .4s;
    margin: 0 20px;
}
.profile-card:hover{
    border-radius: 10px;
    height: 260px;
}
.profile-card .img{
    position: relative;
    width: 100%;
    height: 100%;
}
.profile-card:hover img{
    border-radius: 10px;
    transform: translateY(-70px);
}
.img img{
    object-fit: fill;
    width: 100%;
    border-radius: 50%;
    transition: all .4s;
    z-index: 99;
}
.caption{
    text-align: center;
    transform: translateY(-90px);
    opacity: 0;
    pointer-events: none;
    transition: all .5s;
}
.profile-card:hover .caption{
    opacity: 1;
    pointer-events: all;
}
.caption h3{
    font-size: 21px;
    color: #610808;
    font-weight: 600;
}
.caption p{
    font-size: 15px;
    font-weight: 500;
    margin: 2px 0 12px 0;
}
.caption .social-links i{
    font-size: 21px;
    margin: 0 3px;
    cursor: pointer;
    color: #333;
    transition: all .4s;
}
.caption .social-links i:hover{
    color: #0c52a1;
}

</style>
</head>
<body>
   
 <div class="example" style="background-color: #000;">
    <div class="wrapper">
        <input type="checkbox" id="btn" hidden>
        <label for="btn" class="menu-btn">
          <i class="fas fa-bars"></i>
          <i class="fas fa-times"></i>
        </label>
        <nav id="sidebar">
          <div class="title">Side Menu</div>
          <ul class="list-items">
            <li><a href="#aims">Aims</a></li>
            <li><a href="#purpose">Purpose</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#strength">Strength</a></li>
            <li><a href="#weakness">Weakness</a></li>
            
          </ul>
        </nav>
      </div>
     

    <section class="about-section" id="aims" >
        <div class="container">
            <div class="row">                
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Our Aims</span>
                            <h2>Blood Blends<br>Vampire Bar</h2>
                        </div>
                        <div class="text">Our vampire-friendly smoothie bar is dedicated to promoting health and vitality within a safe and inclusive space. We offer a diverse range of nutritious smoothies tailored to vampire dietary needs and preferences. Our goal is to foster community and camaraderie by providing welcoming environments for socialising and connecting with like-minded individuals.

                            At our bar, we encourage innovation with a continuous development of creative smoothie recipes that captivate vampire tastes. We prioritize environmental responsibility by sourcing ingredients responsibly, minimizing waste, and implementing eco-friendly practices to reduce our impact.
                            
                            Additionally, we provide educational resources to empower vampires with knowledge about nutrition and healthy eating habits. Join us in embracing a healthier, more vibrant lifestyle tailored to the unique needs of our vampire patrons!
                            </div>
                      
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12" >
                    <div class="inner-column wow fadeInLeft" style="margin-left: 160px;">
                        <figure class="image-1" >
                            <a href="#" class="lightbox-image" data-fancybox="images">
                                <img src="https://img.freepik.com/free-photo/digital-art-moon-tree-wallpaper_23-2150918727.jpg?t=st=1714857302~exp=1714860902~hmac=2fd8d34c596ca1791ded96c431fa05d07927196e6adbd0c14d222a7bd0c005e3&w=360" alt="" style="border-radius: 5px;height:540px;">
                            </a>
                        </figure>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="about-section" id="purpose" style="margin-left: 370px;">
        <div class="container">
            <div class="row">
                <!-- Text Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-lg-1 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Purposes</span>
                            <h2>Blood Blends<br>Vampire Bar</h2>
                        </div>
                        <div class="text">Our smoothie bar is dedicated to addressing the unique needs of vampires by providing a specialized menu tailored to their dietary requirements and preferences. We prioritize enhancing the health and vitality of vampire customers through nutritious smoothie options that promote overall well-being. Our goal is to create inclusive spaces where vampires feel welcomed and valued, fostering a sense of belonging within the community. We facilitate social connections by offering venues for vampires to gather, socialize, and build meaningful relationships. Through continuous innovation, we explore new flavors and ingredients to keep our vampire customers engaged and excited about their beverage choices. Additionally, we are committed to promoting sustainability by implementing eco-friendly practices to minimize our environmental impact. We empower vampires through education by offering resources and information to help them make informed choices about their nutrition and overall health. At our smoothie bar, we strive to be a beacon of health, community, and sustainability for our vampire clientele.

                        </div>
                    </div>
                </div>
    
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12 order-lg-2 order-1">
                    <div class="inner-column wow fadeInRight">
                        <figure class="image-1">
                            <a href="#" class="lightbox-image" data-fancybox="images">
                                <img src="https://img.freepik.com/free-photo/grunge-halloween-background-with-haunted-house_1048-3113.jpg?t=st=1714860072~exp=1714863672~hmac=467ba47c10877b84c8e386b447b1d57fbfcead5c5d9ff4f549616622123b667b&w=740" alt="" style="border-radius: 5px;height:570px;margin-top:130px;width:280px;">
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h2 style="text-align:center;margin-left:150px;font-size: 40px;
    line-height: 1.28em;
     color: #fff;
    font-weight: 600;
    padding-bottom: 18px;">Our Team</h2>
  
    <div class="home-container" style="margin-left: 130px;margin-top:-110px;" id="team">
      
        <div class="profile-card">
            <div class="img">
                <img src="../images/ivan.webp">
            </div>
            <div class="caption">
                <h3>Ivan Begue</h3>
                <p>Back End Developer</p>
                <div class="social-links">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
        <div class="profile-card" id="strength">
            <div class="img">
                <img src="../images/prishnee.webp">
            </div>
            <div class="caption">
                <h3>Prishnee Seegolam</h3>
                <p>Back End Developer</p>
                <div class="social-links">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
        <div class="profile-card" id="weakness">
            <div class="img">
                <img src="../images/nitisha.webp">
            </div>
            <div class="caption">
                <h3>Rajudu Nitisha</h3>
                <p>Front End Developer</p>
                <div class="social-links">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>

        <div class="profile-card">
            <div class="img">
                <img src="../images/avrisha.webp">
            </div>
            <div class="caption">
                <h3>Avrisha Dewkurun</h3>
                <p>Front End Developer</p>
                <div class="social-links">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
    </div>

    <h2 style="text-align:center;margin-left:150px;font-size: 40px;
    line-height: 1.28em;
     color: #fff;
    font-weight: 600;
    padding-bottom: 18px;">Strength</h2>

    <div class="card" style="width: 18rem;margin-left:750px;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <br>
      <br>
      <br>
      <h2 style="text-align:center;margin-left:150px;font-size: 40px;
      line-height: 1.28em;
       color: #fff;
      font-weight: 600;
      padding-bottom: 18px;">Weakness</h2>
      <div class="card" style="width: 18rem;margin-left:750px;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

   </div>
 </div>
    <!-- Other sections with their respective content -->

    <script>
        // JavaScript for smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
          anchor.addEventListener('click', function(e) {
            e.preventDefault();
      
            document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
            });
          });
        });
      </script>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>