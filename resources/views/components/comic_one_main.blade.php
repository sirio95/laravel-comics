<?php
$card_one= [
        "title" => "Action Comics #1000: The Deluxe Edition",
        "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
        "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
        
        
        "price" => "$19.99",
        "series" => "Action Comics",
        "sale_date" => "2018-10-02",
        "type" => "comic book",
        "artists" => [
            "José Luis García-López",
            "Clay Mann",
            "Rafael Albuquerque",
            "Patrick Gleason",
            "Dan Jurgens",
            "Joe Shuster",
            "Neal Adams",
            "Curt Swan",
            "John Cassaday",
            "Olivier Coipel",
            "Jim Lee"
        ],
        "writers" => [
            "Brad Meltzer",
            "Tom King",
            "Scott Snyder",
            "Geoff Johns",
            "Brian Michael Bendis",
            "Paul Dini",
            "Louise Simonson",
            "Richard Donner",
            "Marv Wolfman",
            "Peter J. Tomasi",
            "Dan Jurgens",
            "Jerry Siegel",
            "Paul Levitz"
        ],
    ]
?>

<section id="comic_one">
    <div class="comic_one_img">
        <img src="<?php echo $card_one['thumb']?>" alt="comic one">
    </div>
    <div class="row">
        <div class="col-8">
            <h2><?php echo $card_one['title'] ?></h2>
            <div class="green_stripe d-flex">
                <div class="d-flex justify-content-space-between">
                    <div class="text-capitalize price_col">u.s. price: <span><?= echo $card_one['price']?></span></div>
                    <div class="text-uppercase price_col">available</div>
                </div>
                <div>check availability <span><a href="#">&#9660;</a></span></div>
            </div>
            <div class="text"><?= echo $card_one['description'] ?></div>
        </div>
        <div class="col-4">
            <h3 class='text-uppercase'>advertisement</h3>
            <img src="{{ Vite::asset('resources/imgs/adv.jpg') }}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h2 class="text-capitalize">talent</h2>
            <div class="d-flex justify-content-between">
                <div>Art by:</div>
                <div class="authors"><?= echo $card_one['artists'] ?></div>
            </div>
            <div class="d-flex justify-content-between">
                <div>Written by:</div>
                <div class="authors"><?= echo $card_one['writers'] ?></div>
            </div>
        </div>
        <div class="col-6">
            <h2 class="text-capitalize">specs</h2>
            <div class="d-flex justify-content-between">
                <div class="text-capitalize">series:</div>
                <div><a href="#" class='text-uppercase'> <?= echo $card_one['series'] ?> </a></div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="text-capitalize">u.s. price:</div>
                <div class="price"><?= echo $card_one['price'] ?></div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="text-capitalize"> on sale date: </div>
                <div class="date"> <?= echo $card_one['sale_date'] ?></div>
            </div>
        </div>
    </div>
</section>