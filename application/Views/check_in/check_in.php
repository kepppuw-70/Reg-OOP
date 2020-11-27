<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
	
  .regsporets_container{
  
   width: 1500px;
     text-align: center;
    float: left;
    margin-top:20px;
    margin-left: auto;
    margin-right: auto;
    background: #B0C4DE;
   }

	.border_data{
		width: 710px;
	}

   .border_sex{
		width: 180px;
	}

	.border_birth{
		width: 270px;
	}

	.border_rank{
		width: 480px;
	}

	.border_certificate{
		width: 1130px;
	}

	.burder_camp{
		width: 280px;
	}

	.border_club{
		width: 700px
	}

	.burder_phone{
		width: 170px;
	}

	.border_email{
		width: 230px;
	}

   
</style>
<div class="regsporets_container">
<br><br>
<h1>Анкета</h1>
<form action="check_in" method="POST">

  <fieldset class="border_data">
  <legend>
    <b>На Украинском</b>
  </legend>

    <label for="last_name_ukr"><b>Прізвища</b></label>
    <input id="fam_ukr" type="text" name="last_name_ukr" required>

    <label for="first_name_ukr"><b>Ім'я</b></label>
    <input id="imy_ukr" type="text" name="first_name_ukr" required>
    
    <label for="patronymic_ukr"><b>По-батькові</b></label>
    <input id="otch_ukr" type="text" name="patronymic_ukr" required>

</fieldset>
<br><br>

<fieldset class="border_data">
  <legend>
    <b>На Английском</b>
  </legend>

    <label for="last_name_ingl"><b>Surname</b></label>
    <input id="fam_uk" type="text" name="last_name_ingl" required>

    <label for="first_name_ingl"><b>Name</b></label>
    <input id="imy_uk" type="text" name="first_name_ingl" required>
    
    <label for="patronymic_ingl"><b>Patronymic</b></label>
    <input id="otch_uk" type="text" name="patronymic_ingl" required>

</fieldset>

<br><br>


<fieldset class="border_sex">
  <legend>
    <b>Пол</b>
  </legend>

    <p>
   <input type="radio" name="sex" value="mail" class="polstud" required><b>Мужской</b>
   <input type="radio" name="sex" value="femail" class="polstud" required><b>Женский</b>
   </p>

</fieldset>



<br><br>

<fieldset class="border_birth">
  <legend>
    <b>Дата рождения</b>
  </legend>

    <label for="den"><b>число</b></label>
    <input id="den" type="text" size="1" name="birth_day" required placeholder="00">

    <label for="mes"><b>месяц</b></label>
    <input id="mes" type="text" size="1" name="birth_munz" required placeholder="00">
    
    <label for="god"><b>год</b></label>
    <input id="god" type="text" size="2" name="birth_yar" required placeholder="0000">

</fieldset>
<br><br>

<fieldset class="border_rank">
  <legend>
    <b>Степень</b>
  </legend>

   <p>
   
   <input type="radio" name="rank" value="2 Ky" class="rung_stud" required><b>2Кю</b>
   <input type="radio" name="rank" value="1 Ky" class="rung_stud" required><b>1Кю</b>
   <input type="radio" name="rank" value="1 Dan" class="rung_stud" required><b>1Дан</b>
   <input type="radio" name="rank" value="2 Dan" class="rung_stud" required><b>2Дан</b>
   <input type="radio" name="rank" value="3 Dan" class="rung_stud" required><b>3Дан</b>
   <input type="radio" name="rank" value="4 Dan" class="rung_stud" required><b>4Дан</b>
   <input type="radio" name="rank" value="5 Dan" class="rung_stud" required><b>5Дан</b>
   <input type="radio" name="rank" value="6 Dan" class="rung_stud" required><b>6Дан</b>
  
</p>

</fieldset>
<br><br>

<fieldset class="border_certificate">
  <legend>
    <b>Сертификаты</b>
  </legend>
   <p>
    <input id="ai" type="checkbox" name="certificait_ai" value="ai">
    <label for="ai"><b>Асистент Инструктора</b></label>
    <input id="i" type="checkbox" name="certificait_i" value="i">
    <label for="i"><b>Инструктор</b></label>
    <input id="si" type="checkbox" name="certificait_si" value="si">
    <label for="si"><b>Стпрший Инструктор</b></label>
    <input id="mi" type="checkbox" name="certificait_mi" value="mi">
    <label for="mi"><b>Мастер Инструктор</b></label>
    <input id="dch" type="checkbox" name="certificait_dc" value="dc">
    <label for="dch"><b>Додзё Чиф</b></label>
    <input id="ao" type="checkbox" name="certificait_ao" value="ao">
    <label for="ao"><b>Экзамен Офицер</b></label>
    <input id="ao" type="checkbox" name="certificait_rc" value="rc">
    <label for="ao"><b>Представитель страны</b></label>
   </p>
</fieldset>
<br><br>

<fieldset class="border_club">
  <legend>
    <b>Место тренеровок</b>
  </legend>
     <b>Адресс, клуб&#160-&#160</b><input type="tel" size="85" name="club" required placeholder="">
 </fieldset>
<br><br>

<fieldset class="burder_phone">
  <legend>
    <b>Телефон</b>
  </legend>
     <b>+380&#160-&#160</b><input type="tel" size="8" name="phone" required placeholder="00-000-00-00">
</fieldset>

<br><br><fieldset class="border_email">
  <legend>
    <b>Электронная почта</b>
  </legend>
     <b>e-mail&#160:&#160</b><input id="studi" type="text" size="20" name="email" required>
</fieldset>
<br><br>

<fieldset class="burder_camp">
  <legend>
    <b>Участия в семинарах/лагерях</b>
  </legend>

    <label for="denc"><b>число</b></label>
    <input id="denc" type="text" size="1" name="camp_day" required placeholder="00">

    <label for="mesc"><b>месяц</b></label>
    <input id="mesc" type="text" size="1" name="camp_munz" required placeholder="00">
    
    <label for="godc"><b>год</b></label>
    <input id="godc" type="text" size="4" name="camp_yar" required placeholder="0000">
</fieldset>
<br><br>
<!--
<div class="but1">
  <button type="reset" ><a href="#line_tabl">Сбросить</a></button>
</div>
<br><br>
-->
<div class="but1">
  <button type="submit" value="check" name="check-in">Зарегестрировать</button>
</div>
</form>
<br><br>
     </div>
   </div>
</div>
 
<?php

//echo '<br>$_POST[check-in] - ' . $_POST['check-in'];



