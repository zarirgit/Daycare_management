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
      height: 100vh; /* take up full viewport height */
    }

    .section {
      height: 100%; /* take up full height of parent element */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #home {
      background-image: url('https://i.imgur.com/hcler8f.jpg');
      background-size: cover;
      background-position: center;
    }

    #about {
      background-image: url('https://i.imgur.com/62dyM2u.jpg');
      background-size: cover;
      background-position: center;
    }

    #programs {
      background-image: url('https://i.imgur.com/NrU6PEh.jpg');
      background-size: cover;
      background-position: center;
    }

    #enroll {
      background-image: url('https://i.imgur.com/VQ2M03h.jpg');
      background-size: cover;
      background-position: center;
    }

    #contact {
      background-image: url('https://i.imgur.com/dpq37aB.jpg');
      background-size: cover;
      background-position: center;
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
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#programs">Programs</a>
      <a href="#enroll">Enroll</a>
      <a href="#contact">Contact Us</a>
      <a href="/login">Log In/Register</a>
    </nav>
  </header>
  
<main>
  <section id="home">
    <h1>Welcome to Our Daycare Center</h1>
    <p>We provide quality care for children of all ages in a safe and nurturing environment.</p>
    <a href="about" class="btn">Learn More</a>
  </section>

  <section id="about">
    <h2>About Us</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ipsum vel magna eleifend sagittis. Integer blandit libero quis augue maximus ultrices. Nunc vel posuere magna, at iaculis enim. Nulla faucibus, tellus ut gravida malesuada, sapien sapien finibus libero, a eleifend justo dolor at risus. Fusce finibus, mauris vel dictum vehicula, enim dolor convallis sapien, eget consequat tortor massa eu nisl.</p>
  </section>

  <section id="programs">
    <h2>Our Programs</h2>
    <ul>
      <li>Infants</li>
      <li>Toddlers</li>
      <li>Preschool</li>
      <li>Pre-K</li>
    </ul>
  </section>

  <section id="enroll">
    <h2>Enroll Your Child</h2>
    <p>Enrollment is easy! Just fill out our online application and we'll get back to you as soon as possible.</p>
    <a href="#" class="btn">Apply Now</a>
  </section>

    <section id="contact">
    <h2>Contact Us</h2>
    <p>For any questions or inquiries, please contact us using the information below:</p>
    <ul>
       <li>Phone: 555-555-5555</li>
       <li>Email: info@daycarecenter.com</li>
       <li>Address: 123 Main St, Anytown USA</li>
    </ul>
    </section>

  </main>
  
  <footer>
    <p>&copy; 2023 Daycare Center by Ahmed Zarir Siddique. All rights reserved.</p>
  </footer>
</body>
</html>
