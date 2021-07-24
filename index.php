<!DOCTYPE html>
<html>
<title>Ittipon Tana</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="assets/favicon1.ico" type="image/ico">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Montserrat", sans-serif
  }

  .w3-row-padding img {
    margin-bottom: 12px
  }

  /* Set the width of the sidebar to 120px */
  .w3-sidebar {
    width: 120px;
    background: #222;
  }

  /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
  #main {
    margin-left: 120px
  }

  /* Remove margins from "page content" on small screens */
  @media only screen and (max-width: 600px) {
    #main {
      margin-left: 0
    }
  }
</style>

<body class="w3-black">

  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="assets/logo.jpg" style="width:50%">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>ABOUT</p>
    </a>
    <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>PHOTOS</p>
    </a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->
  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
      <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
      <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
      <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    </div>
  </div>

  <!-- Page Content -->
  <div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
      <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Ittipon Tana</h1>
      <p>Programmer and electronic engineer</p>
      <p>ถ้าคุณมองหา โปรแกรมเมอร์ และ วิศวกร ที่ทำงานได้หลากหลายบทบาท ผมน่าจะเป็นตัวเหลือกที่ดี</p>
      <img src="assets/terk1.jpg" alt="boy" class="w3-image" width="992" height="1108">
    </header>

    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
      <h2 class="w3-text-light-grey">My Name</h2>
      <hr style="width:200px" class="w3-opacity">
      <p>เป็นวิศกรอิเล็กทรอนิกส์ และ โปรแกรมเมอร์ ที่ชื่อนชอบการเขียนโปรแกรม ชอบความออโตเมติก ชอบหุ่นยนต์ ติดตามเทคโนโลยีตลอดเวลา ถ้ามีของใหม่ พร้อมเล่นพร้อมทดลอง
        ไม่ยึดติดกับระบบ มองภาษาคอมพิวเตอร์เป็นแค่เครื่องมือ เป้าหมายคือ เป็นโปรแกรมเมอร์ที่เก่งที่สุดในจังหวัดน่าน อะไรก็ได้ที่โปรแกรมได้ อันนั้นคืองานขอ
        ผม
      </p>
      <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
      <p class="w3-wide">engineering</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:95%"></div>
      </div>
      <p class="w3-wide">management</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:85%"></div>
      </div>
      <p class="w3-wide">Windows Form Programming</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:95%"></div>
      </div>
      <p class="w3-wide">Web Programming </p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:85%"></div>
      </div>
      <p class="w3-wide">Web Design </p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:85%"></div>
      </div>
      <p class="w3-wide">mobile Programming</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:80%"></div>
      </div>
      <p class="w3-wide">Database design</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:85%"></div>
      </div>
      <p class="w3-wide">Api design</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:85%"></div>
      </div>


      <br>
      <br>
      <br>
      <br>


      <div class="w3-black w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <!-- <img src="/w3images/avatar_hat.jpg" style="width:100%" alt="Avatar"> -->

        </div>
        <div class="w3-container">

          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Computer Languages Skills</b></p>
          <p>C++</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">80%</div>
          </div>
          <p>C#</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>VB.net</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">80%</div>
          </div>
          <p>PHP</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">80%</div>
          </div>

          <p>Python</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:70%">
              <div class="w3-center w3-text-white">70%</div>
            </div>
          </div>
          <p>Java</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">
              <div class="w3-center w3-text-white">50%</div>
            </div>
          </div>
          <p>Java script and node.js</script>
          </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:70%">
              <div class="w3-center w3-text-white">70%</div>
            </div>
          </div>
          <p>Go</script>
          </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">
              <div class="w3-center w3-text-white">50%</div>
            </div>
          </div>
          <p>dart on flutter</script>
          </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:60%">
              <div class="w3-center w3-text-white">60%</div>
            </div>
          </div>
          <br>

        </div><br>




        <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
          <div class="w3-quarter w3-section">
            <span class="w3-xlarge">37</span><br>
            Old
          </div>
          <div class="w3-quarter w3-section">
            <span class="w3-xlarge">80+</span><br>
            Skills
          </div>
          <div class="w3-quarter w3-section">
            <span class="w3-xlarge">10 year</span><br>
            experience
          </div>
          <div class="w3-quarter w3-section">
            <span class="w3-xlarge">95+</span><br>
            performance
          </div>
        </div>

        <button class="w3-button w3-light-grey w3-padding-large w3-section">
          <i class="fa fa-download"></i> Download Resume
        </button>

        <h3 class="w3-padding-16 w3-text-light-grey">My salary need</h3>
        <div class="w3-row-padding" style="margin:0 -16px">
          <div class="w3-half w3-margin-bottom">
            <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
              <li class="w3-dark-grey w3-xlarge w3-padding-32">work from home</li>


              <li class="w3-padding-16">
                <h2>฿ 35000</h2>
                <span class="w3-opacity">per month</span>
              </li>
              <li class="w3-light-grey w3-padding-24">
                <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
              </li>
            </ul>
          </div>

          <div class="w3-half">
            <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
              <li class="w3-dark-grey w3-xlarge w3-padding-32">in office</li>

              <li class="w3-padding-16">
                <h2>฿ 50000</h2>
                <span class="w3-opacity">per month</span>
              </li>
              <li class="w3-light-grey w3-padding-24">
                <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
              </li>
            </ul>
          </div>
          <!-- End Grid/Pricing tables -->
        </div>
      </div>
      <!-- Testimonials -->
    
