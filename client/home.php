<?php
session_start();
require_once "../assets/template.php";
require_once "../db/pdo.php";




// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        //Start the SQL transaction
        $pdo->beginTransaction();
        
        
        
        $quantity = $_POST['quantity']; 
        $datePick = $_POST['pickUpTime']; 

        // Prepare the SQL statement to insert into the quick_order table
        $insertQuickOrderQuery = "INSERT INTO quick_order (quantity, datePick) VALUES (?, ?, ?, ?)";
        $insertQuickOrderStmt = $pdo->prepare($insertQuickOrderQuery);
        $insertQuickOrderStmt->execute([$quantity, $datePick]);

        

        // Commit the transaction
        $pdo->commit();

        // Success message
        echo "Order and selected options inserted successfully!";
    } catch (PDOException $e) {
        // Rollback the transaction in case of error
        $pdo->rollBack();
        
        // Handle database connection errors
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="NextGenerationDev">
        <title> Vampire Smoothie</title>
        

        <!-- jQuery UI theme CSS -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/all.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/all.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	
	<script src="../js/modernizr.js"></script> <!-- Modernizr -->
    
    </head>
    <body >
    <section class="home-banner" id="home">
    <noscript>
        <div style="background-color: #ffdddd; padding: 20px; margin-bottom: 20px; border-left: 6px solid #f44336;">
            <strong>JavaScript Disabled</strong>
            <p>For full functionality of this site it is necessary to enable JavaScript. 
                Here are the <a href="https://www.enable-javascript.com/" target="_blank">instructions how to enable JavaScript in your web browser</a>.</p>
        </div>
    </noscript>
    <body style="overflow-x: hidden;">
    <?php include_once '../files/header.php' ?>


        <div class="section-container-items" style="overflow-y: hidden;">
        <div class="container">
        <div class="row align-items-center h-100">
        <div class="section col-md-6" style="margin-top: 20px;">
        <h1 class="font-alt ban-txt wow fadeInDown animated animated"
    data-wow-delay="0.5s"
    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown; font-size: 50px;">
    Vampire Smoothies
</h1>
<br><br>
    <h3 class="text-center wow fadeInUp animated animated"
        data-wow-delay="0.3s"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;  font-size: 20px;">
        "Indulge in the darkness of our Vampire Smoothie Bar, where each sip beckons with immortal flavors
        and chilling delights. Unleash your inner nightwalker with our blood-red blends and ethereal
        essences, crafted to satisfy even the most refined undead palate. Dare to taste eternity in every
        sip at our cryptic hideaway."
    </h3>

                <h5 class="font-alt ban-txt wow fadeInDown animated animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown; font-family:Arial, Helvetica, sans-serif">Blood Blends</h5>
                <p class="text-center wow fadeInUp animated animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; font-family:Arial, Helvetica, sans-serif"> "Indulge in the darkness of our Vampire Smoothie Bar, where each sip beckons with immortal flavors and chilling delights. Unleash your inner nightwalker with our blood-red blends and ethereal essences, crafted to satisfy even the most refined undead palate. Dare to taste eternity in every sip at our cryptic hideaway."</p>
                <div class="btn-bar text-center">
                    <a href="#" class="know-more-btn wow fadeInDown animated animated" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInDown; font-family:Arial, Helvetica, sans-serif">Know More</a>
    <div class="btn-bar text-center">
                    <a href="#" class="know-more-btn wow fadeInDown animated animated" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInDown;">Know More</a>
                </div>
</div>

            <div class="alta col-md-6 d-flex justify-content-lg-end align-items-center h-100">
                <span class="alta-title">Find Yours</span>
                <img class="img-fluid"
    data-aos="zoom-out-left"
    data-aos-duration="800"
    src="../images/bannervamp.webp"
    alt="Vampire Banner Image"
    style="max-width: 80%; height: auto;"><!-- HTML with Image and AOS Animation -->

            </div>
            </div>
        </div>
    </div>
   </div>

       
   <div id="customizeModal" class="customize-modal">
            <div class="customize-modal-content">
                <span class="customize-close">&times;</span>
                <h2>Customize Your Smoothie</h2>
                <br>


                <form id="customizeForm" method="POST">
    <?php
    try {
        // Prepare SQL statement to fetch customizations and their options
        $customizationQuery = "SELECT * FROM customization";
        $customizationStmt = $pdo->prepare($customizationQuery);
        $customizationStmt->execute();
        
        // Check if any customizations exist
        if ($customizationStmt->rowCount() > 0) {
            while ($customizationRow = $customizationStmt->fetch(PDO::FETCH_ASSOC)) {
                // Output customization name
                $customizationId = $customizationRow['c_id'];
                echo '<div class="customize-form-group">';
                echo '<label>'.$customizationRow['custom_name'] . ':</label>';
            
                // Prepare SQL statement to fetch options for the current customization
                $optionQuery = "SELECT * FROM tbl_option WHERE fk_customization = ?";
                $optionStmt = $pdo->prepare($optionQuery);
                $optionStmt->execute([$customizationId]);
                
                // Check if any options exist
                if ($optionStmt->rowCount() > 0) {
                    $controlType = $customizationRow['custom_control'];
                    if ($controlType === 'checkbox') {
                        // Output checkboxes
                        while ($optionRow = $optionStmt->fetch(PDO::FETCH_ASSOC)) {
                            echo '<div class="form-check">';
                            echo '<input class="form-check-input" type="checkbox" name="customization_' . $customizationId . '[]" id="option_' . $optionRow['opt_id'] . '" value="' . $optionRow['opt_id'] . '">';
                            echo '<label class="form-check-label" for="option_' . $optionRow['opt_id'] . '">' . $optionRow['opt_name'] . '</label>';
                            echo '</div>';
                        }
                    } else {
                        // Output dropdown
                        echo '<select id="customization_' . $customizationId . '" name="customization_' . $customizationId . '" class="form-control">';
                        while ($optionRow = $optionStmt->fetch(PDO::FETCH_ASSOC)) {
                            echo '<option value="' . $optionRow['opt_id'] . '">' . $optionRow['opt_name'] . '</option>';
                        }
                        echo '</select>';
                    }
                }
        
                echo '</div>';
            }
        }
        
    } catch (PDOException $e) {
        // Handle database connection errors
        echo "Error: " . $e->getMessage();
    }

    ?>
                    <div class="customize-form-group">
                        <label for="pickUpTime">Pick-up Time:</label>
                        <input type="time" id="pickUpTime" name="pickUpTime" placeholder="Enter pick-up time" class="form-control">
                    </div>

                    <div class="customize-form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" placeholder="Enter quantity" class="form-control">
                    </div>

                    <div class="customize-form-group">
                        <label>Payment Method:</label><br>
                        <input type="radio" name="paymentMethod" value="Pick"  name="rndPick" > Pick up and Pay<br>
                        <input type="radio" name="paymentMethod" value="Juice" name="rndJuice"> Pay By Juice<br>
                    </div>

                    <div class="customize-btn-bar text-center">
                        <button  name="btnSubmit" type="submit">Submit</button>
                        <button type="button" id="customizeCancelBtn">Cancel</button>
                    </div>
    <!-- Other form elements -->

</form>


            </div>
        </div>




    </section>
    <!-- Home Banner End -->
    
        <!-- About us start-->
        <!-- About us start-->
    <section class="section aboutus pt-120 pb-120" id="about">
        <div class="container">
            <div class="tittle-content mb-70 wow fadeInDown animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
                <h2>About Blood Blends</h2>
                <p>
                    "Quench your eternal thirst at our Vampire Smoothie Bar, where each concoction whispers of centuries past. Embrace the darkness in every sip, a symphony of flavor fit for the undead."
                </p>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about-thump wow slideInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInLeft;">
                        <img src="../assets/images/about/about-1.jpg" alt="about-image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <h2 class=" wow fadeInUp animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            The Smoothies
                        </h2>
                        <p class=" wow fadeInDown animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
                            Welcome to Blood Blends, where we invite you to experience the dark and mysterious world of vampire smoothies like never before. Our vampire smoothie bar is a haven for those seeking to indulge in unique, blood-red elixirs and tantalizing concoctions inspired by the lore of immortal beings. Step into our bar and immerse yourself in the ambiance of candlelit shadows and haunting melodies, where each sip is a journey into the supernatural.
                        </p>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            At Blood Blends, our menu features a diverse range of vampire-themed smoothies crafted with care and creativity. From the "Nightshade Nectar" infused with blackberry and essence of moonlight to the "Vampire's Kiss" with hints of dark chocolate and forbidden fruit, every drink is a blend of flavors that evoke the mystique of the undead.

                            Our ingredients are sourced from the finest blood oranges, blackberries, and dark cherries, ensuring each sip is a burst of flavor that leaves you craving more. Whether you're a seasoned vampire enthusiast or simply curious, our knowledgeable baristas are here to guide you through our menu and help you find your perfect blend.
                        </p>

           

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About us end-->
        <hr class="border-line">
        <!-- About us end-->
    


        <main class="cd-main-content">
                <div class="cd-tab-filter">

                    <ul class="cd-filters">
                        <li class="placeholder"> 
                            <a data-type="all" href="#0">All</a>
                        </li> 
                        <li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
                        <li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Color 1</a></li>
                        <li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Color 2</a></li>
                    </ul> 

                </div>
            </div>
    
            <section class="cd-gallery">
                <ul>
                    
                <?php
                
                    $sql = "SELECT smoothie_id, smoothie_name, smoothie_desc, smoothie_img, smoothie_price FROM tbl_smothie";
                    $stmt = $pdo->query($sql);
 
                         // Check if there are rows returned
                    if ($stmt->rowCount() > 0) 
                    {
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo '<li class="mix color-' . $row["smoothie_id"] . ' check '. $row["smoothie_id"] .' radio'. $row["smoothie_id"] .' option'. $row["smoothie_id"] .'"><img src="../images/' . $row['smoothie_img'] . '" alt="Image 2"></li>';
                        }
                        

                    }else {
                        // If no rows returned, display a message or alternative content
                        echo '<li>No smoothies available</li>';
                    }

                ?>

              

                </ul>
                <div class="cd-fail-message">No results found</div>
            </section> <!-- cd-gallery -->
    
          
           
        </main> <!-- cd-main-content -->




