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

  /* styles for the #home section */
#home {
  background-color: #F5DEB3 ;
  color: #000000;
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}
#home h1 {
  font-size: 3rem;
  font-weight: bold;
  margin-bottom: 1rem;
}

#home p {
  font-size: 1.5rem;
  line-height: 2rem;
  margin-bottom: 2rem;
}

#home a.btn {
  display: inline-block;
  background-color: #000000;
  color: #fff;
  font-size: 18px;
  font-weight: bold;
  text-decoration: none;
  padding: 15px 30px;
  border-radius: 5px;
  transition: all 0.2s ease-in-out;
}

#home a.btn:hover {
  background-color: #fff;
  color: #f00;
}
    

  </style>
</head>
<body>
  <header>
    <div class="logo">Daycare Center</div>
    <nav>
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#reviews">Reviews</a>
      <a href="#enroll">Enroll</a>
      <a href="#contact">Contact Us</a>
      <a href="/login">Log In/Register</a>
    </nav>
  </header>
  
<main>
  <section id="home">
   <div class="container">
     <h1>Welcome to our Daycare</h1>
     <p>We provide high quality care and education for children aged 6 months to 5 years.</p>
     <a href="about" class="btn">Learn More</a>
   </div>  
  </section>
  
  <section id="about" style="background-color: #F8F8F8; padding-top: 50px; padding-bottom: 50px;display: flex; justify-content: center; align-items: center; height: 100vh;">
   <div class="container">
     <div class="row justify-content-center">
       <div class="col-md-8 text-center">
         <h2 style="font-size: 36px; font-weight: bold; color: #333;">About Us</h2>
         <p style="font-size: 18px; color: #666; margin-top: 20px;">A safe and nurturing environment for your child</p>
         <ul style="list-style: disc; margin-top: 30px; font-size: 18px;">
           <li>Highly qualified and experienced staff</li>
           <li>Spacious and well-equipped play areas</li>
           <li>Nutritious and delicious meals and snacks</li>
           <li>Age-appropriate learning and development activities</li>
           <li>Flexible schedules and affordable rates</li>
         </ul>
       </div>
     </div>
   </div>
  </section>

<section id="reviews" style="background-color: #F5DEB3; padding-top: 50px; padding-bottom: 50px; min-height: 100vh;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h2 style="font-size: 36px; font-weight: bold; color: #333;">Reviews</h2>
        <hr style="width: 10%; height: 3px; background-color: #333; margin: 30px auto;">
        @isset($avgRating)
         <h3 style="margin-bottom: 20px;">Average Rating: {{ $avgRating }}</h3>
        @endisset
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h3 style="margin-bottom: 20px;">Write a Review</h3>
        <form action="{{ route('reviews.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="rating">Rating</label>
            <select name="rating" id="rating" class="form-control" required>
              <option value="">Select a rating</option>
              <option value="1">1 star</option>
              <option value="2">2 stars</option>
              <option value="3">3 stars</option>
              <option value="4">4 stars</option>
              <option value="5">5 stars</option>
            </select>
          </div>
          <div class="form-group">
            <label for="comment">Comment</label>
            <textarea name="comment" id="comment" rows="3" class="form-control" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #333; border-color: #333; margin-top: 20px;">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>








    <section id="contact">
    <h2>Contact Us</h2>
    <p>For any questions or inquiries, please contact us using the information below:</p>
    <ul>
       <li>Phone: 555-555-5555</li>
       <li>Email: info@daycarecenter.com</li>
       <li>Address: Dhaka, Bangladesh</li>
    </ul>
    </section>

  </main>
  
  <footer style="background-color: #f5f5f5; padding: 20px; text-align: center;">
    <p style="font-size: 14px; color: #999;">&copy; 2023 Daycare Center by Ahmed Zarir Siddique. All rights reserved.</p>
  </footer>
</body>
</html>
