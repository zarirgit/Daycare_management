<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Daycare Center</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* Reset default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Set body background color and font */
    body {
      background-color: #f5f5f5;
      font-family: 'Montserrat', sans-serif;
      color: #444;
    }


    /* Add header styling */
    header {
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    /* Add logo styling */
    .logo {
      font-size: 36px;
      font-weight: bold;
    }

    /* Add navigation styling */
    nav {
      margin-top: 20px;
      display: flex;
      justify-content: space-between;
    }

    nav a {
      text-decoration: none;
      color: #444;
      font-weight: bold;
      padding: 10px;
      transition: all 0.2s ease-in-out;
    }

    nav a:hover {
      background-color: #f00;
      color: #fff;
    }
   
    /* Add main content styling */
    main {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 50px 0;
    }

    h1 {
      font-size: 48px;
      text-align: center;
      margin-bottom: 20px;
      text-shadow: 2px 2px #ccc;
    }

    p {
      font-size: 24px;
      text-align: center;
      max-width: 600px;
      margin-bottom: 30px;
    }

    /* Add footer styling */
    footer {
      background-color: #444;
      color: #fff;
      padding: 20px;
      text-align: center;
      margin-top: 50px;
    }

    footer p {
      margin-bottom: 0;
    }

    /* Add media query for smaller screens */
    @media only screen and (max-width: 768px) {
      h1 {
        font-size: 36px;
      }

      p {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">Daycare Center</div>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Programs</a>
      <a href="#">Enroll</a>
      <a href="#">Contact Us</a>
      <a href="/login">Log In/Register</a>
    </nav>
  </header>
  
  <main>
    <h1>Welcome to Our Daycare Center</h1>
    <p>We provide quality care for children of all ages in a safe and nurturing environment.</p>
    <a href="#" class="btn">Learn More</a>
  </main>
  
  <footer>
    <p>&copy; 2023 Daycare Center. All rights reserved.</p>
  </footer>
</body>
</html>
