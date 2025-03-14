<!doctype html>
<html>
<head>
   <title>PHP and For Loops</title> 
</head>
<body>
    
  <h1>PHP and For Loops</h1> 

  <p>Use PHP echo, if statements, and loops to output all three links.</p>

  <?php

  // **************************************************
  // Do not edit this code
  
  $links = array (
    0 => array (
      'name' => 'Codecademy',
      'url' =>'https://www.codecademy.com/',
      'image' => '',
      'description' => 'Learn to code interactively, for free.' ),
    1 => array ( 
      'name' => '',
      'url' => 'https://www.w3schools.com/',
      'image' => 'w3schools.png',
      'description' => 'W3Schools is optimized for learning, testing, and training.' ),
    2 => array (
      'name' => 'Mozilla Developer Network',
      'url' => 'https://www.codecademy.com/',
      'image' => 'mozilla.png',
      'description' => 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.' )
    );
    
  // **************************************************

  // Loop through the links array and display the link information
  for ($i = 0; $i < count ($links); $i ++)
  {
      // If the name is empty, use the URL as a fallback
      if (empty($links[$i]['name'])) {
          echo '<h2>' . $links[$i]['url'] . '</h2>';
      } else {
          echo '<h2>' . $links[$i]['name'] . '</h2>';
      }

      // If there is an image, display it
      if (!empty($links[$i]['image'])) {
          echo '<img src="' . $links[$i]['image'] . '" width="200">';
      }

      // If there is a description, display it
      if (!empty($links[$i]['description'])) {
          echo '<p>' . $links[$i]['description'] . '</p>';
      }

      // Display the URL as a clickable link
      echo '<p><a href="' . $links[$i]['url'] . '">Visit this link</a></p>';
      
      // Add a separator for clarity between the links
      echo '<hr>';
  }

  ?>
    
</body>
</html>
