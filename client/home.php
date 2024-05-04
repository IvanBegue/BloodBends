<?php
session_start();
require_once "../assets/template.php";
require_once "../db/pdo.php";



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="NextGenerationDev">
        <title> Vampire Smoothie</title>
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

                <h5 class="font-alt ban-txt wow fadeInDown animated animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Blood Blends</h5>
                <p class="text-center wow fadeInUp animated animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"> "Indulge in the darkness of our Vampire Smoothie Bar, where each sip beckons with immortal flavors and chilling delights. Unleash your inner nightwalker with our blood-red blends and ethereal essences, crafted to satisfy even the most refined undead palate. Dare to taste eternity in every sip at our cryptic hideaway."</p>
                <div class="btn-bar text-center">
                    <a href="#" class="know-more-btn wow fadeInDown animated animated" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInDown;">Know More</a>
                </div>
            </div>
        </div>



        <div id="customizeModal" class="customize-modal">
            <div class="customize-modal-content">
                <span class="customize-close">&times;</span>
                <h2>Customize Your Smoothie</h2>
                <br>
                <form id="customizeForm">
                    <div class="customize-form-group">
                        <label>Base Options:</label>
                        <select id="baseSelect" name="base" class="form-control">
                            <option value="human-blood">Human Blood</option>
                            <option value="animal-blood">Animal Blood</option>
                        </select>
                    </div>

                    <div class="customize-form-group">
                        <label>Flavour Options:</label>
                        <select id="flavourSelect" name="flavour" class="form-control">
                            <option value="lorem">Raspberry Blood</option>
                            <option value="ipsum">Blackberry Essence</option>
                        </select>
                    </div>

                    <div class="customize-form-group toppings-group">
                        <label>Toppings:</label><br>
                        <!-- Add custom vampire-themed topping names -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk1" value="1">
                            <label class="form-check-label" for="chk1">Vampire Fangs</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk2" value="2">
                            <label class="form-check-label" for="chk2">Bat Wings</label>
                        </div>
                        <!-- Add more vampire-themed toppings -->
                    </div>

                    <div class="customize-form-group toppings-group">
                        <label>Cup Size:</label><br>
                        <!-- Add custom vampire-themed topping names -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk1" value="1">
                            <label class="form-check-label" for="chk1">Baby Vampire</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk2" value="2">
                            <label class="form-check-label" for="chk2">Teen Vampire</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chk2" value="2">
                            <label class="form-check-label" for="chk2">Vampire Lord</label>
                        </div>
                        <!-- Add more vampire-themed toppings -->
                    </div>

                    <div class="customize-form-group">
                        <label for="pickUpTime">Pick-up Time:</label>
                        <input type="text" id="pickUpTime" name="pickUpTime" placeholder="Enter pick-up time" class="form-control">
                    </div>

                    <div class="customize-form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" placeholder="Enter quantity" class="form-control">
                    </div>

                    <div class="customize-form-group">
                        <label>Payment Method:</label><br>
                        <input type="radio" name="paymentMethod" value="Pick aup and pay"> Pick up and Pay<br>
                        <input type="radio" name="paymentMethod" value="Pay By Juice"> Pay By Juice<br>
                    </div>

                    <div class="customize-form-group upload-container">
                        <label for="uploadPicture">Upload Picture:</label>
                        <input type="file" id="uploadPicture" name="uploadPicture">
                        <button class="custom-upload-btn" onclick="document.getElementById('uploadPicture').click()">Choose File</button>
                        <small class="form-text text-muted">Please upload a picture of your choice.</small>
                    </div>


                    <div class="customize-btn-bar text-center">
                        <button type="button" id="customizeSubmitBtn">Submit</button>
                        <button type="button" id="customizeCancelBtn">Cancel</button>
                    </div>
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
    


        <main class="cd-main-content" >
            <div class="cd-tab-filter-wrapper"  >
                <div class="cd-tab-filter">
                    <ul class="cd-filters">
                        <li class="placeholder"> 
                            <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
                        </li> 
                        <li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
                        <li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Color 1</a></li>
                        <li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Color 2</a></li>
                    </ul> <!-- cd-filters -->
                </div> <!-- cd-tab-filter -->
            </div> <!-- cd-tab-filter-wrapper -->
    
            <section class="cd-gallery">
                <ul>
                    <li class="mix color-1 check1 radio2 option3"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQA9AMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAADAQIEBQYAB//EADkQAAIBAwMCBAQEBQQBBQAAAAECAwAEEQUSITFBBhMiUTJhcYEUQpHRFSNSocEHseHwYiQzNENT/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAIBAwQFBv/EACoRAAICAQQBAwQBBQAAAAAAAAABAgMRBBIhMSITMkEFFGFxUhUkM0JR/9oADAMBAAIRAxEAPwDy9RRFXFFmtWtyM9KRadPJCeUOUZ4ogGKYvFPzTEjhRFGaRBxTxjNACgYpy8nmkp6DjNTggkWdrLct5cON2Mj504wNBIyTAhx2NJaSPDKssJ2uD+tX63dtqqCG8UJMo4Ye9VSm4POOCSj2nGQK4c4xV3a2trAskVxIrP2x3oSaeZZSsSDB6E1X91BMaEJTltiiuQcU8HHGamXmmXFmm9xlfcdqAsEjpuwEQfnfgVfGxSWUTKqcXiSwDmbETY4OKz09m1wr8FmJ4rVQwrOuyOGSZ/dFwKn2+h3mMrYRqPeRs0smpAq5PozWheH41ZXm6Lyc1o4mtYVMaY49qsV0DUiCVS1+woZ8P3akk28bP/4tWa2E3LxFlTNkQBj6hytO3USWwvFKmSOSNAeQBmowgmEzFVLJ7jkj7VbQ5riRWoyj2SV5xRVHPNDjwcUYjABPetQw9aP0HFBjp/NAD0oqimohooFACAU+lC0uMUAIKcDTetKKAFwDXU3NLQB5nq/KDKHHY1VKKvtdVo7ZAXBBqiWs1PQlfQ5V5p+OK5RxSSBth29auLB0DbxRhyeKh2cMyct0zU8YHQVKATHNFUcYpB1p6jNBASNcCiMJsRvGOQaGrAdaGt85mxuBjHUCqrp7Y4NWmoVssMuxHZuVlUf+px6uam6Q0guFGS24+kCsq1wI7t9jZBGa3mg6bN5SW5zHeTIGlYf/AEIegHzIrC6HJnRo9OhN/JLuma5b8NboJZejE8qv7mnW3hmL/wB69m82TONp/L9qvIbS3sokjtVGFOGcnG4fP3o+0BMxkEnstbIQUFhFU3veWCsdNMKhoo1IH9PBqatqmR5YGD2NY+w13WX8TXOnFYVtYZ8CVly+3g4Hv9e1aqS8hSSONyRuPpyeCee9EZZFfeETRaxjcuwe3FAFmC2cEdeMcE0+OR5Q6AAgqSOeKDBNceaIpIjvHxHoD9KYXLH3FmyLHnBdjjb2FQLrSbcNhwIpOqspwavEZJ3xxuHcdjRZIY5ZAzKrbR8RqRXJPsw2p6RIYy8OxJvyy4wrH2b2+tYiTUL/APiJs7qJopI22ujDBH/FevvayxXDYQbG5z2x86oPEOiw31uZkQLPGMI3cD+k/wCKeL5KLascoobUN15IHU1I4xnNR/DtxFcyyWJYEqOTV7NYLDFtYferGZUyBGeKeOaaRhsClWlJCinAe9MQ80Yc0AM24pKIRTCMUAIRXUuaSgDy/V7xLuVQg9C9KhIlWyaba3cHm2UuT125qC0LRuVZSCPeqKpRxhCxa6GBaeoxSgUvU1aMJSjk1xFcOtSSPHWjpQgOKIvwZoABeyeXA7d8VWwYkjLq5DH+k1L1UqbZxmqCzne3DAHIJ4FU2LJops2G08Maf5t8lzKoZIBv2YzvP5R/32r1W1T8HbFJP/kZ3ysRzurKf6aWJmt7a4nHdpmyOoXgVpr6TckjSbsFic8ipSwjRV5vkMNUjhDNsBBBBGOKNZvbGy8wgpG5wCOgPzNY+d4YrtXnnKQqDu3Hr9q0ulSolgjW88clvJ6QrHuajJfJcGHn1sWfiS8ZXEly8hAwOBkAZNbq5eztbZP5hfgkFzz05H9684v7eNvHVxdyozWPnhj5YwWAAGMfWtpFZ2Gro9xcFipYgkjGw/Sq4y5wQ3UsQT5Os/GelRSEPO6LnBB6Gpq6zZzXiXlvqTBIclkLZ381lL7wNFcTBtOn9LnJjdvUP1qo1bwtqVgm2B2cgZKryVI+lPlg4xPYLS7guZSbdkEbLngY9VPl1E2hUXa7A7YWTHGfYntmvEdM1HVtKuAoeRXJHDdzXrmj6p/F9Fi/EwrI0gKyAjIGO5Ht0qVLJXOtLkvQzSLlWBjIJJJzVbczw3E5WB8sB/NGOCKTTIWsbcrNN5kXQDJIUfKpkqQhpFVAJNoJx1xUiJLo83OlnS/Fdxew8RyjO3tnPP8Ag1dveG4VndsY6Ck15dl3Hn8yjH9/2FQUHzq2PRinHEsBY+WOafjBoSEg9KLuycVIg8CirQ+gzTwc0APJob57U8YzzTSRQAPmup3FdQB4lZT3mkXm1dxweUPetDNfNehGeMIcdKna9aQSw/iIlUOPVVNDkrl+tY6Em8/IkWnyLLKIR6qtdMtILmeLe3pfrzWQ1i9bzfLXtzmhWWqzIygE/atkZJDNGv1W2jt7p0hOVB96i8HtQoJHmXfJnPzo2KHjJKHr0pkkmxDTgajXVQySh1a8d2MaE47jNRLVHLqVXvmrI2XmPyOKsrOxVMejvSbcges+BdqeG43XhvwwQ/Uk1auQ8O3HTis7/ptL5sN7ppPIjLIO+Pl9x/ei3fiWzsrmSF2km2LzswVDdhmq5zjDtm2mcYw5ZT+I5LaC5WG4tjOjHLZOAKJ4Y1W1t3ltT5wdSpj3/CvJxio9zrtvOY/NtAYjnzFJByewz25qTZTW9/azBY4oJcjHljBI9/nVKvhJ+LLo3Vy4TI97tm16do4hNGc7ycYDFeh/X/vNXfhURzSyRyyCGFU3Zz+YYHP+1Yi3Kp4hCxXTSQuCrbSfWRyAT25HX/Gav7tAlmyRKE3HcQxyVHzJrHdcq5bjDd4X5i8mvFp5cnnpeQyRsM5Qg49hxWa1ma3W8USXEpIOeWIIPzzWbmeWF1eKUqQcg+Zt57YxVPrdxJP5ty0pWUsN5L5D56/er9PrFN4lEt+5k1hdmuvILK8gW5aaWW7Yeja3w1N8D3+pQ3gSaJ3jZSVOT6R9qx3hXS9R1qVY7HzNnIeVshQPrWw1KH+CWa24uI2GNshIwQw/MG+RrfPD6Q+n3872ehWtxIAwmZAT+R8DNSWKeaSEiZimA4Hq+ma88g1E3MlhZRyF3lVZHkEhZjjnn24q/wBI1D8RftAjK/lqdpzgEZ6f7UbWkSpwlLhkXxJ6b+JD2APPzDftVaoo+tXaSahLKWHp9KhenHX+9Ro3EiZHSnSaRksacg2/JxRUwOcVHI5oyCpKwwcHil2nrQgCOlOBI60AFznkUhrlbiuzQAldSE811AHl1vqpvbERlSGHU+9CPwntQLSIQxBKkdaprhtQJJFNe2RkYt702z0hvMV2PSrrYCeRRlAHanwSOjUKoHtTjim5HalPOKZIDu9MdC5woJPyFOmYJGznjC0Tw1fQyLIJHw7HjNSuSGMjtsHkVMhVR0HNSLnyjIfLcN9KFEMPzUYwSFSee0SW5t5WjcRMjFTjKMMMP8j6VGtYonAIEqtjkoBUqWVLe2eR+gHOe9DsIlMfmRMzsCHVFOCE+XyFc/W0Smt0QSy8BorS23BvVk/EAoG4fY0Q6jbaPGs0LbpMsqiQbRyPrUxrC9htjJ+CIQgEylTk5rC+I7hkvDbupVUGB6iM5+Vc6imU5rJZWknktdKvQb1JPJVZCwf08kdT6R3zj/atva3lvLcx2zRiB3UlWmQHD9QRj6f94ry3TLwpPDIqcAEbAzctjGcg5/xW0tYDJe2syyhEkOR5hJPHUDvjHar9Tp4SZ0ZaWWpqzBcr/hrri0W5XbqUA80phgSfT9M5A+oqqtPDOhh5Tcx3LqGB/nMNq56EHGKstYu7iKKG3jkjjLuD5wbPlLkBgffr3/aod5cJKZvwpiG1yqyNyhPsf3qavCXByYZqn5ItdMTSrIKNN1PZ5I5jlUYb3ziovjGBtR0iR0jEzwneNh3bgOoIHbk1gjqj2mrzW8U4YAEE4x6sVoNL8RJ5SwAFJXXmUOcP1yCPbpxXVhHKybZ6mOcJGJg1Ob8UxiYrk8NnoPlXo/hdLqHTWvJAEkul2W6MOdufVJ8h/vU+z0zQDa2t3/BLOeeTJjGwbsjufl86g+LL2S2026libzL6VPLBT4Uz0VR7CmctvBXGtZ3IzGpeIoJL1reH1oGMf1xxxWjskZbSIMcHbWA8OaBO95G8oO1DnkV6Sse2NVx0p03jkzvGcjAHAyKkRP6PUMmkjXCgGnoh3YxwaCAqkMMAUpWuVAOvFKVwCaAG5zTh0oY65pWb2oAUkZrqaCMc0lAHlg4p60HNPQ0pIQ8U4GmHpRFjYxlwp2jhjjgUZwAg60QdKH0JFPHtUgQNaaQ2rJH3rNwC5V8Rbg3yrYSxhxgjNPgtIYm3FBmlwAulJIkAabl261YKM0yIcsD9hR0UYpgKfxPeiGyaEdX45qo03XGhhiXcyzRtmNwcEVL19o5rnZgMVHOe1Uj2ke4clcnk1RK1KTiSnjk9Q0XxkbiEW91MyEHII5X6EftWL8TQ3V7qUt3IRPuPBz0FAubY2flyQSebE4xuHY06G+cbcMfmCaRSwbdqksortIjkS486VDsQ8kjjNbKz1CP0vHvRlBEa7d67iOePmPrVLcSRTQOAEV9vt1qFBOy4KsyuDkYPT71Rcsyydb6daq63BnqLRQXKRTyhJZGIJDLhdh9x7/Ohpd6ddRt5FyzSLExZU6xqOSDx0H071hIdQunCpLcP8OUBbjjkDHzOBmr2w1Iwn+YqEHG14+NuTnaR3HUH9M1TtxllE/pv3E99jz+izHgKzuyNRfXYozP6ggj3EfLGc0W38CeTc+ffXqpaR+oMF2yN9uSBQtO12SzLQweW4Iz5gGST756j/inXWszTZJc5zySa3ws8TPfo1XPbngubi/hs7UwWKGGM8ZbliPmaFbWgurdXmXOTnNUlkz390sIOdzfoKv8AVr5LIx2iEB8dB3FRvx5MV1OWKodsZEIbXLIh2j8wHFTVUyckZHUYFZO61K4W6htbHl5PiB6H61d6VqbwxyJcHd3AB6EdqyS1Us9myWjoqjFPtlkIsHB4I7U24dbeF5nxhBmu/iVvcny4gRJxyRjP3qv8T3PlaLOyrklSuK2UXb+zn6zSquKnHop18RPfRI8FwEbzMFcdFq5sNS824eBnDY6N714zb38sLEDIr0DwCzXc0k0pJVBgVojLJhksM2xI60N+DT2Kq24jj2ochDHK9KYUXZmupnmMOgrqAPLF5p68GhKaKtISFBFaHwxEt7Y6hYsvMkRZCfcVmzII1LGp1s8qIjxSmNG+IxH1CqL5pLBfp9PO5+IIQyZ+E5pwibBIUnHXirnS8XMLStLEEtyCV/MwFS5ruzkTbGoUlsAHALVWtRJnU/pSx3yZpBzmjqM9aNdQiOf0EFW6AdqjvKsRwRkZwSO1afUjjJy1prHY60SF+LNPkkCRO/8ASCaDFIsilkBKdn7UswD20mxudtDmnF4Fspsr9yMxIWkkeRsZY5obLUjZgn3psi4ArmbnkpyP0xi0hs2P8ubgZ7N70K6s5IJCAMYPSmsRDiYnGw5r0jRfCI8VaG+oWE6tcJgNAe/0PvWivyWTZp7EliR5qPMz8QH2pRFG5yTtPyGa0t54auraVlMbblOGVhgj6iqq5snQ+pSv6037NkYv4ICb1IZcNjnjj7VYWp4UkFcdcE8/3oHkf+FHhDrwAQPao2I0xtsj0WdvMOY4lJxzhTRizopEhQMey9h+9R7SLYp5IB680+V1UEAjP9VOlgreFyzVeDYAzvcvgYG1F9qp7/F54juo57gJgjYvf7VYeGLjytNnmbjg7aw19qZ/jpuA43K3BNF8M18GSrUSjdKS7Nnr+ixWelre27s8+R6M9Mf3qBPqKz2Ntf28aRMD5UqDoG7GqT+LXFzO2ZCcc4LcUUQW0tuwe/cBm3eSE7+9cyUcvDM9k7Jvz7+C/s9SaR0E207c4Ye9X/ki+03ZJ6t3c1h9JgfzjGrkk/C2K9Cs7Z7OzSKR1dsZJxWvR1tSyRK2fpbZGBufCUZuDtTgnrWs8P6bHplsVjGGPU1YsiE9BT8BRt6iungzvkfJtKZz9ajbsDtjtRdyhSD37UEKOpH0qSDg7dlrqQ7s9aSgDy9aMnSgKaKH2CkJBak5S3YgfWo9rdbRuGQfygHihald+lk9xioEMnSs90cnS0F/p8GhS559Y3++DjJNSHae3jaQxsrBeWkBIP0qkjcYBLEEVYLrN8dsCz5U8YcZFZGn8HYtvareOhIdVu7pijLG6DqehqfMQunusAUbl9Qz/cVVX4uI7hNoTc3/AOYwDRore8YKbghVXonc/Wm/1PNK2cbN2eA1ncbI2BJx0A+VJb6j5LusoLI3G4DpTZISHLDlD+WpEkSJZq7lCNuDxxx/mni3jJ11ZC6GcEO5AVt0Z3KeeKjTylIhLjdjqtRfNIDtuPJ4HamWkjSTqp6E4pXBdnGsUVNpHH8ReglIz5a84rYf6fa5q3h26EsAOxjh4m+GQe31+dZ6CYxOV6AHFajR/LmBIZQ3saot1UqVwiv1MHtNrdaF4rgUzxCO5xypO11+/cVReJ/AqpavNYyGRRyVcDIH1FZS1UoRskwV5yDzmrqHU7trYLbaqysBh03g/wBqbRav7iTi1yiym2fwzA3emzQsQbeTjj0r3oENpdSyMsFtIxUZPo+EVubq41YwhFvowA27cIhuP1rO6pcXymV5tRdPNG19hC5H2roOKR0FZY+yllkEQw0o3f0rUQytK4jVeGOB7modxcQ+b5drmRulXmgad/ME07ZfHHyoisldlqivyXb5tdD8vGDtrzHUiTOx+dem6ijtGy9sVhtUsPUWPWrJIxZ+WUkdzKh4OfkatLC7mlnSONfWWwKgPbMDxWh8K6Y34xblx8A9I9zWW1Rissn1ZLk1Gn6e9tcQuzbmGC9bLIdVb3GKo7OLDBQ2WIyR7VcDdGg5FNpJ5gVKbl2NIw2D3pHITI9qdJIM+kZahFDuBY5JrYSMA3ck/Snc96Toxpu/AoAUnmupnmLS0AeYdBQbmXauc09jxUecbhikJKW4Zmck0kG5pFVFLMTgAVLmt9xPFXWhQ20dq0kuxZ4zlT+YntVFktqyWV43LLwJp+iXtwDuURkYGG6nNF1Hw5fWrEbkcjnKnpWlTXILqyeNWjWaLa3pXBJHXmp8EbXNnNLMoVlUM43c7fce5rGpNyZ6Kr07a+HldHnf4iZpYlJUeWdxJ71eb0Yq6EkSdj1FRdcsYnJkhO3GR+2KoTJNbsHLNlehBqxYkczU6HZLK6NPLJEg2sQG9s81UahfeYpjVywB47cVVzajI45OT1yabbh5Q7kng4zTKDRmhdGmDSeR8jGVtqgnPQCr7TLAW0UjudxYZyPy1T6e6pMc8P2JFWk+oAYTgAjjmll/FGF5bK65BhlLFtwJ6d6NaX4ilGxmx75qBNKZJW8wEqOQB3pyFUDPIuOMqPan9JSXkPt4NVHfuFyLkoCOpPSq+fUbCJCbeGc3jN6phJ6T9qoZZZLhwCc56DsKdCNvllhnJ9O09PrT11Qh7VgeKx0W0uqXzEpJNKg4BZXOBTJmA0+V55Wmd2AjJbOBUO4vGlmYuI93T08AnHX6027uMWMaIR8Qxz0xTtZQ25lpo9uovI4ZPQ7jK5HFXtxeyR2yR2Y/mbyCe64rLW+tEMJnRTKq7Q1Dj1GYyn+c8ZYlsjtk1Y348ERxuTZu4ru5cbZ1K+nJLc5NR7q2inX04IZfiNVNpLJ5AzcB5CSA4PH3q1ilk/CbpGjV1YqeRzVSfwabo5W5LgAdEht5E84mQ43BR0rRaPbxonmCONYiPSO61UwTPLb+XcKGZTlS3BBqYlw1gd7bWgmHIbqp+Vc3Vu3dsXZhs/BbaesizzssZZTgb26A1ZNHlQXP2PSk0h4HsgbaaNk6nAyR70aYxtjaR+tadDJQhsl2VwkugC4ReQAKUSJtzjNJJxx71GfKKcHiumWhmwcGgSZzxyKaZD79K5JMqeTQAhfn4aSk3nsDXUAeaUJ6WupCQbKMA4q1TRrcWBuA83mFA3xDGf0rq6s2p9qJRE0RylvNJ8RzjnvWptbp57K3hdVCyH1FRgnkV1dWV+5ne+nJem/2RtWt4o0VkXHqPHbisxfxLtP1rq6mgb7ua2Z8jk1aaUo8gtz6mOa6urRZ7TyMu2Jdegsy8GoqjzPNZiSVHFdXVEOhYD7VVaGUsASrDB9q67YlWJ6nFdXVauh2Bt+r/JcipWBHDuUDc3elrqH0SCcKLeTCjqDn701xuhVieRSV1C6IH2NtHLKA+SKfqcKQT4jyOK6up/gAmmXMq4w3CnOOx+ta/TLSHULtpZl2sgBHl8CurqxWNpnXiv7VhvGBNizfhyRlQaBHK974Xkec5dFyrDrxXV1Ua1vbB/lHFl8FFpWqXlhdrNbTMrA4x2P2r0+C7kks4p2C75AN2BSV1Ov8iK7O0HDFjg8jFDk4GB0rq6usWroFIo8pTjn3rgdowK6uoAGVyTyf1rq6uoA//9k=" alt="Image 1"></li>
                    <li class="mix color-2 check2 radio2 option2"><img src="img2/img-2.jpg" alt="Image 2"></li>
                    <li class="mix color-1 check3 radio3 option1"><img src="img2/img-3.jpg" alt="Image 3"></li>
                    <li class="mix color-1 check3 radio2 option4"><img src="img2/img-4.jpg" alt="Image 4"></li>
                    <li class="mix color-1 check1 radio3 option2"><img src="img2/img-5.jpg" alt="Image 5"></li>
                    <li class="mix color-2 check2 radio3 option3" ><img src="img2/img-6.jpg" alt="Image 6"></li>
                    <li class="mix color-2 check2 radio2 option1"><img src="img2/img-7.jpg" alt="Image 7"></li>
                    <li class="mix color-1 check1 radio3 option4" ><img src="img2/img-8.jpg" alt="Image 8"></li>
                    <li class="mix color-2 check1 radio2 option3" ><img src="img2/img-9.jpg" alt="Image 9"></li>
                    <li class="mix color-1 check3 radio2 option4"><img src="img2/img-10.jpg" alt="Image 10"></li>
                    <li class="mix color-1 check3 radio3 option2"><img src="img2/img-11.jpg" alt="Image 11"></li>
                    <li class="mix color-2 check1 radio3 option1"><img src="img2/img-12.jpg" alt="Image 12"></li>
                    <li class="gap"></li>
                    <li class="gap"></li>
                    <li class="gap"></li>
                </ul>
                <div class="cd-fail-message">No results found</div>
            </section> <!-- cd-gallery -->
    
            <div class="cd-filter">
                <form>
                    <div class="cd-filter-block">
                        <h4>Search</h4>
                        
                        <div class="cd-filter-content">
                            <input type="search" placeholder="Try color-1...">
                        </div> <!-- cd-filter-content -->
                    </div> <!-- cd-filter-block -->
    
                    <div class="cd-filter-block">
                        <h4>Check boxes</h4>
    
                        <ul class="cd-filter-content cd-filters list">
                            <li>
                                <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                                <label class="checkbox-label" for="checkbox1">Option 1</label>
                            </li>
    
                            <li>
                                <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
                                <label class="checkbox-label" for="checkbox2">Option 2</label>
                            </li>
    
                            <li>
                                <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
                                <label class="checkbox-label" for="checkbox3">Option 3</label>
                            </li>
                        </ul> <!-- cd-filter-content -->
                    </div> <!-- cd-filter-block -->
    
                    <div class="cd-filter-block">
                        <h4>Select</h4>
                        
                        <div class="cd-filter-content">
                            <div class="cd-select cd-filters">
                                <select class="filter" name="selectThis" id="selectThis">
                                    <option value="">Choose an option</option>
                                    <option value=".option1">Option 1</option>
                                    <option value=".option2">Option 2</option>
                                    <option value=".option3">Option 3</option>
                                    <option value=".option4">Option 4</option>
                                </select>
                            </div> <!-- cd-select -->
                        </div> <!-- cd-filter-content -->
                    </div> <!-- cd-filter-block -->
    
                    <div class="cd-filter-block">
                        <h4>Radio buttons</h4>
    
                        <ul class="cd-filter-content cd-filters list">
                            <li>
                                <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
                                <label class="radio-label" for="radio1">All</label>
                            </li>
    
                            <li>
                                <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
                                <label class="radio-label" for="radio2">Choice 2</label>
                            </li>
    
                            <li>
                                <input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
                                <label class="radio-label" for="radio3">Choice 3</label>
                            </li>
                        </ul> <!-- cd-filter-content -->
                    </div> <!-- cd-filter-block -->
                </form>
    
                <a href="#0" class="cd-close" style="background-color: #660000;">Close</a>
            </div> <!-- cd-filter -->
    
            <a href="#0" class="cd-filter-trigger">Filters</a>
           
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