<!-- Artist Section -->
<section class="artist-part pt-120 pb-120" id="artist">
    <div class="container">
        <div class="tittle-content mb-70">
            <h2>Our Vampire Powers</h2>
            <p>"Within the shadows, their powers awaken—a symphony of darkness, a ballet of blood. Immortal strength and unearthly grace, wielded by those who walk the night."</p>
        </div>

        <!-- Artist Container -->
        <div class="artist-container"></div>

        <!-- Pagination -->
        <div class="artist-pagination text-center mt-4"></div>
    </div>
</section>


        <!-- Ticket End -->
    
        <div id="contacts" class="section contact-section">

            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="footer_text wow slideInDown" data-wow-delay="1s" style="visibility: hidden; animation-delay: 1s; animation-name: none;">
                            <p>

Made with ❤️🧛‍♂️ by Team VERTEX
</p>
                            </div>
                            <button class="top-btn" style="opacity: 0;"><i class="fa-solid fa-chevron-up"></i></button>
                        </div>
    

<!-- Artist Section -->
<section class="artist-part pt-120 pb-120" id="artist">
<div class="container mt-5">

    <div class="row" id="smoothie-grid">

    <?php
        $sql = "SELECT `smoothie_id`, `smoothie_name`, `smoothie_desc`, `smoothie_img`, `smoothie_price` FROM `tbl_smothie`";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();


        if ($stmt->rowCount() > 0) {
            // Loop through each row in the result set
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 smoothie-card" data-toggle="modal" data-target="#ratingModal">
                        <img src="../uploads/gallery/<?php echo $row['smoothie_img']; ?>" class="card-img-top" alt="<?php echo $row['smoothie_name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['smoothie_name']; ?></h5>
                            <p class="card-text">Price: Rs. <?php echo $row['smoothie_price']; ?></p>
                            <button class="btn btn-dark btn-block">Order Now</button>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            // If no results found
            echo "No smoothies found.";
        }

    
    ?>
       
       

      

       



    </div>


    <!-- View All Button -->
    <div class="text-center">
        <button class="btn btn-dark" id="view-all-btn">View All Smoothies</button>
    </div>
