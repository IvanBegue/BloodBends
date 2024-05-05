<?php
session_start();
require_once "../assets/template.php";
require_once "../db/pdo.php";




// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Start the SQL transaction
        $pdo->beginTransaction();

        // Insert into quick_order table
        $price = $_POST['price']; 
        $payment = $_POST['payment']; 
        
        $quantity = $_POST['quantity']; 
        $datePick = $_POST['pickUpTime']; 

        // Prepare the SQL statement to insert into the quick_order table
        $insertQuickOrderQuery = "INSERT INTO quick_order (price, payment, quantity, datePick) VALUES (?, ?, ?, ?)";
        $insertQuickOrderStmt = $pdo->prepare($insertQuickOrderQuery);
        $insertQuickOrderStmt->execute([$price, $payment, $quantity, $datePick]);

        // Retrieve the ID of the inserted quick_order record
        $quickOrderId = $pdo->lastInsertId();

        // Iterate over the POST data to extract selected options for each customization
        foreach ($_POST as $key => $value) {
            // Check if the key starts with "customization_" (indicating a customization field)
            if (strpos($key, 'customization_') === 0) {
                // Get the customization ID from the key
                $customizationId = substr($key, strlen('customization_'));

                // Check if the value is an array (indicating checkboxes)
                if (is_array($value)) {
                    // Iterate over selected checkbox values
                    foreach ($value as $optionId) {
                        // Prepare the SQL statement to insert selected options into the database
                        $insertSelectedOptionQuery = "INSERT INTO selected_options (quick_order_id, customization_id, option_id) VALUES (?, ?, ?)";
                        $insertSelectedOptionStmt = $pdo->prepare($insertSelectedOptionQuery);
                        $insertSelectedOptionStmt->execute([$quickOrderId, $customizationId, $optionId]);
                    }
                } else {
                    // For dropdowns (single selection), $value contains the selected option ID
                    // Prepare the SQL statement to insert the selected option into the database
                    $insertSelectedOptionQuery = "INSERT INTO selected_options (quick_order_id, customization_id, option_id) VALUES (?, ?, ?)";
                    $insertSelectedOptionStmt = $pdo->prepare($insertSelectedOptionQuery);
                    $insertSelectedOptionStmt->execute([$quickOrderId, $customizationId, $value]);
                }
            }
        }

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

	
	<script src="../js/modernizr.js"></script> <!-- Modernizr -->
    
    </head>
    <body >
    <section class="home-banner" id="home">
        <div class="container">
            <div class="banner-content pt-120 pb-120">

                <h5 class="font-alt ban-txt wow fadeInDown animated animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown; font-family:Arial, Helvetica, sans-serif">Blood Blends</h5>
                <p class="text-center wow fadeInUp animated animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; font-family:Arial, Helvetica, sans-serif"> "Indulge in the darkness of our Vampire Smoothie Bar, where each sip beckons with immortal flavors and chilling delights. Unleash your inner nightwalker with our blood-red blends and ethereal essences, crafted to satisfy even the most refined undead palate. Dare to taste eternity in every sip at our cryptic hideaway."</p>
                <div class="btn-bar text-center">
                    <a href="#" class="know-more-btn wow fadeInDown animated animated" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInDown; font-family:Arial, Helvetica, sans-serif">Know More</a>
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
                        <input type="radio" name="paymentMethod" value="Pick"  name="rndPick"> Pick up and Pay<br>
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

                        <div class="btn-bar wow fadeInUp animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <a href="#" class="">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About us end-->
        <hr class="border-line">
        <!-- About us end-->
    


        <main class="cd-main-content">
            <div class="cd-tab-filter-wrapper">
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
        
    </script>
</html>