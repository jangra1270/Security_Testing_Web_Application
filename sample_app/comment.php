<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST["comment"];
    echo "Comment: " . $comment; // No sanitization — vulnerable to XSS
}
?>
<form method="POST">
  Comment: <input type="text" name="comment" />
  <input type="submit" value="Post" />
</form>