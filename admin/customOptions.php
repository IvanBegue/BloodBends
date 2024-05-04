<?php
    require_once "../assets/template.php";
    require_once "../db/pdo.php";


    
        $sql="SELECT * from customization";
        $stmt=$pdo->query($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
        
if(isset($_POST["btnAdd"])){

    if(isset($_FILES["CustomFileUpload"])&& $_FILES["CustomFileUpload"]["error"] === UPLOAD_ERR_OK){

        $filename = $_FILES["CustomFileUpload"]["name"];

        move_uploaded_file($_FILES["CustomFileUpload"]["tmp_name"], "../upload/".$filename);

    }


    $cname=validate_input($_POST["CustomName"]);
    $desc=validate_input($_POST["CustomDesc"]);

    $sql="INSERT INTO customization (custom_name,custom_desc,custom_banner) VALUES (:cname,:cdesc,:bn)";

    $stmt=$pdo->prepare($sql);

    $stmt->execute(array(
                ':cname'=>$cname,
                ':cdesc'=>$desc,
                ':bn'=> $filename 
    ));
        
    header("location: customOptions.php");

}

?>

<style>
    .customisation{
        margin-top:5%;
    }
    .form {

    padding: 5%;
    border-radius: 10px;
    color: black;
    background: linear-gradient(to bottom left, rgba(139,0,0, 0.8), rgba(0,0,0, 0.8));
    font-size: 16px;
    width: 100%;
    height: auto;
}
    </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/adminDashboard.css">
</head>
<body>
    <div class="grid-container">                                      
    
 <!-- Header -->
 <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        
      </header>
      <!-- End Header -->

       <!-- Sidebar -->
       <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">inventory</span> Blood Blends
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          
          <nav>
    <ul>
        <li class="sidebar-list-item"><a href="#" id="scrollToOption">Scroll to Option</a></li>
    </ul>
</nav>
      </aside>
      <!-- End Sidebar -->

      


<main class="main-container">

        <div class="main-title">
          <p class="font-weight-bold">DASHBOARD</p>
        </div>

<div class= "customisation" id="customisation-section">
    <div class="row justify-content-center">
        <!-- "Create and Update Form" -->
        
            <div class="col-md-4">
                <div id="createAndUpdateForm" class="UpdateOption">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form">
                    
                        <br />
                        <label for="lblCustomisationTitle" class="Customisetitle">Customisation Details</label>
                        <img id="imageName" class="image" /><br />
                        <!-- Hidden Ids -->
                
                        <input type="text" name="CustomName" class="form-control" placeholder=" Name"><br />
                        <textarea name="CustomDesc" class="form-control" placeholder="Description" rows="3" ></textarea><br />
                        <div id="customDisplay">
                            <label for="ddlcontrol" id="lblcontrol">List as:</label>
                            <select name="CustomDdlcontrol" class="form-control">
                                <option value="checkbox">Checkbox</option>
                                <option value="dropdown">Dropdown</option>
                            </select><br>
                        </div>
                        <input type="file" name="CustomFileUpload" class="form-control" />
                        <br />
                        <button name="btnUpt" class="btnUpdate" type="submit">Update</button>
                        <br />
                        <button name="btnAdd" class="btnUpdate" type="submit" >Create</button>
                        <br />
                        <br />
                    </div>
                    </form>
                </div>
            </div>
        
        <!-- "Customisation" Section  loop 2 cards per row -->
        <div class="col-md-auto">
            <div id="customisationCRU" class="customisationCRU">
                <div class="row">
                <?php
                        // This part will be dynamically generated for each item in the list
                        foreach ($rows as $row) {
                            
                                echo '<div class="col-md-12 mb-5">
                                        <div class="card d-flex flex-column h-100" onclick="clickOptionButton(this);" style="cursor: pointer;">
                                            <div class="card-body d-flex flex-column">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="card-title text-capitalize">' . htmlspecialchars($row["custom_name"]) . '</h5>
                                                        <p class="card-text text-capitalize">' . htmlspecialchars($row["custom_desc"]) . '</p>
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="../upload/' . htmlspecialchars($row["custom_banner"]) . '" alt="Image" class="img-fluid" />
                                                    </div>
                                                </div>
                                                <!-- This button will be hidden, used for server-side functionality -->
                                                <button class="hidden-btn" style="display: none;"  type="submit"></button>
                                            </div>
                                        </div>
                                    </div>';
                                echo '</a>';
                            }
                        ?>
                    <!-- End of dynamically generated part -->
                </div>
            </div>
        </div>
    </div>
</div>

<br> <br>




    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">New Topping</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">New Flavour</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">lorem</button>
        <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" disabled>Disabled</button>
    </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
        
<div class="option" id="option-section"></div>
    <div class="row justify-content-center">
        <!-- "Create and Update Form" -->
        <p class="font-weight-bold">Option</p>
        <div class="col-md-4">
            <div id="createAndUpdateForm" class="UpdateOption">
                <div class="form">
                    <br />
                    <label for="lblCustomisationTitle" class="Customisetitle">Option Details</label>
                    <img name="CustomImageName" class="image" /><br />
    

                    <input type="text" name="updateOptionName" class="form-control" placeholder=" Name"><br />
                    <textarea name="updateOptionDesc" class="form-control" placeholder="Description" rows="3"></textarea><br />
                    
                    <input type="file" name="fileOptionUpload" class="form-control" />
                    <br />
                    <button name="btnOptionUpdate" class="btnUpdate">Update</button>
                    <br />
                    <button name="btnOptionAdd" class="btnUpdate">Create</button>
                    <br />
                    <br />
                </div>
            </div>
        </div>
        <!-- "Customisation" Section  loop 2 cards per row -->
        <div class="col-md-auto">
            <div id="customisationCRU" class="customisationCRU">
                <div class="row">
                    <!-- This part will be dynamically generated for each item in the list -->
                    <div class="col-md-12 mb-2">
                        <div class="card d-flex flex-column h-100" onclick="clickCustomButton(this);" style="cursor: pointer;">
                            <div class="card-body d-flex flex-column">
                                <div class="row">
                                    <div class="col-8">
                                        <h5 class="card-title">Custom Name</h5>
                                        <p class="card-text">Custom Description</p>
                                    </div>
                                    <div class="col-4">
                                        <img src="path_to_image" alt="Image" class="img-fluid" />
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End of dynamically generated part -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
        
    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">

    </div>
    <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">

    </div>
    </div>


</div>
</div>

</div>
</main>
<!-- End Main -->
<script>
    $(document).ready(function() {
    $('#scrollToOption').click(function(event) {
        event.preventDefault(); // Prevent default anchor behavior
        $('html, body').animate({
            scrollTop: $('#option-section').offset().top
        }, 1000);
    });
});
</script>
    


   
</body>
</html>