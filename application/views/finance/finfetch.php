<?php
  $year = $_GET['gaayr'];
  $conn = new mysqli('localhost', 'username', 'password', '4bhive');
  $stmt = $conn->prepare('SELECT * FROM fingaa WHERE YEAR(gaayr) = ?');
  $stmt->bind_param('i', $year);
  $stmt->execute();
  $result = $stmt->get_result();
  $data = array();
  while ($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
  $json = json_encode($data);
  echo $json;
?>
