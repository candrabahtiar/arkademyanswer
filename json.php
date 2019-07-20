<?php
  $user_array = array(
    array(
      'name' => 'candra',
      'age' => '22',
      'address' => 'karmen 3/10',
      'hobbies' => 'listen music',
      'is_married' => 'no',
      'list_school' => 'sd mojo 8, smp ipiems, sma giki 2, universitas surabaya',
      'skill' => 'advance',
      'interest_in_coding' => 'html, php',
    ),
  );

  $json_data = json_encode($user_array);
  echo $json_data;
?>
