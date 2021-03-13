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

    <main>
      <section>
        <div>
          <h2>Thank you for your enquiry</h2>
          <p>Thanks for your interest. we have received your message, and we will be in touch shortly.</p>
          <p>Form processor provided by <a href="http://www.inventpartners.com">Invent Partners web design York</a>.</p>
        </div>
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
