<html>
    <head>

<style>
@import url("https://fonts.googleapis.com/css?family=Inconsolata:400,700");
body{
  padding: 0;
  margin: 0;
  background-color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh
}
h1{
  color: #484848;
  font-size: 50px;
  font-weight: bold;
  font-family: monospace;
  letter-spacing: 7px;
  cursor: pointer
}
h1 span{
  transition: .5s linear
}
h1:hover span:nth-child(1){
  margin-right: 5px
}
h1:hover span:nth-child(1):after{
  content: "";
}
h1:hover span:nth-child(2){
  margin-left: 30px
}
h1:hover span{
  color: #fff;
  text-shadow: 0 0 10px #fff,
               0 0 20px #fff, 
               0 0 40px #fff;
}
/*made with ❤, by qpi65*/





body {
  font-family: 'Inconsolata', sans-serif;
  background: #2a364f;
}

h1{
  text-align: center;
  color: rgba(255,255,255,0.8);
}

.credit{
  text-align: center;
  color: rgba(255,255,255,0.4);

}

.content{
  padding-top: 45px;
  padding-bottom: 20px;
}

.button_container{
    width: 176px;
    margin: 0 auto;
    margin-top: 30px;
    padding-top: 40px;
}

.button_su{
  overflow: hidden;
  position: relative;
  display: inline-block;
  border-radius: 3px;
  margin-bottom: 30px;
}

.su_button_circle{
  background-color: red;
  border-radius: 1000px;
  position: absolute;
  left:0;
  top:0;
  width: 0px;
  height: 0px;
  margin-left: 0px;
  margin-top: 0px;
  pointer-events: none;
  /*animation-timing-function: ease-in-out; */
}

.button_su_inner{
    display: inline-block;
    background: #F8B627;
    color: #F4F4F4;
    font-size: 16px;
    font-weight: normal;
    width: 132px;
    text-align: center;
    border-radius: 3px;
    transition: 400ms;
    text-decoration: none;
    padding: 22px;
    z-index: 100000;
}

.button_text_container{
   position:relative;
   z-index: 10000;
}

.explode-circle {
   animation: explode 0.5s forwards;

}

.desplode-circle{
   animation: desplode 0.5s forwards;
}

@keyframes explode {
  0% {
    width: 0px;
    height: 0px;
    margin-left: 0px;
    margin-top: 0px;
    background-color: rgba(42, 53, 80,0.2);
  }
  100% {
    width: 400px;
    height: 400px;
    margin-left: -200px;
    margin-top: -200px;
    background-color: rgba(20, 180, 87,0.8);
  }
}

@keyframes desplode {
  0% {
    width: 400px;
    height: 400px;
    margin-left: -200px;
    margin-top: -200px;
    background-color: rgba(20, 180, 87,0.8);
  }
  100% {
    width: 0px;
    height: 0px;
    margin-left: 0px;
    margin-top: 0px;
    background-color: rgba(129, 80, 108,0.6);
  }
}



</style>
    </head>
    <body>
      <h1><span>Page  </span>for <span>Exam Controllers</span></h1>





      
      <div class="content">
      
        <div class="button_container">
            <div class="button_su">
              <span class="su_button_circle">
              </span>
              <a href="login_3.php" class="button_su_inner">
                <span class="button_text_container">
                  Sign In
                </span>
              </a>
            </div>
      
            <div class="button_su">
              <span class="su_button_circle">
              </span>
              <a href="register_3.php" class="button_su_inner">
                <span class="button_text_container">
                  Sign Up
                </span>
              </a>
            </div>
            <div class="button_su">
              <span class="su_button_circle">
              </span>
              <a href="First_page.php" class="button_su_inner">
                <span class="button_text_container">
                  Back
                </span>
              </a>
            </div>
           
      
            
        </div>
        <p class="credit">By Rs Aoyon</p>
      </div>
      
    </body>
</html>
    
