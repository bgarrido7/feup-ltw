<?php
  // Current time
  $timestamp = time();

  // Get last_id
  $last_id = $_GET['last_id'];

  // Database connection
  $dbh = new PDO('sqlite:chat.db');
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if (isset($_GET['username']) && isset($_GET['text'])) {
    // GET username and text
    $username = $_GET['username'];
    $text = $_GET['text'];
    // Insert Message
    $stmt = $dbh->prepare("INSERT INTO chat VALUES (null, ?, ?, ?)");
    $stmt->execute(array($timestamp, $username, $text));
  }

  // Retrieve new messages
  $stmt = $dbh->prepare("SELECT * FROM chat WHERE id > ? ORDER BY date DESC LIMIT 10");
  $stmt->execute(array($last_id));
  $messages = $stmt->fetchAll();

  // In order to get the most recent messages we have to reverse twice
  $messages = array_reverse($messages);

  // Add a time field to each message
  foreach ($messages as $index => $message) {
    $time = date('h:i:s', $message['date']);
    $messages[$index]['time'] = $time;
  }

  // JSON encode
  echo json_encode($messages);
?>