</div>

<!-- Detail Modal -->
<div class="modal fade" id="smoothieDetailModal" tabindex="-1" role="dialog" aria-labelledby="smoothieDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smoothieDetailModalLabel">Smoothie Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <div class="row">
                    <div class="col-md-6">
                        <img src="../images/smoothie-1.jpeg" class="img-fluid" alt="Smoothie Image">
                    </div>
                    <div class="col-md-6">
                        <h5 class="modal-title" ><b>Vampire's Delight</b></h5>
                        <br>
                        <p><b>Description:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non mauris vitae erat consequat auctor eu in elit.</p>
<br>
<label><b>Choose Cup Size:</b></label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentOption" id="collectAndPay" value="collectAndPay">
                            <label class="form-check-label" for="collectAndPay">
                            Baby Vampire
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentOption" id="payByJuice" value="payByJuice">
                            <label class="form-check-label" for="payByJuice">
                            Teen Vampire
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentOption" id="payByJuice" value="payByJuice">
                            <label class="form-check-label" for="payByJuice">
                            Vampire Lord
                            </label>
                        </div>

<br>
                        <!-- Price -->
                        <p><b>Price: Rs. 200</b></p><b><br>
                        <label><b>Choose payment method:</b></label><br>
                        <!-- Payment Options -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentOption" id="collectAndPay" value="collectAndPay">
                            <label class="form-check-label" for="collectAndPay">
                                Collect and Pay
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentOption" id="payByJuice" value="payByJuice">
                            <label class="form-check-label" for="payByJuice">
                                Pay by Juice
                            </label>
                        </div>
