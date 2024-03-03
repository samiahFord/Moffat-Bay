<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>About Us - Moffat Bay Lodge and Marina</title>
  <link rel="icon" type="image/x-icon" href="/Moffat-Bay/shared/transparent-logo.png">
  <link href="shared/aboutUs.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation Bar-->
    <?php
        readfile("shared/navigation.html");
    ?>

    <!-- Opening Text -->
    <div class="our-story">
        <h1> ABOUT US </h1>
        <span class="line"></span>
        <p>
            Nestled on the picturesque Joviedsa Island, part of the stunning San Juan Islands, Moffat Bay Lodge and Marina is a hidden gem that exudes beauty straight out of a magazine. Surrounded by crystal-clear waters and lush green forests, this tranquil oasis offers a retreat like no other.
        </p>
        <br/>
        <p>
            The heart of Moffat Bay Lodge lies in its dedicated and friendly staff, who strive to make every guest's stay unforgettable. From the moment you arrive, you'll be greeted with warm smiles and impeccable service, ensuring that your every need is met with care and attention.
        </p> 

    </div>
    <!-- Image Cascade -->
    <div class="image-cascade">        

        <div class="firstpic">
        <p>
            Embark in a culinary journey at our exquisite dining experiences, where locally sourced ingredients and expertly crafted dishes come together to create a symphony of flavors. Whether you're savoring a meal in our elegant restaurant or enjoying a casual bite by the marina, every bite is a feast for the senses.
        </p>
            <img src="shared/attrimages/fullchef.jpg" alt="Moffat Bay Lodge and Marina">

        </div>
        <div class="secondpic">           
            <p>
                Relax and unwind in our indoor heated pool, where you can soak in the tranquil surroundings and let the stress melt away. 
            </p>

            <img src="shared/attrimages/indoor heated pool.jpg" alt="Moffat Bay Lodge and Marina">

        </div>
        <div class="thirdpic">
            <p>
                Explore our spacious rooms featuring double full beds, queen beds, double queen beds, and king beds, providing options for every type of traveler. Whether you are traveling solo, as a couple, or with a group of friends or family, our rooms can accommodate 1 to 5 guests comfortably.
            </p>
            <img src="shared/attrimages/sasha-kaunas-67-sOi7mVIk-unsplash.jpg" alt="Moffat Bay Lodge and Marina">
            
        </div>

        <div class="fourthpic">
            <p>
            Indulge in the ultimate relaxation experience at Moffat Bay Lodge and Marina's luxurious spa. Our spa offers a serene escape for guests seeking rejuvenation and tranquility. Treat yourself to a pampering massage, a revitalizing facial, or a soothing body treatment, all performed by our skilled and experienced therapists.
            </p>
            <img src="shared/attrimages/spa.jpg" alt="Moffat Bay Lodge and Marina">
            
        </div>

        <div class="fifthpic">
            <p>
            At Moffat Bay Lodge and Marina, families are always welcome, and our playground and children's activities are sure to keep the little ones entertained for hours on end. Let your kids explore the playground, complete with slides, swings, and climbing frames, or take part in our organized activities such as arts and crafts, scavenger hunts, or nature walks. 
            </p>
            <img src="shared/attrimages/playground.jpg" alt="Moffat Bay Lodge and Marina">
            
        </div>

        <div class="sixthpic">
            <p>
            For those who love the water, Moffat Bay Lodge and Marina's marina facilities offer everything you need for a seamless and enjoyable boating experience. Refuel your boat at our convenient fuel docks, or have it washed and repaired by our expert technicians. Stock up on all your marine and boat chandlers at our on-site stores, where you'll find everything from fishing gear to boat accessories.
            </p>
            <img src="shared/attrimages/marina1.jpg" alt="Moffat Bay Lodge and Marina">
            
        </div>
    </div>


    <!-- Location Map -->
    <section id="location">
        <h2>Location</h2>
        <img src="/Moffat-Bay/shared/attrimages/map.png" alt="map" style="height: 600px; width: 800px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2638.9196617269836!2d-122.97179092661662!3d48.59223709415396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1707408901777!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Joviedsa Island, nestled next to Broken Point</iframe>
    </section>

    <div class="reelEmIn">
        <h3>
            Book now and experience the tranquility, luxury, and relaxation that only Moffat Bay Lodge can offer!
        </h3>
    </div>

    <!-- Book Now Button -->
    <button class="bookNow" type="button">
        <a href="room_reservation.php">Book Now!</a>
    </button>

    <!-- Contact Us -->
    <div class="contactbg">

            <div class="contactform" id="contactform">
                <h2>Contact Us</h2>
                <form action="contactForm.php" method="post" id="contactForm">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>

                <input type="submit" value="Send Message">
                </form> 
            </div>

            <div class="ourinfo">
                <h3>You may also reach us at: <a href="mailto:info@moffatbaylodge.com">info@moffatbaylodge.com</a> <br> or by phone at (555) 555-5555.</h3>
                <br>
                <p>
                    460 Moffat Bay Dr <br>
                    Joviedsa Island, <br>
                    San Juan County, WA 98260
                </p>
            </div>
    </div>

    <!-- Footer -->
    <?php readfile("shared/footer.php"); ?>
</body>