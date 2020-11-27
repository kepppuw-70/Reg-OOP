<script type="text/javascript" src="../js/function.js"></script>
<script type="text/javascript">
  function edit()
  {
    alert("edit");
  }
</script>
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
/**/
</style>
<div class="regsporets_container">


<?php

function getAge($d, $m, $y) 
{ 
    if($m > date('m') || $m == date('m') && $d > date('d'))
      return (date('Y') - $y - 1); 
    else
      return (date('Y') - $y);
}

$json = $rez;
$i = 0;
    foreach ($json as  $value) {
      foreach ($value as $key => $el) {
        ${'arr'.$i}[$key] = $el;
      }
      $i++;
    }


if ($_POST['edit_sex'] == 'edit') {

 echo '<script>edit()</script>';

}

?>

<br><br><p><b>Таблица тренера</b></p>



<div>
    <table class="pozisn_cente" border="1">
      <tr>
        <th class="c">№ п/п</th>
        <th class="c">Фамилия</th>
        <th class="c">Имя</th>
        <th class="c">Отчество</th>
        <th class="c">Пол</th>
        <th class="c">День р-ия</th>
        <th class="c">Возраст</th>
        <th class="c">Степень</th>
        <th class="c">Сертификаты</th>
        <th class="c">Клуб</th>
        <th class="c">Телефон</th>
        <th class="c">Емэил</th>
        <th class="c">Сборы</th>
      </tr>
        <tr>
            <form action="/" method="post">
            <td></td>
            <td><input type="text" size="12" name="last_name_ukr"></td>
            <td><input type="text" size="12" name="first_name_ukr"></td>
            <td><input type="text" size="12" name="patronymic_ukr"></td>
            <td><input type="text" size="2" name="sex"></td>
            <td><input type="text" size="6" name="birth"></td>
            <td><input type="text" size="3" name="yar_old"></td>
            <td><input type="text" size="4" name="rank"></td>
            <td><input type="text" size="10" name="certificait"></td>
            <td><input type="text" size="51" name="club"></td>
            <td><input type="text" size="8" name="phone"></td>
            <td><input type="text" size="20" name="email"></td>
            <td><input type="text" size="6" name="camp"></td>
            <b><button type="submit" name="regist">Выборка</button></b>
            </form>
            
            <br>
            <form action="/" method="POST">
            <div class="reg_pole"> 
            <div class="reg_zag"><h3>Введите номер строки для удаления</h3></div>
            <div class="reg_inp"><input type="text" size="1" name="string_del" required></div>
            <br>
            <div class="butdel"><button type="submit">Удалить</button></div>
            </form>
       
        </tr>
      <?php
        $l = 0;
        for ($k=0; $k < $i ; $k++) { 
            if (${'arr'.$k}['type'] == 'trener') {
               ${'arr'.$k}['id'] = $l + 1;  
               $born = explode("/", ${'arr'.$k}['birth']);
               $d = $born[0];
               $m = $born[1];
               $y = $born[2];
               ${'arr'.$k}['yar_old'] = getAge($d, $m, $y) . ' лет';
/*
               if (${'arr'.$k}['sex'] == 'mail') {
                  ${'arr'.$k}['sex'] = 'Мужской';
               } else {
                  ${'arr'.$k}['sex'] = 'Женский';
               }
*/  


?>

            <tr>
              <td><?php echo ${'arr'.$k}['id']; ?></td>
              <td><?php echo ${'arr'.$k}['last_name_ukr']; ?></td>
              <td><?php echo ${'arr'.$k}['first_name_ukr']; ?></td>
              <td><?php echo ${'arr'.$k}['patronymic_ukr']; ?></td>
              <form action="/" method="post">
                <td><?php echo '<button type="submit" value="edit" name="edit_sex">' . ${'arr'.$k}['sex'] . '</button>'; ?></td>
              </form>
              <td><?php echo ${'arr'.$k}['birth']; ?></td>
              <td><?php echo ${'arr'.$k}['yar_old']; ?></td>
              <td><?php echo ${'arr'.$k}['rank']; ?></td>
              <td><?php echo ${'arr'.$k}['certificait']; ?></td>
              <td><?php echo ${'arr'.$k}['club']; ?></td>
              <td><?php echo ${'arr'.$k}['phone']; ?></td>
              <td><?php echo ${'arr'.$k}['email']; ?></td>
              <td><?php echo ${'arr'.$k}['camp']; ?></td>
           </tr>
      <?php 
              $l++;
           }
        }
      ?>

<br><br>
</div>
