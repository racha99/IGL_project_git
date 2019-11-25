<!DOCTYPE html>
    <html lang="en">
    <body>
    <div class="container">
      <header class="slideRight">
        <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
        <ul id="navToggle" class="burger slideRight">
          <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <h1><a href="#">Esi Admin Manager </a></h1>
      </header>
      <nav class="slideLeft">
        <ul>
          <li><a href="http://127.0.0.1:8000/" class="active"><i class="dgicon-home"></i> Home</a></li>
          <li><a href="http://127.0.0.1:8000/ajout"><i class="dgicon-users"></i> Login</a></li>
          <li><a href="#"><i class="dgicon-tools"></i> A propos</a></li>
          <li><a href="#"><i class="dgicon-vcard"></i> Contactez nous </a></li>
          
        </ul>
      </nav>
      <div class="content slideRight">
        <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
        <ul class="responsive">
          <li class="header-section">
		  <article class="card">

<aside class="card__image-container">


	<img class="card__image" src="image/lklk.jpg" width ='720px' height=440px'>

</aside>

<section class="card__contents">

	

		<h1 ><font size="10" color="#dfaf2c"><i> Welcome</i></font></h1>
<br>
<br>
<br>
<br>

	<section class="card__body">
		<p><font size="5" color="#0131b4"><i>hi this is our web application og tp IGL </i></font></p>
		<p><font size="5" color="#0131b4"><i>please press the button above to get access to our menu </i></font></p>
	</section>

	<footer class="card__footer">

		<p> <font color="#0131b4"><i>Oued semar , alger</i></font> </p>

	</footer>

</section>

</article>
          </li>
          <li class="body-section">
          </li>
        </ul>
      </div>
    </div>
    </body>
   
   <style>
   
  

/* Add a background color and some padding around the form */


/*
=====
DEMO
=====
*/



body{
  font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Open Sans, Ubuntu, Fira Sans, Helvetica Neue, sans-serif;
  font-size: 1.6rem;
 
  min-height: 100vh;
  display: flex;  
  flex-direction: column;
}



/*
=====
LinkedIn
=====
*/

.linkedin{
  width: 100%;
  background-color: #f0f0f0;
  text-align: center;
  
  position: absolute;
  top: 0;
  left: 0;
}

.linkedin__container{
  max-width: 1000px;
  padding: 10px;
  margin-left: auto;
  margin-right: auto;  
}

.linkedin__text{
  margin-top: 0;
  margin-bottom: 0;
}

.linkedin__link{
  color: #85d1ed;
}
*,
*::before,
*::after {
	box-sizing: border-box; /* Put padding on the inside of elements */
}


body {
	font-family: 'Roboto', sans-serif;
	font-size: 16px; /* Our base font-size */
	line-height: 1.75; /* Line height assumes an almost rem value but is dynamic to the font-size */
	font-weight: 300; /* Use the included weight */
	color: #ff5c5c; /* Don't use black it's too harsh */

	display: flex; /* Set body to be a flex container */
	
	justify-content: center; /* Horizontally centre content in the viewport */

	min-height: 100vh; /* Force vertical centering since the content won't always be taller than the viewport */
	padding: 2rem; /* Using rem values as they don't cascade like em units and are not fixed units like pixels */

/* Multiple Background images, semi-transparent gradient used as a fallback for Edge */
	background-position: center center;
	background-size: cover;
}

@supports(background-blend-mode: multiply) { /* Use a blend mode on the background in browser that support it */

	body {
		background-color : #B0E0E6 ;
		background-blend-mode: multiply; /* Blending the Gradient with the Background Image (can't use black to blend) */
	}

}

h1 {
	font-family: 'Roboto Slab', serif; /* Use google font included as headline font */
	font-weight: 700; /* We've only included 700 */
	font-size: 2.25rem; /* 36px based on 16px base font size */
	line-height: 1.3333; /* Based on 36px font size and a 48px line-height */
}

