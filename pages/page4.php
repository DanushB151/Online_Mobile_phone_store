<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>page1</title>
    <link rel="stylesheet" href="page4.css">
  </head>
  <body>
          <div class="main">
                <nav>
                  <div class="logo">
                    <img src="pic/huawei.png"></div>
                    <div class="nav-links">
                      <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Phone</a></li>
                        <li><a href="#">Accesories</a></li>
                        <li><a href="#">Cart</a></li>
                      </ul>

                    </div>
                </nav>

                  <div class="information">
                    <div class="overlay">

                    </div>
                    <img src="pic/p20.png" class="mobile">
                    <div id="circle">
                      <div class="feature one">
                          <img src="pic/camera.png">
                            <div>
                                <h1>Camera</h1>
                                <p>30MP,Quard Camera </br>Wide Angle Lens, 10160px, </p>
                            </div>
                      </div>
                      <div class="feature two">
                          <img src="pic/processor.png">
                          <div>
                              <h1>processor</h1>
                              <p>MaliG-77</br>
                                 CPU	Octa-core 2.40 GHz </br>
                                 GPU	Mali GPU</p>
                          </div>
                      </div>
                      <div class="feature three">
                          <img src="pic/display.png">
                          <div>
                              <h1>display</h1>
                              <p>Super Retina OLED, HDR10</br>
                              7.8 inches</br>
                            1225 x 2625 pixels</p>
                          </div>
                      </div>
                      <div class="feature four">
                          <img src="pic/battery.png">
                          <div>
                              <h1>battery</h1>
                              <p>Li-Ion 5000 mAh</br>
                                 non-removable </p>
                          </div>
                      </div>
                      </div>
                      </div>
                      <div class="controls">
                        <img src="pic/arrow.png" id="upBtn">
                          <h3>Features</h3>
                          <img src="pic/arrow.png" id="downBtn">
                      </div>

                    </div>

                <script>
                    var circle = document.getElementById("circle");
                    var upBtn = document.getElementById("upBtn");
                    var downBtn = document.getElementById("downBtn");

                    var rotateValue = circle.style.transform;
                    var rotateSum;

                    upBtn.onclick =function()
                    {
                      rotateSum = rotateValue + "rotate(-90deg)";
                      circle.style.transform = rotateSum;
                      rotateValue = rotateSum;
                    }
                    downBtn.onclick =function()
                    {
                      rotateSum = rotateValue + "rotate(90deg)";
                      circle.style.transform = rotateSum;
                      rotateValue = rotateSum;
                    }
                  </script>


  </body>
</html>
