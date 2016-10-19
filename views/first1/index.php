<?php

print_r($person);
echo '<hr>';
foreach ($person as $key=> $item) {
   echo $key.' : '.$item['fname'].' / '.$item['lname'].' / '.$item['email'].'<br>';
    
}
echo '<hr>';
?>

<table class="table">
    <thead>
      <tr class="success">
        <th>ลำดับ</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>อีเมล</th>
      </tr>
    </thead>
    <tbody>
    <?php
foreach ($person as $key => $value) {

    echo '<tr>';
    echo '<td>'.($key+1).'</td>';
    echo '<td>'.$value['fname'].'</td>';
    echo '<td>'.$value['lname'].'</td>';
    echo '<td>'.$value['email'].'</td>';   
    echo '</tr>';
}
?>
        
<!--      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>-->
    </tbody>
  </table>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>

 