.card {
	display: flex; /* Sets entrire card element to be a flex container */
	 /* Forces elements to align along the vertical axis */

	 /* Always at least 75% of the viewport */

	background-color: white; /* Set background colour of our content card */
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5); /* Add a subtle drop shadow */
}

	.card__image-container {
		 /* Stop the image getting too big */

		background-image: url('http:image/lklk.jpg');
		background-size: cover; /* Force the background image to cover the container */
		background-position: center center; /* Position the image in the middle */
	}

	.card__image {
		opacity: 0; /* Hide the image in the page, we need the DOM to render it so we have two elements with content in the card */
		pointer-events: none; /* Allows for the image to be clicked through */
	}

	.card__contents {
		display: flex; /* Make element a flex container */
		flex-direction: column; /* Align elements along the vertical axis */

	
	}

	.card__header,
	.card__footer {
		flex: 0 0 auto; /* Don't grow, don't shrink, automatic size (basis) */
	}

	.card__footer {
		margin-top: 2rem; /* Create a bit of space between the content and the footer */
		text-align: right; /* Align the contents of the footer to the right */
	}

	.card__body {
		flex: 1 1 auto; /* Same as flex:1; */
	}

	/* The flex properties of the card header, footer and body allows the footer to always be at the bottom of the container */

	.card__title {
		margin-top: 0; /* Remove margin as there are no elements above it */
	}

@media only screen and (min-width: 53rem) { /* Base-spacing-unit * 30 */

	.card {
		flex-direction: row; /* Align items along the horizontal axis */
		min-height: 60vh;
	}

		.card__image-container {
			flex: 0 1 45%; /* Don't grow, do shrink, 45% width (basis) */
			max-height: inherit; /* Reset the max-height set for mobile */
		}

		.card__contents {
			flex: 1 1 55%; /* Grow, Shrink, 55% width */
			padding: 3rem; /* Increase padding now we have more space to play with */
		}

}



/* Social icons based on: codepen.io/matchboxhero/pen/onzkC */

[class^="icon--"] {
    font-family: 'FontAwesome'; /* Apply icon font */
    font-style: normal; /* Removes the default italics */
}

[class^="social-button"] {
   	display: inline-flex; /* Display elements inline but turn them into a flex-container */
	align-items: center; /* Centrally align the children vertically */
	justify-content: center; /* Centrally align the children horizontally */

   	height: 3rem; /* Create square */
    width: 3rem; /* Create square */

   	font-size: 1.4rem; /* Increase the default font size */
    color: white; /* Make icon white */
    border-radius: 50%; /* Create circle */

    text-decoration: none; /* Remove default underline */

    transition: background-color 150ms ease-in-out; /* Transition background colour on hover */

    
}














/*
/* @group Reset */

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

/* @end */

body {
	background-color: #B0E0E6;
	
	font: 12px "Open Sans", "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
	color: #9aa6af;
	text-rendering: optimizelegibility;
	
	
}
a {text-decoration: none;
	outline:none;}

.container {
	overflow: hidden;
	background-color: #B0E0E6;

/*  Prevents Flickering  */
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	-ms-backface-visibility: hidden;
}




