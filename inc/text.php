<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shadow and Glow Transitions</title>

<style>
.wrapper{
margin:auto;
width:65%;
margin-top:20%;
background:#333333;
text-align:center;
padding:50px;
}
[class^="hvr-"] {
    background:#006699;
    color: #FFFFFF;
    cursor: pointer;
    margin: 0.4em;
    padding:20px;
    text-decoration: none;
}


/* SHADOW/GLOW TRANSITIONS */
/* Glow */
.hvr-glow {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: box-shadow;
  transition-property: box-shadow;
}
.hvr-glow:hover, .hvr-glow:focus, .hvr-glow:active {
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
}

/* Shadow */
.hvr-shadow {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: box-shadow;
  transition-property: box-shadow;
}
.hvr-shadow:hover, .hvr-shadow:focus, .hvr-shadow:active {
  box-shadow: 0 10px 10px -10px rgba(0, 0, 0, 0.5);
}

/* Grow Shadow */
.hvr-grow-shadow {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: box-shadow, transform;
  transition-property: box-shadow, transform;
}
.hvr-grow-shadow:hover, .hvr-grow-shadow:focus, .hvr-grow-shadow:active {
  box-shadow: 0 10px 10px -10px rgba(0, 0, 0, 0.5);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

/* Box Shadow Outset */
.hvr-box-shadow-outset {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: box-shadow;
  transition-property: box-shadow;
}
.hvr-box-shadow-outset:hover, .hvr-box-shadow-outset:focus, .hvr-box-shadow-outset:active {
  box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.6);
}

/* Box Shadow Inset */
.hvr-box-shadow-inset {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: box-shadow;
  transition-property: box-shadow;
  box-shadow: inset 0 0 0 rgba(0, 0, 0, 0.6), 0 0 1px rgba(0, 0, 0, 0);
  /* Hack to improve aliasing on mobile/tablet devices */
}
.hvr-box-shadow-inset:hover, .hvr-box-shadow-inset:focus, .hvr-box-shadow-inset:active {
  box-shadow: inset 2px 2px 2px rgba(0, 0, 0, 0.6), 0 0 1px rgba(0, 0, 0, 0);
  /* Hack to improve aliasing on mobile/tablet devices */
}


/* Float Shadow */
.hvr-float-shadow {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
}
.hvr-float-shadow:before {
  pointer-events: none;
  position: absolute;
  z-index: -1;
  content: '';
  top: 100%;
  left: 5%;
  height: 10px;
  width: 90%;
  opacity: 0;
  background: -webkit-radial-gradient(center, ellipse, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
  background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
  /* W3C */
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform, opacity;
  transition-property: transform, opacity;
}
.hvr-float-shadow:hover, .hvr-float-shadow:focus, .hvr-float-shadow:active {
  -webkit-transform: translateY(-5px);
  transform: translateY(-5px);
  /* move the element up by 5px */
}
.hvr-float-shadow:hover:before, .hvr-float-shadow:focus:before, .hvr-float-shadow:active:before {
  opacity: 1;
  -webkit-transform: translateY(5px);
  transform: translateY(5px);
  /* move the element down by 5px (it will stay in place because it's attached to the element that also moves up 5px) */
}

/* Shadow Radial */
.hvr-shadow-radial {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
}
.hvr-shadow-radial:before, .hvr-shadow-radial:after {
  pointer-events: none;
  position: absolute;
  content: '';
  left: 0;
  width: 100%;
  box-sizing: border-box;
  background-repeat: no-repeat;
  height: 5px;
  opacity: 0;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: opacity;
  transition-property: opacity;
}
.hvr-shadow-radial:before {
  bottom: 100%;
  background: -webkit-radial-gradient(50% 150%, ellipse, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 80%);
  background: radial-gradient(ellipse at 50% 150%, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 80%);
}
.hvr-shadow-radial:after {
  top: 100%;
  background: -webkit-radial-gradient(50% -50%, ellipse, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 80%);
  background: radial-gradient(ellipse at 50% -50%, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 80%);
}
.hvr-shadow-radial:hover:before, .hvr-shadow-radial:focus:before, .hvr-shadow-radial:active:before, .hvr-shadow-radial:hover:after, .hvr-shadow-radial:focus:after, .hvr-shadow-radial:active:after {
  opacity: 1;
}
</style>
</head>

<body>
<div class="wrapper">
<table width="100%" border="5" cellspacing="5" cellpadding="5">
  <tr>
    <td><a href="#" class="hvr-shadow">Shadow</a></td>
    <td><a href="#" class="hvr-grow-shadow">Grow Shadow</a></td>
    <td><a href="#" class="hvr-float-shadow">Float Shadow</a></td>
  </tr>
  <tr>
    <td><a href="#" class="hvr-glow">Glow</a></td>
    <td><a href="#" class="hvr-shadow-radial">Shadow Radial</a></td>
    <td><a href="#" class="hvr-box-shadow-outset">Box Shadow Outset</a></td>
  </tr>
  <tr>
    <td><a href="#" class="hvr-box-shadow-inset">Box Shadow Inset</a></td>
    <td> </td>
    <td> </td>
  </tr>
  
</table>

</div> <!--wrapper ends here-->
</body>
</html>