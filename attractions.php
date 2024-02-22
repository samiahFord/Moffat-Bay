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
        </div>

        <div class="attractionsp">
            <p>
                To explore all the attractions available around Moffat Bay Lodge, click on Learn More.
                <br/>
                This will take you to the pertinent information to get your adventure started!
                <br/>
                ** The links provided are from third party websites **
            </p>
        </div>


        <!-- Attractions Section -->
        <div class="attractions">
            <!-- Top cards -->
            <div class="card">

                <div class="card-body">
                    <img src="shared/attrimages/hiking.jpg" class="card-img" alt="Card Image">
                    <h2 class="hiking">Hiking</h2>
                    <p class="card-text"> Explore our beautiful trails with scenic views!</p>
                    <a href="https://www.travelsanjuan.com/explore/hiking" class="btn"> Learn More</a>
                </div>




                <div class="card-body">
                    <img src="shared/attrimages/whalewatch.jpg" class="card-img" alt="Card Image">
                    <h2 class="whale watching">Whale Watching</h2>
                    <p class="card-text"> Get up close to majestic whales in their natural habitat!</p>
                    <a href="https://www.visitsanjuans.com/whale-watching" class="btn"> Learn More</a>
                </div>




                <div class="card-body">
                    <img src="shared/attrimages/scuba.jpg" class="card-img" alt="Card Image">
                    <h2 class="scuba">Scuba Diving</h2>
                    <p class="card-text">Get a closer look at the marine life surrounding San Juan Islands!</p>
                    <a href="https://www.go-washington.com/San-Juan-Islands/Scuba-Diving-Snorkeling/#" class="btn"> Learn More</a>
                </div>
            </div>


            <!-- Bottom Cards -->
            <div class="card2">

                <div class="card-body2">
                    <img src="shared/attrimages/san-juan-islands-museum.jpeg" class="card-img" alt="Card Image">
                    <h2 class="museums">Museums</h2>
                    <p class="card-text"> Dive into history, art, and more!</p>
                    <a href="https://www.travelsanjuan.com/museums" class="btn"> Learn More</a>
                </div>




                <div class="card-body2">
                    <img src="shared/attrimages/winetasting.jpg" class="card-img" alt="Card Image">
                    <h2 class="wine tasting">Wine Tasting</h2>
                    <p class="card-text"> Raise a glass and relax with a great view!</p>
                    <a href="https://www.visitsanjuans.com/wineries-breweries-distilleries" class="btn"> Learn More</a>
                </div>




                <div class="card-body2">
                    <img src="shared/attrimages/kayak.png" class="card-img" alt="Card Image">
                    <h2 class="kayaking">Kayaking</h2>
                    <p class="card-text"> The Bay is calling, and you must answer!</p>
                    <a href="https://www.visitsanjuans.com/kayaking" class="btn"> Learn More</a>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <?php readfile("shared/footer.php"); ?>
    </body>
</html>
