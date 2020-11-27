<!--
<!DOCTYPE html>
<html>
<head>
	<title><?php //echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<a href="/">Главная</a>
<a href="/test">Тест</a>

<?php //echo $content; ?>

</body>
</html>
-->





<link rel="stylesheet" type="text/css" href="../css/style1.css">
<style type="text/css">
.menu{
  position: fixed;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}

a.button28 {
  position: relative;
  display: inline-block;
  font-size: 90%;
  font-weight: 700;
  color: rgb(209,209,217);
  text-decoration: none;
  text-shadow: 0 -1px 2px rgba(0,0,0,.2);
  padding: .5em 1em;
  outline: none;
  border-radius: 3px;
  background: linear-gradient(rgb(110,112,120), rgb(81,81,86)) rgb(110,112,120);
  box-shadow:
   0 1px rgba(255,255,255,.2) inset,
   0 3px 5px rgba(0,1,6,.5),
   0 0 1px 1px rgba(0,1,6,.2);
  transition: .2s ease-in-out;
}
a.button28:hover:not(:active) {
  background: linear-gradient(rgb(126,126,134), rgb(70,71,76)) rgb(126,126,134);
}
a.button28:active {
  top: 1px;
  background: linear-gradient(rgb(76,77,82), rgb(56,57,62)) rgb(76,77,82);
  box-shadow:
   0 0 1px rgba(0,0,0,.5) inset,
   0 2px 3px rgba(0,0,0,.5) inset,
   0 1px 1px rgba(255,255,255,.1);
}
/**/

#navbar ul{
        display: none;
        background-color: #f90;
        position: absolute;
        top: 100%;
      }
      #navbar li:hover ul { display: block; }
      #navbar, #navbar ul{
        margin: 0;
        padding: 0;
        list-style-type: none;
      }
      #navbar {
        height: 30px;
        background-color: #666;
        padding-left: 25px;
        min-width: 1475px;
      }
      #navbar li {
        float: left;
        position: relative;
        height: 100%;
      }
      #navbar li a {
        display: block;
        padding: 6px;
        width: 100px;
        color: #fff;
        text-decoration: none;
        text-align: center;
      }
      #navbar ul li { float: none; }
      #navbar li:hover { background-color: #f90; }
      #navbar ul li:hover { background-color: #666; }

      .exit{
        position: absolute;
        top: 0px; right: -1110px;
      }


</style>

<div class="menu">

<ul id="navbar">
      <li><a href="/">Главная</a></li>
<!--
      <li><a href="#">Новости</a></li>
      <li><a href="#">Контакты</a>
        <ul>
          <li><a href="#">Адрес</a></li>
          <li><a href="#">Телефон</a></li>
          <li><a href="#">Email</a></li>
        </ul>
      </li>
-->
      <li><a href="/check_in">Регистрация</a></li>
      <li class="exit"><a href="/exitt">Выйти</a></li>
    </ul>

</div>
