<style type="text/css">
* {
	margin: 0;
	padding: 0;
	border: 0;
}

article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
  display:block;
}

.desktop-header, .desktop-menu, .author-school {
	display: none;
}

h1, h1 a {
	font-family: 'Goldman', arial, cursive;
	color: #142056;
	font-size: 3em;
}

h2, h3, h4, h5, h6, p, ul, a, figcaption {
	font-family: 'Inter', arial, sans-serif;
	text-decoration: none;
}

.mobile-header, .genres h2, .featured-reviews h2 {
  text-align: center;
  padding: 20px 1%;
}

.confirm h2 {
    padding: 20px 5px;
    margin: 0 10px;
}

.confirm p {
    margin: 10px 0;
    padding: 15px;
}
/* ***************************** FOR STICKY FOOTER *******************************/
.site {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}

.site-content {
  flex: 1;
}
/* ***************************** FOR STICKY FOOTER *******************************/

/* *****************************Hamburger Menu Start *******************************/
.hamburger{
  background:none;
  position:absolute;
  top:0;
  right:0;
  line-height:45px;
  padding:5px 15px 0px 15px;
  color:#999;
  border:0;
  font-size:1.4em;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.cross{
  background:none;
  position:absolute;
  top:0px;
  right:0;
  padding:7px 15px 0px 15px;
  color:#999;
  border:0;
  font-size:3em;
  line-height:65px;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.menu{z-index:1000000; font-weight:bold; font-size:0.8em; width:100%; background:#f1f1f1;  position:absolute; text-align:center; font-size:12px;}
.menu ul {margin: 0; padding: 0; list-style-type: none; list-style-image: none;}
.menu li {display: block;   padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu li:hover{display: block;    background:#ffffff; padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu ul li a { text-decoration:none;  margin: 0px; color:#666;}
.menu ul li a:hover {  color: #666; text-decoration:none;}
.menu a{text-decoration:none; color:#666;}
.menu a:hover{text-decoration:none; color:#666;}

/* *****************************Hamburger Menu End*******************************/

footer {
  padding: 10px;
  background-color: #142056;
  text-align: center;
}

footer ul li {
  list-style: none;
  display: inline;
  padding: 0 5px;
  font-size: 2em;
}

footer ul li a {
	color: #ffffff;
}

/******************MIN-WIDTH START 620px **************************/
@media (min-width: 620px) {
	.desktop-header, .desktop-menu {
		display: block;
		text-align: center;
	}

	.desktop-header {
		padding: 20px 0;
	}

	.desktop-menu ul {
		list-style-type: none;
    padding: 20px 0;
    border-bottom: solid black 2px;
    border-top: solid black 2px;
	}

	.desktop-menu ul li {
		display: inline;
		padding: 0 5%;
	}

	.desktop-menu ul li a {
		text-decoration: none;
		color: #000000;
		font-weight: bold;
	}

	.desktop-menu ul li a:hover {
    text-decoration: underline;
}

	.mobile-header, .menu, .hamburger, .cross {
		display: none;
	}

	.confirm h2 {
    border-bottom: solid black 1px;
    max-width: 670px;
    margin-left: 20px;
    padding: 20px 0;
}

.confirm p {
    margin-left: 5px;
}

}
/******************MIN-WIDTH END 620px **************************/

/******************MIN-WIDTH START 720px **************************/
@media (min-width: 720px) {

	footer ul li {
    font-size: 1.5em;
	}

	.author-school {
    display: block;
    color: #ffffff;
		padding-top: 5px;
}

	.footer-elements {
		display: flex;
		justify-content: space-between;
}

}
/******************MIN-WIDTH END 720px **************************/

/******************MIN-WIDTH START 1040px **************************/
@media (min-width: 1040px) {
	.frame {
		background-color: #b0b0b0;
	  padding: 55px 3% 0;
	}

	header, main {
		background-color: #ffffff
	}
}
/******************MIN-WIDTH END 1040px **************************/

</style>

<!--- Google Fonts --->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Goldman&family=Inter&display=swap" rel="stylesheet">

<!--- FontAwesome --->
<script src="https://kit.fontawesome.com/4f19959d2d.js" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<body>
  <body class="site frame">

		<header>

			<button class="hamburger">&#9776;</button>
  		<button class="cross">&#735;</button>

			<!-- Mobile View -->
			<h1 class="mobile-header">S.F.H</h1>

			<nav class="menu">
			  <ul>
					<li><a href="about.html">About</a></li>
					<li><a href="menu.html">Menu</a></li>
					<li><a href="contact.html">Contact</a></li>
			  </ul>
			</nav>

			<!-- Desktop View -->
			<a href="index.html"><h1 class="desktop-header">S.F.H Reviews</h1></a>

			<nav class="desktop-menu">
				<ul>
					<li><a href="about.html">About</a></li>
					<li><a href="menu.html">Menu</a></li>
	        <li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</header>

    <main class="site-content">
      <section>
        <div class="confirm">
          <h2 class="thankyou">Missing fields</h2>
        	<p>Sorry, you have not completed all of the required fields.</p>
        	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>
        </div>
      </section>

      <section>
        <ul>
        <?php
        	for($i=0; $i<count($this->missing_required_fields); $i++){
        		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
        	}
        ?>
        </ul>
      </section>
    </main>

    <footer>

      <div class="footer-elements">
        <p class="author-school">Created By: Connie Standish | University of Florida</p>
        <ul class="social-media">
          <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a></li>
          <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://www.goodreads.com/"><i class="fab fa-goodreads"></i></a></li>
        </ul>
      </div>

    </footer>

    <script src="js/hamburger.js"></script>

    </body>
