<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Sanitize and retrieve form data
  $event_name = htmlspecialchars($_POST['event_name']);
  $event_date = htmlspecialchars($_POST['event_date']);
  $hosted_by = htmlspecialchars($_POST['hosted_by']);
  $location = htmlspecialchars($_POST['location']);
  $description = htmlspecialchars($_POST['description']);
  // Handle file upload if necessary
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Invitation Details</title>
  <link rel="stylesheet" href="style1.css" />
</head>
<body>
  <header class="header-bar">
    <div class="logo">INVITO ROYALE</div>
    <nav class="nav-links">
      <a href="create.html">Create</a>
      <a href="about.html">About</a>
      <a href="contact.html">Contact</a>
    </nav>
  </header>

  <main>
    <h1>Invitation Created Successfully!</h1>
    <p><strong>Event Name:</strong> <?php echo $event_name; ?></p>
    <p><strong>Date:</strong> <?php echo $event_date; ?></p>
    <p><strong>Hosted By:</strong> <?php echo $hosted_by; ?></p>
    <p><strong>Location:</strong> <?php echo $location; ?></p>
    <p><strong>Description:</strong> <?php echo $description; ?></p>
    <!-- Display uploaded image if applicable -->
  </main>

  <footer>
    <p>&copy; 2025 Invito Royale. All rights reserved.</p>
  </footer>
</body>
</html>