<!-- Right Column -->

    
    
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
      <div class="w3-container">
        <h5 class="w3-opacity"><b>programmer</b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
        <p>windows from application and web Traceability</p>
        <hr>
      </div>
      <div class="w3-container">
        <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
        <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
        <hr>
      </div>
      <div class="w3-container">
        <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
      </div>
   

    
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
      <div class="w3-container">
        <h5 class="w3-opacity"><b>W3Schools.com</b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
        <p>Web Development! All I need to know in one place</p>
        <hr>
      </div>
      <div class="w3-container">
        <h5 class="w3-opacity"><b>London Business School</b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
        <p>Master Degree</p>
        <hr>
      </div>
      <div class="w3-container">
        <h5 class="w3-opacity"><b>School of Coding</b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
        <p>Bachelor Degree</p><br>
      </div>
    

  <!-- End Right Column -->
 

    <!-- Portfolio Section -->
    <div class="w3-padding-64 w3-content" id="photos">
      <h2 class="w3-text-light-grey">My Photos</h2>
      <hr style="width:200px" class="w3-opacity">

      <!-- Grid for photos -->


      <?php
      $dir_name = "picture/";
      $images = glob($dir_name . "*.jpg");
      foreach ($images as $image) {
      ?>
        <div class="w3-row-padding" style="margin:0 -16px">
          <?php
          echo '<img src="' . $image . '" style="width:50%" ><br />';

          $text = substr($image, 8);
          $pos = strpos($text, '.');
          $text1 = substr($text, 0, $pos);
          echo '<h4>' . $text1 . '</h4><br />';
          ?>
        </div>
      <?php
      }


      ?>




    </div>

    <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
      <h2 class="w3-text-light-grey">Contact Me</h2>
      <hr style="width:200px" class="w3-opacity">

      <div class="w3-section">
        <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> nan, Thai</p>
        <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +66 0626628551</p>
        <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: ittipon.tana.terk@gmail.com</p>
      </div><br>
      <p>Let's get in touch. Send me a message:</p>

      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-light-grey w3-padding-large" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>

    </div>

    <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
      <a  href="https://www.facebook.com/ittipon.tana" target="_blank" class="w3-hover-text-green"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
      
      <i class="fab fa-github"></i>

 
      

    </footer>


  </div>

</body>

</html>