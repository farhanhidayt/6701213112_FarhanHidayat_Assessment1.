<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the input values from the form
  $textbox1 = $_POST['textbox1'];
  $textbox2 = $_POST['textbox2'];
  $operation = $_POST['operation'];

  // Operasi aritmatika sesuai dengan yang dikirim dari dropdown box
  if ($operation === '+') {
    $result = $textbox1 + $textbox2;
  } elseif ($operation === '-') {
    $result = $textbox1 - $textbox2;
  } elseif ($operation === '*') {
    $result = $textbox1 * $textbox2;
  } elseif ($operation === '/') {
    $result = $textbox1 / $textbox2;
  } else {
    $result = 'Invalid operation';
  // Menggunakan switch case
  switch ($operation) {
    case '+':
      $result = $textbox1 + $textbox2;
      break;
    case '-':
      $result = $textbox1 - $textbox2;
      break;
    case '*':
      $result = $textbox1 * $textbox2;
      break;
    case '/':
      $result = $textbox1 / $textbox2;
      break;
    default:
      $result = 'Invalid operation';
  }

  // Display the result
  echo "Result: $result";
}