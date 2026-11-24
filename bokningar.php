<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M&F booking</title>
    <link rel="stylesheet" href="css/bokningar_stylas.css">
</head>

<body>
    <header class="topbar"> <a class="logo" href="#">M&F<span>DRIVE</span></a>
        <nav>
            <a href="#cars">Our Cars</a>
            <a href="#search">Find a Car</a>
            <a href="#contact">Contact</a>
        </nav>
        <a class="nav-button" href="#search">Book a Car</a>
    </header>
    <main>


        <section class="hero">
            <div class="hero-content">
                <p class="eyebrow">CARS ON YOUR TERMS</p>
                <h1>Find the car that<br><span>fits your lifestyle.</span></h1>
                <p class="hero-text">
                    Find, compare and book your next car with ease.
                </p>
                <a class="primary-button" href="#search">Find Your Car →</a>
            </div>
        </section>

        <section class="search-section" id="search">
            <div class="section-heading">
                <h2>Find an Available Car</h2>
                <p>Select your dates and preferred car brand.</p>
            </div>

            <form class="search-card">
                <label>
                    Pickup Date
                    <input type="date" required>
                </label>

                <label>
                    Return Date
                    <input type="date" required>
                </label>

                <label>
                    Car Brand
                    <select>
                        <option>All Brands</option>
                        <option>BMW</option>
                        <option>Mercedes-Benz</option>
                        <option>Audi</option>
                        <option>Volvo</option>
                        <option>Tesla</option>
                    </select>
                </label>

                <button class="primary-button" type="submit">Search Cars →</button>
            </form>
        </section>

        <section class="cars-section" id="cars">
            <div class="section-heading">
                <h2>Our Cars</h2>
                <p>Discover our popular car models.</p>
            </div>

            <div class="car-grid">

                <article class="car-card">
                    <div class="car-visual car-one"></div>
                    <div class="car-info">
                        <h3>Volvo XC60</h3>
                        <p>Automatic · SUV</p>
                        <strong>4,995 SEK / month</strong>
                        <a href="#contact">Book Now →</a>
                    </div>
                </article>

                <article class="car-card">
                    <div class="car-visual car-two"></div>
                    <div class="car-info">
                        <h3>BMW 3 Series</h3>
                        <p>Automatic · Sedan</p>
                        <strong>5,495 SEK / month</strong>
                        <a href="#contact">Book Now →</a>
                    </div>
                </article>

                <article class="car-card">
                    <div class="car-visual car-three"></div>
                    <div class="car-info">
                        <h3>Tesla Model 3</h3>
                        <p>Electric · Automatic</p>
                        <strong>5,995 SEK / month</strong>
                        <a href="#contact">Book Now →</a>
                    </div>
                </article>

            </div>
        </section>

        <section class="booking-section" id="contact">
            <div>
                <h2>Book Your Next Car</h2>
                <p>Contact us by submitting a booking request.</p>
            </div>

            <form class="booking-form">

                <label>
                    Full Name
                    <input type="text" placeholder="Your name" required>
                </label>

                <label>
                    Email Address
                    <input type="email" placeholder="Your email address" required>
                </label>

                <label>
                    Select a Car
                    <select required>
                        <option value="">Choose a car</option>
                        <option>Volvo XC60</option>
                        <option>BMW 3 Series</option>
                        <option>Tesla Model 3</option>
                    </select>
                </label>

                <button class="primary-button" type="submit">
                    Submit Booking Request
                </button>

            </form>
        </section>
        
        
    </main>

   <footer>
         <a class="logo" href="#">M&F<span>DRIVE</span></a>
     <p>2026 M&F DRIVE. All rights reserved.</p>
        </footer>

    
</body>


</html>