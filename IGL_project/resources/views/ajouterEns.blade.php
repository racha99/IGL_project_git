<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('lumen/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('lumen/bootstrap.min.css') }}">
    <title>Ajout Ens </title>
</head>
<body>
<div class="login-wrap">
	<div class="login-html">
    <div class="container center">
    <form method="post" action="/AjoutEns">
        @csrf
        <div class="card border-primary mb-3" style="max-width: 20rem;">
                <h1 style="color:#FFCD00" ><i> Ajouter un enseignant </i> </h1>
                <div >
                        <div class="group">
                                <label style="color:#B0E0E6" for="user" class="label">name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" style="border-radius: 10px" class="input" id="name" name="name"  placeholder="Enter name">
                                </div>
                                <br> <br>  
                                <div class="group">
                                <label style="color:#B0E0E6" for="user"class="label">lastname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" class="input" style="border-radius: 10px" id="last_name"  name="last_name"  placeholder="Enter last name">
                                </div>
                                <br> <br> 
                                <div class="group">
                                <label style="color:#B0E0E6" for="user" class="label">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" class="input" style="border-radius: 10px" id="email" name="email"  placeholder="Enter email">
                                </div>
                                <br> <br> 
                                <div class="group">
                                <label style="color:#B0E0E6" for="user" class="label">Module&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" class="input"  style="border-radius: 10px" name="module"  id ="module" placeholder="Module qu'il enseignent">
                                </div>
                                <br> <br> 
                              
                                
                                <div class="group">
                                        <label  style="color:#B0E0E6" for="exampleSelect2" class="label">yearOfTeaching&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <select class="input" style="border-radius: 10px" name="yearOfTeaching" id="yearOfTeaching">
                                        <option>1cp</option>
                                          <option>2cp</option>
                                          <option>1cs</option>
                                          <option>2cs</option>
                                          <option>3cs</option>
                                        </select>
                                      </div>
                                      <br> <br> 

                                      <div class="group">
                                            <label style="color:#B0E0E6" for="exampleSelect2" class="label">nbGroupe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            <select class="input"  style="border-radius: 10px"name="nbGroupe" id="nbGroupe">
                                            <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              <option>6</option>
                                              <option>7</option>
                                              <option>8</option>
                                              <option>9</option>
                                            </select>
                                          </div>
                                          <br> <br> 
                                <button type="submit" name="submit"  class="button">Submit</button>
                  </div>
              </div>
              </div>
              </div>



       
    </form>
</div>
</body>
<style>
   body{
	margin:0;
	color:#6a6f8c;
	background:#B0E0E6;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;
	background:url('http:image/lklk.jpg') no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}
    </style>
</html>
