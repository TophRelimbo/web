<!DOCTYPE html>
	<html>
		<head>
	<title>
		Contact Us
	</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		</head>
			<body>
<nav>  
        <ul>
            
            <li><a href="index.php">Home</a></li>
            <li><a href="user.php">Book Info</a></li>
            <li><a href="search.php">User Info</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a  href="logout.php"> Sign Out</a></li>
        </ul>
    </nav>
<br>
        
<main>

    <div class="card">

      <div class="card1">


        <img src="Tope.jpg" alt="Picture">

          <div class="profilet">
            <h1 style="font-family: 'Roboto', sans-serif;">Christopher P. Relimbo</h1>
            <span class="br"></span>
            <hr color="#c4c4c4">
            <span class="br"></span>
            <p style="text-align:justify; font-family: 'Roboto', sans-serif;" >I'm a second-year college student at Northwestern Visayan Colleges, 21 years of age. I'm taking Bachelor of Science in Computer Science.</p>

          </div>


          <div class="mainbody">

              <div class="skills">

                  <h3>SKILLS</h3>
                  <span class="br"></span>

                <ul>
                  <li>MS Word</li>
                  <li>Social&nbsp;Media</li>
                  <li>HTML/CSS</li>
                  <li>Painter</li>
                  <li>Martial&nbsp;Artist</li>
                </ul>

              </div>

              <div class="line"></div>

              <div class="hobbies">

                <h3>HOBBIES</h3>
                <span class="br"></span>

                <ul>
                  <li>Games</li>
                  <li>Animes</li>
                  <li>Coding</li>
                  <li>Movies</li>
                  <li>Tiktok</li>
                </ul>
              </div>

          </div>

            <div class="socmed">
              <a href="https://www.facebook.com/TophRelimbo"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.messenger.com/t/100003757335571"><i class="fa-brands fa-facebook-messenger"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.tiktok.com/@tophrelimbo"><i class="fa-brands fa-tiktok"></i></a>
              <a href="#"><i class="fa-solid fa-envelope"></i></a>
            </div>

      </div>
      

  </main>

<style>
	
*{
  margin:0;
  padding:0;
}
nav form{
  text-align: right;
}
nav{
  width: 100%;
  height: 50px;
  background-color: #0005;
  line-height: 50px;
}
nav ul{
  float: right;
  margin-right: 30px;
}
nav ul li{
  list-style-type: none;
  display: inline-block;
  transition: 0.7s all;
}
nav ul li:hover{
	background: linear-gradient(60deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
}
nav ul li a{
  text-decoration: none;
  color: #fff;
  padding: 10px;
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

		.glow-on-hover2 {
    width: 100px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 5px;
}

.glow-on-hover2:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover2:active {
    color: #000
}

.glow-on-hover2:active:after {
    background: transparent;
}

.glow-on-hover2:hover:before {
    opacity: 1;
}

.glow-on-hover2:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
  animation: gradient 15s ease infinite;
    left: 0;
    top: 0;
    border-radius: 5px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
  body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}
@import url('https://fonts.googleapis.com/css2?family=Zeyada&display=swap');

main{
    justify-content: center;
    background-image: url(./img/bg.jpg);
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}
.card{
    height: 100vh;
    width: 100%;
}
main .card1{
    width: 450px;
    height: 500px;
    border-radius: 2%; 
    position: relative;
    border: 1px solid rgb(96, 126, 151);
    background-color: rgba(0, 0, 0, .3);
    box-shadow: 0px 0px 700px 50px transparent;
}
.card, .card1{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
img{
    left: 50%;
    top: -70px;
    transform: translate(-50%);
    border-radius: 50%;
    width: 150px;
    height: 150px;
    cursor: pointer;
    position:absolute;
    border: 1px solid rgb(96, 126, 151);
}
.card1, .profilet{
    display: flex;
    align-items: center;
    justify-content: center;
}
.profilet{
    color:#c4c4c4;
    margin-top: 50px;
    margin-left:50px;
    margin-right: 50px;
    flex-direction: column;
}
.line {
    display: flex;
    align-items: center;
    border-left: 2px solid #c4c4c4;
    height: 100px;
    opacity: .5;
    margin-top: 40px;
    border-radius: 50%;
}
hr{
    height: 2px;
    width: 390px;
    opacity: .5;
    margin: 5px;

}
.card1, .mainbody{
    display: flex;
    align-items: center;
    justify-content: center;
    color:#c4c4c4;
}
.skills, .hobbies{
    margin-right: 80px;
    margin-left: 80px;
    margin-top: 20px;
}

.br {
    display: block;
    margin-bottom: 0.4em;
}
.socmed{
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-top: 20px;
}
i{
    font-size: 40px;
    cursor: pointer;
    transition: .4s;
}
i:hover{
    color: rgb(28, 199, 199);
    transform: scale(1.5);
}
a{
    color: rgb(96, 126, 151);
    margin: 20px;
}
</style>

</body>
</html>
