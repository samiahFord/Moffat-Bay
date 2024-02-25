<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Moffat Bay Lodge Website</title>
        <link rel="icon" type="image/x-icon" href="/Moffat-Bay/shared/transparent-logo.png">
        <link rel="stylesheet" href="shared/attractions.css">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap"
          rel="stylesheet"
        />
    </head>

    <body>
        <!-- Navigation Bar-->
        <?php
        readfile("shared/navigation.html");
        ?>
        
        <!-- Video Section -->
        <div class="video-container">
            <video src="shared/attrimages/whalewatching.mp4" controls autoplay loop></video>
        </div>

        <div class="attractionsH">
            <h1>ATTRACTIONS</h1>
            <span class="line"></span>
        </div>

        <div class="attractionsp">
            <h3>
                Discover the thrills around Joviedsa Island, part of the San Juan Islands, and home to Moffat Bay Lodge and Marina.
                <br/>
                Click on 'Learn More' under each activity to learn about every unique offering.
                <br/>
                Each link is a resource to the corresponding activity officially sponsored by the San Juan Islands Visitors Bureau, and All San Juan Islands Washington Vacations.
            </h3>
        </div>


        <!-- Attractions Section -->
        <div class="attractions">
            <!-- Top cards -->
            <div class="card">

                <div class="card-body">
                    <img src="shared/attrimages/hiking.jpg" class="card-img" alt="Card Image">
                    <h2 class="hiking">Hiking</h2>
                    <p class="card-text"> Explore Our Beautiful Trails with Scenic Views!</p>
                    <a href="https://www.visitsanjuans.com/itineraries/best-hikes-in-the-san-juan-islands" target="_blank" class="btn"> Learn More</a>
                </div>




                <div class="card-body">
                    <img src="shared/attrimages/whalewatch.jpg" class="card-img" alt="Card Image">
                    <h2 class="whale watching">Whale Watching</h2>
                    <p class="card-text"> Get Up Close to Majestic Whales in Their Natural Habitat!</p>
                    <a href="https://www.visitsanjuans.com/whale-watching" target= "_blank" class="btn"> Learn More</a>
                </div>




                <div class="card-body">
                    <img src="shared/attrimages/scuba.jpg" class="card-img" alt="Card Image">
                    <h2 class="scuba">Scuba Diving</h2>
                    <p class="card-text">Get a Closer Look at the Marine Life Surrounding San Juan Islands!</p>
                    <a href="https://www.allsanjuanislands.com/summer_recreation/diving.php" target="_blank" class="btn"> Learn More</a>
                </div>
            </div>


            <!-- Bottom Cards -->
            <div class="card2">

                <div class="card-body2">
                    <img src="shared/attrimages/san-juan-islands-museum.jpeg" class="card-img" alt="Card Image">
                    <h2 class="museums">Arts & History</h2>
                    <p class="card-text"> Dive Into the Rich Culture of the San Juan Islands</p>
                    <a href="https://www.visitsanjuans.com/the-arts" target="_blank" class="btn"> Learn More</a>
                </div>




                <div class="card-body2">
                    <img src="shared/attrimages/winetasting.jpg" class="card-img" alt="Card Image">
                    <h2 class="wine tasting">Wine Tasting</h2>
                    <p class="card-text"> Raise a Glass and Relax with a Great View!</p>
                    <a href="https://www.visitsanjuans.com/wineries-breweries-distilleries" target="_blank" class="btn"> Learn More</a>
                </div>




                <div class="card-body2">
                    <img src="shared/attrimages/kayak.png" class="card-img" alt="Card Image">
                    <h2 class="kayaking">Kayaking</h2>
                    <p class="card-text"> The Bay is Calling, and You Must Answer!</p>
                    <a href="https://www.visitsanjuans.com/kayaking" target="_blank" class="btn"> Learn More</a>
                </div>
            </div>
        </div>

        <!-- More info -->
        <div class="moreInfo">
            <h3 >Experience new and thrilling adventures daily, from seaplane tours and vibrant farmer's markets, to intriguing haunted venues. Promising endless excitement around every <a href="https://www.visitsanjuans.com/experiences" target="_blank">corner!</a></h3>
            <br><br>            
            <h4> For transportation options and availability, please visit: <a href="https://www.visitsanjuans.com/island-transportation" target="_blank"> San Juan Islands: Getting Around </a></h4>
        </div> 
   <!-- Footer -->
    <?php readfile("shared/footer.php"); ?>
    </body>
</html>