<br>
                        <label><b>Pick Up Time:</b></label>
                        <input type="time" class="form-control">
                        <br>

                        <!-- Confirm Order Button -->
                        <button class="btn btn-dark btn-block mt-4">Confirm Order</button>
                    </div>
                </div>
            </div>
        </div>
    
        <script src="../assets/js/jquery-3.6.0.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/isotope.pkgd.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>
        <script src="../assets/js/swiper-bundle.min.js"></script>
        <script src="../assets/js/custom.js"></script>
        <script src="../assets/js2/jquery-2.1.1.js"></script>
        <script src="../assets/js2/jquery.mixitup.min.js"></script>
        <script src="../assets/js2/main.js"></script> <!-- Resource jQuery -->
    </body>
    

    </div>
</div>

</section>






        <!-- Ticket End -->
    
        <div id="contacts" class="section contact-section">

            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="footer_text wow slideInDown" data-wow-delay="1s" style="visibility: hidden; animation-delay: 1s; animation-name: none;">
                            <p>

Made with ❤️🧛‍♂️ by Team VERTEX
</p>
                     </div>
                            <button class="top-btn" style="opacity: 0;"><i class="fa-solid fa-chevron-up"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    
        <script src="../assets/js/jquery-3.6.0.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/isotope.pkgd.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>
        <script src="../assets/js/swiper-bundle.min.js"></script>
        <script src="../assets/js/custom.js"></script>
        <script src="../assets/js2/jquery-2.1.1.js"></script>
        <script src="../assets/js2/jquery.mixitup.min.js"></script>
        <script src="../assets/js2/main.js"></script> <!-- Resource jQuery -->

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/smoothScroll.js"></script>
    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
   

    </body>

    <script>
  // Define your artist data
  const artists = [{
            name: "Speed",
            image: "../assets/images/artist/artist-1.png",
            description: "Vampires are typically immortal or have greatly extended lifespans, often appearing young and unchanged over centuries."
        },
        {
            name: "Immortal",
            image: "../assets/images/artist/artist-2.png",
            description: "It was believed that on that day, the souls of the dead returned to their homes, so people dressed in costumes and lit bonfires to ward off spirits."
        },
        {
            name: "Shape-shifting",
            image: "../assets/images/artist/artist-3.png",
            description: "In some legends, vampires can transform into bats, wolves, or mist, allowing them to move stealthily or evade capture."
        },
        {
            name: "Speed",
            image: "../assets/images/artist/artist-1.png",
            description: "Vampires are typically immortal or have greatly extended lifespans, often appearing young and unchanged over centuries."
        },
        {
            name: "Immortal",
            image: "../assets/images/artist/artist-2.png",
            description: "It was believed that on that day, the souls of the dead returned to their homes, so people dressed in costumes and lit bonfires to ward off spirits."
        },
        {
            name: "Shape-shifting",
            image: "../assets/images/artist/artist-3.png",
            description: "In some legends, vampires can transform into bats, wolves, or mist, allowing them to move stealthily or evade capture."
        },
        {
            name: "Speed",
            image: "../assets/images/artist/artist-1.png",
            description: "Vampires are typically immortal or have greatly extended lifespans, often appearing young and unchanged over centuries."
        },
        {
            name: "Immortal",
            image: "../assets/images/artist/artist-2.png",
            description: "It was believed that on that day, the souls of the dead returned to their homes, so people dressed in costumes and lit bonfires to ward off spirits."
        },
        {
            name: "Shape-shifting",
            image: "../assets/images/artist/artist-3.png",
            description: "In some legends, vampires can transform into bats, wolves, or mist, allowing them to move stealthily or evade capture."
        }

    ];

    // Function to render an artist
    function renderArtist(index) {
        const artist = artists[index];
        if (artist) {
            const artistContent = `
        <div class="artist-items">
            <div class="artist-thump">
                <img src="${artist.image}" alt="artist-image">
            </div>
            <div class="artist-content">
                <h3>${artist.name}</h3>
                <p>${artist.description}</p>
            </div>
        </div>
    `;
            $(".artist-container").html(artistContent);
        }
    }

    // Function to render pagination buttons
    function renderPaginationButtons() {
        const totalArtists = artists.length;
        const pagination = $(".artist-pagination");
        pagination.empty();

        for (let i = 0; i < totalArtists; i++) {
            const pageNumber = i + 1;
            const button = `<button class="btn btn-sm btn-outline-secondary mx-1" onclick="renderArtist(${i})">${pageNumber}</button>`;
            pagination.append(button);
        }
    }

    // Initial render
    $(document).ready(function() {
        renderArtist(0); // Display the first artist initially
        renderPaginationButtons(); // Render pagination buttons
    });




    document.addEventListener("DOMContentLoaded", function() {
        // Get the modal element
        var modal = document.getElementById("customizeModal");

        // Get the button that opens the modal
        var knowMoreBtn = document.querySelector(".btn-bar a");

        // Get the <span> element that closes the modal
        var closeBtn = document.querySelector(".customize-close");

        // When the user clicks the button, open the modal
        knowMoreBtn.onclick = function() {
            modal.style.display = "block";
        };

        // When the user clicks on <span> (x), close the modal
        closeBtn.onclick = function() {
            modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };

        // Handle submit and cancel buttons
        document.getElementById("customizeSubmitBtn").onclick = function(event) {
            event.preventDefault(); // Prevent form submission (if the button is inside a form)
            // Add your logic to handle form submission
            console.log("Form submitted!");
            modal.style.display = "none";
            // Optionally, you can perform additional actions like form validation and AJAX requests here
        };

        document.getElementById("customizeCancelBtn").onclick = function() {
            // Clear form fields or perform any necessary actions
            modal.style.display = "none";
        };
    });
        

      // jQuery to hide/show smoothie grids and button on click
      $(document).ready(function() {
        // Initially hide smoothie grids beyond the first 10
        $('#smoothie-grid .col-lg-2:gt(9)').hide();

        // Click event for View All button
        $('#view-all-btn').click(function() {
            // Show all hidden smoothie grids
            $('#smoothie-grid .col-lg-2:gt(9)').toggle();
            // Toggle button text based on current state
            $(this).text(function(i, text) {
                return text === "View All Smoothies" ? "Show Less" : "View All Smoothies";
            });
        });

        // Click event for smoothie card to show detail modal
        $('.smoothie-card').click(function() {
            $('#smoothieDetailModal').modal('show');
        });
    });

    // Function to handle smooth scrolling
function smoothScroll(targetId) {
    const targetElement = document.getElementById(targetId);
    if (targetElement) {
        window.scrollTo({
            top: targetElement.offsetTop - 50, // Adjust scroll offset as needed
            behavior: 'smooth'
        });
    }
}

// Attach event listeners to navigation links
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.getAttribute('href').substring(1); // Extract target ID from href attribute
            smoothScroll(targetId);
        });
    });
});

    </script>
</html>