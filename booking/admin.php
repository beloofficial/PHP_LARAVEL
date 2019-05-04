<?php
session_start();
$_SESSION['login'] = false;
?>
<!DOCTYPE html>
<html>
<head>

    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>

body  {
  background-image: url("5657fb2fb5dff1d.jpg");
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}


}
  /*
P.S: if you like my content maybe you will become a donator and donate some money? That helps me to create new awesome materials. https://www.paypal.me/melnik909
*/

/*
=====
LEVEL 1. RESET STYLES
=====
*/

.field{
  --uiFieldPlaceholderColor: var(--fieldPlaceholderColor, #767676);
}

.field__input{ 
  background-color: transparent;
  border-radius: 0;
  border: none;

  -webkit-appearance: none;
  -moz-appearance: none;

  font-family: inherit;
  font-size: 1em;
}

.field__input:focus::-webkit-input-placeholder{
  color: var(--uiFieldPlaceholderColor);
}

.field__input:focus::-moz-placeholder{
  color: var(--uiFieldPlaceholderColor);
  opacity: 1;
}

/*
=====
LEVEL 2. CORE STYLES
=====
*/

.a-field{
  display: inline-block;
}

.a-field__input{ 
  display: block;
  box-sizing: border-box;
  width: 100%;
}

.a-field__input:focus{
  outline: none;
}

/*
=====
LEVEL 3. PRESENTATION STYLES
=====
*/

/* a-field */

.a-field{
  --uiFieldHeight: var(--fieldHeight, 40px);  
  --uiFieldBorderWidth: var(--fieldBorderWidth, 2px);
  --uiFieldBorderColor: var(--fieldBorderColor);

  --uiFieldFontSize: var(--fieldFontSize, 1em);
  --uiFieldHintFontSize: var(--fieldHintFontSize, 1em);

  --uiFieldPaddingRight: var(--fieldPaddingRight, 15px);
  --uiFieldPaddingBottom: var(--fieldPaddingBottom, 15px);
  --uiFieldPaddingLeft: var(--fieldPaddingLeft, 15px);   

  position: relative;
  box-sizing: border-box;
  font-size: var(--uiFieldFontSize);
  padding-top: 1em;  
}

.a-field .a-field__input{
  height: var(--uiFieldHeight);
  padding: 0 var(--uiFieldPaddingRight) 0 var(--uiFieldPaddingLeft);
  border-bottom: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColor);  
}

.a-field .a-field__input::-webkit-input-placeholder{
  opacity: 0;
  transition: opacity .2s ease-out;
}

.a-field .a-field__input::-moz-placeholder{
  opacity: 0;
  transition: opacity .2s ease-out;
}

.a-field .a-field__input:not(:placeholder-shown) ~ .a-field__label-wrap .a-field__label{
  opacity: 0;
  bottom: var(--uiFieldPaddingBottom);
}

.a-field .a-field__input:focus::-webkit-input-placeholder{
  opacity: 1;
  transition-delay: .2s;
}

.a-field .a-field__input:focus::-moz-placeholder{
  opacity: 1;
  transition-delay: .2s;
}

.a-field .a-field__label-wrap{
  box-sizing: border-box;
  width: 100%;
  height: var(--uiFieldHeight); 

  pointer-events: none;
  cursor: text;

  position: absolute;
  bottom: 0;
  left: 0;
}

.a-field .a-field__label{
  position: absolute;
  left: var(--uiFieldPaddingLeft);
  bottom: calc(50% - .5em);

  line-height: 1;
  font-size: var(--uiFieldHintFontSize);

  pointer-events: none;
  transition: bottom .2s cubic-bezier(0.9,-0.15, 0.1, 1.15), opacity .2s ease-out;
  will-change: bottom, opacity;
}

.a-field .a-field__input:focus ~ .a-field__label-wrap .a-field__label{
  opacity: 1;
  bottom: var(--uiFieldHeight);
}

/* a-field_a1 */

.a-field_a1 .a-field__input{
  transition: border-color .2s ease-out;
  will-change: border-color;
}

.a-field_a1 .a-field__input:focus{
  border-color: var(--fieldBorderColorActive);
}

/* a-field_a2 */

.a-field_a2 .a-field__label-wrap:after{
  content: "";
  box-sizing: border-box;
  width: 0;
  height: var(--uiFieldBorderWidth);
  background-color: var(--fieldBorderColorActive);

  position: absolute;
  bottom: 0;
  left: 0;  

  will-change: width;
  transition: width .285s ease-out;
}

.a-field_a2 .a-field__input:focus ~ .a-field__label-wrap:after{
  width: 100%;
}

/* a-field_a3 */

.a-field_a3{
  padding-top: 1.5em;
}

.a-field_a3 .a-field__label-wrap:after{
  content: "";
  box-sizing: border-box;
  width: 100%;
  height: 0;

  opacity: 0;
  border: var(--uiFieldBorderWidth) solid var(--fieldBorderColorActive);

  position: absolute;
  bottom: 0;
  left: 0;

  will-change: opacity, height;
  transition: height .2s ease-out, opacity .2s ease-out;
}

.a-field_a3 .a-field__input:focus ~ .a-field__label-wrap:after{
  height: 100%;
  opacity: 1;
}

.a-field_a3 .a-field__input:focus ~ .a-field__label-wrap .a-field__label{
  bottom: calc(var(--uiFieldHeight) + .5em);
}

/*
=====
LEVEL 4. SETTINGS
=====
*/

.field{
  --fieldBorderColor: #D1C4E9;
  --fieldBorderColorActive: #673AB7;
}
.myButton {
  -moz-box-shadow: 0px 10px 14px -6px #276873;
  -webkit-box-shadow: 0px 10px 14px -6px #276873;
  box-shadow: 0px 10px 14px -6px #276873;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
  background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
  background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
  background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
  background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
  background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
  background-color:#599bb3;
  -moz-border-radius:9px;
  -webkit-border-radius:9px;
  border-radius:9px;
  border:1px solid #29668f;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:20px;
  font-weight:bold;
  padding:16px 57px;
  text-decoration:none;
  text-shadow:0px 3px 0px #3d768a;
}
.myButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
  background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
  background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
  background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
  background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
  background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
  background-color:#408c99;
}
.myButton:active {
  position:relative;
  top:1px;
}


</style>
<body>

</body>
</html>
<div id="login" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
      <div class="w3-container w3-black">
        <h1 style="padding-left: 49%">Log in</h1>
      </div>
      <div class="w3-container">


        <form action="action_page.php" target="_blank" method='POST'>
         <div class="page">
  <div class="page__demo" style="padding-left: 40%">
    <label class="field a-field a-field_a1 page__field">
      <input class="field__input a-field__input" placeholder="e.g. Amantay" required name = "Login">
      <span class="a-field__label-wrap">
        <span class="a-field__label">Login</span>
      </span>
    </label>
    <label class="field a-field a-field_a2 page__field">
      <input type="Password" class="field__input a-field__input" placeholder="*********" required name = "Password">
      <span class="a-field__label-wrap">
        <span class="a-field__label">Password</span>
      </span>
    </label> 

    <p style="padding-left: 12%;padding-top: 20px"><button class="myButton" type="submit">Log in</button></p>
  </div>
</div>

  
          
        </form>
      </div>
    </div>
  </div>
  </html>


  <!-- pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}"-->