header {
	height: 60px;
	position: relative;
	background-color: #B0E0E6;
}
header h1 a {
	color: #dfaf2c;
	text-align: left;
	font-size: 27px;
	line-height: 60px;
	font-weight: bold;
	padding-left: 20px;
}
header h1 a:hover {color: #2d2321;}

.burger {
	position: absolute;
	float: left;
	padding: 10px;
	top: 4px;
	left: 10px;
	cursor:pointer;
	
	display: none;
}
.burger li {
	width: 30px;
	height: 4px;
	background-color: #dfaf2c;
	border-radius: 3px;
	margin: 5px 0;
}
.burger.open li {background-color: #d9dde1;}

nav {
	position: absolute;
	top: 0;
	right: 5px;
}
nav li {
	float: left;
	
	display: inline-block;
}
nav li a {
	font-size: 14px;
	color: #dfaf2c;
	padding: 22px 15px;
	font-weight:600;
	
	display: block;
}
nav li a:hover {color: #2d2321;}




/*  Removable CSS  */

.header-section,
.body-section,
.footer-section 
{padding: 20px;}

.header-section {background-color: #203748;}
.body-section {background-color:#203748;}
.footer-section {background-color: #203748;}
.placefiller {
	text-align: center;
	font-size: 2em;
	color:#fbf59c;
	border: 1px dashed #fbf59c;
}
.header-section .placefiller {line-height: 300px;color: #FFFFFF;
    font-size: 3em;}
.body-section .placefiller {line-height: 900px;}
.footer-section .placefiller {
	line-height: 200px;
	border: 1px dashed rgba(190, 196, 202, 0.9);
}






@media only screen and (max-width: 780px) {

header {
	height: 60px;
	z-index: 2;
	background-color: #f04949;
	
	position: fixed;
	top: 0;
	right: 0;
	left: 0;
	
		/* starting point */
	-webkit-transform: translate3d(0,0,0);
	-moz-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}
header h1 a {
	color: #ffffff;
	text-align: center;
	padding-left: 70px;
	display: block;
}
.burger {display: block;}


/*  Nav Drawer Layout  */
nav {position: relative;}

nav ul {
	height: 100%;
	overflow-y: auto;
}
nav li {
	display: block;
	float: none;
}
nav li a {
	padding: 21px 25px;
	letter-spacing: 3px;
	font-size: 14px;
}
nav li a.logo {
	display: none;
}
nav li a.active {
	color: #fff;
	background-color: #141e23;
}
nav li a:hover {
	color: #fff;
	background-color: #19252c;
}
nav li:first-child a.active,
nav li:first-child a:hover 
{border-radius: 10px 0 0 0;}

.header-section {margin-top: 60px;}


/* NAVIGATION ANNIMATION */
nav {
	width: 93%;
	height: 100%;
	position: fixed;
	left: 0;
	top: 0;
	margin: 0;
	background-color: #1d2d35;
	border-radius: 8px;
	
	/* starting point */
	opacity: .3;
	-webkit-transform: translate3d(5%,0,0)scale(.97);
	-moz-transform: translate3d(5%,0,0)scale(.97);
	transform: translate3d(5%,0,0)scale(.97);
}

/*Nav Expanding Open Effect*/
nav.open {
	opacity: 1;

	-webkit-transform: translate3d(0,0,0)scale(1);
	-webkit-animation: slideIn .35s ease-in-out;
	
	-moz-transform: translate3d(0,0,0)scale(1);
	-moz-animation: slideIn .35s ease-in-out;
	
	transform: translate3d(0,0,0)scale(1);
	animation: slideIn .35s ease-in-out;
}
@-webkit-keyframes slideIn {
	0%       {opacity: .3;
				-webkit-transform: translate3d(5%,0,0)scale(.97);}
	100%  {opacity: 1;
				-webkit-transform: translate3d(0,0,0)scale(1);}
}
@-moz-keyframes slideIn {
	0%      {opacity: .3;
				-moz-transform: translate3d(5%,0,0)scale(.97);}
	100%  {opacity: 1;
				-moz-transform: translate3d(0,0,0)scale(1);}
}
@keyframes slideIn {
	0%      {opacity: .3;
				transform: translate3d(5%,0,0)scale(.97);}
	100%  {opacity: 1;
				transform: translate3d(0,0,0)scale(1);}
}

/*Nav Shrinking Closed Effect*/
nav.close {
	opacity: .3;
	
	-webkit-transform: translate3d(5%,0,0)scale(.97);
	-webkit-animation: slideOut .3s ease-in-out;
	
	-moz-transform: translate3d(5%,0,0)scale(.97);
	-moz-animation: slideOut .3s ease-in-out;
	
	transform: translate3d(5%,0,0)scale(.97);
	animation: slideOut .3s ease-in-out;
}
@-webkit-keyframes slideOut {
	0%      {opacity: 1;
				-webkit-transform: translate3d(0,0,0)scale(1);}
	100%  {opacity: .3;
				-webkit-transform: translate3d(5%,0,0)scale(.97);}
}
@-moz-keyframes slideOut {
	0%      {opacity: 1;
				-moz-transform: translate3d(0,0,0)scale(1);}
	100%  {opacity: .3;
				-moz-transform: translate3d(5%,0,0)scale(.97);}
}
@keyframes slideOut {
	0%      {opacity: 1;
				transform: translate3d(0,0,0)scale(1);}
	100%  {opacity: .3;
				transform: translate3d(5%,0,0)scale(.97);}
}



/* CONTENT ANNIMATION */
.content {
	/* starting point */
	-webkit-transform: translate3d(0,0,0);
	-moz-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
	z-index: 1;
}

/*Content Sliding Open Effect*/
header.open,
.content.open 
{   
	-webkit-transform: translate3d(240px,0,0);
	-webkit-animation: open .5s ease-in-out;
	
	-moz-transform: translate3d(240px,0,0);
	-moz-animation: open .5s ease-in-out;
	
	transform: translate3d(240px,0,0);
	animation: open .5s ease-in-out;
}
@-webkit-keyframes open {
	0%      {-webkit-transform: translate3d(0,0,0);}
	70%    {-webkit-transform: translate3d(260px,0,0);}
	100%  {-webkit-transform: translate3d(240px,0,0);}
}
@-moz-keyframes open {
	0%      {-moz-transform: translate3d(0,0,0);}
	70%    {-moz-transform: translate3d(260px,0,0);}
	100%  {-moz-transform: translate3d(240px,0,0);}
}
@keyframes open {
	0%      {transform: translate3d(0,0,0);}
	70%    {transform: translate3d(260px,0,0);}
	100%  {transform: translate3d(240px,0,0);}
}

/*Content Sliding Closed Effect*/
header.close,
.content.close 
{
	-webkit-transform: translate3d(0,0,0);
	-webkit-animation: close .3s ease-in-out;
	
	-moz-transform: translate3d(0,0,0);
	-moz-animation: close .3s ease-in-out;
	
	transform: translate3d(0,0,0);
	animation: close .3s ease-in-out;
}
@-webkit-keyframes close {
	0%      {-webkit-transform: translate3d(240px,0,0);}
	100%  {-webkit-transform: translate3d(0,0,0);}
}
@-moz-keyframes close {
	0%       {-moz-transform: translate3d(240px,0,0);}
	100%  {-moz-transform: translate3d(0,0,0);}
}
@keyframes close {
	0%       {transform: translate3d(240px,0,0);}
	100%  {transform: translate3d(0,0,0);}
}

}
</style>
<script>
(function(l,f){function m(){var a=e.elements;return"string"==typeof a?a.split(" "):a}function i(a){var b=n[a[o]];b||(b={},h++,a[o]=h,n[h]=b);return b}function p(a,b,c){b||(b=f);if(g)return b.createElement(a);c||(c=i(b));b=c.cache[a]?c.cache[a].cloneNode():r.test(a)?(c.cache[a]=c.createElem(a)).cloneNode():c.createElem(a);return b.canHaveChildren&&!s.test(a)?c.frag.appendChild(b):b}function t(a,b){if(!b.cache)b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag();
a.createElement=function(c){return!e.shivMethods?b.createElem(c):p(c,a,b)};a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/\w+/g,function(a){b.createElem(a);b.frag.createElement(a);return'c("'+a+'")'})+");return n}")(e,b.frag)}function q(a){a||(a=f);var b=i(a);if(e.shivCSS&&!j&&!b.hasCSS){var c,d=a;c=d.createElement("p");d=d.getElementsByTagName("head")[0]||d.documentElement;c.innerHTML="x<style>article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}</style>";
c=d.insertBefore(c.lastChild,d.firstChild);b.hasCSS=!!c}g||t(a,b);return a}var k=l.html5||{},s=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,r=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,j,o="_html5shiv",h=0,n={},g;(function(){try{var a=f.createElement("a");a.innerHTML="<xyz></xyz>";j="hidden"in a;var b;if(!(b=1==a.childNodes.length)){f.createElement("a");var c=f.createDocumentFragment();b="undefined"==typeof c.cloneNode||
"undefined"==typeof c.createDocumentFragment||"undefined"==typeof c.createElement}g=b}catch(d){g=j=!0}})();var e={elements:k.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",version:"3.6.2pre",shivCSS:!1!==k.shivCSS,supportsUnknownElements:g,shivMethods:!1!==k.shivMethods,type:"default",shivDocument:q,createElement:p,createDocumentFragment:function(a,b){a||(a=f);if(g)return a.createDocumentFragment();
for(var b=b||i(a),c=b.frag.cloneNode(),d=0,e=m(),h=e.length;d<h;d++)c.createElement(e[d]);return c}};l.html5=e;q(f)})(this,document); </script>
</html>
