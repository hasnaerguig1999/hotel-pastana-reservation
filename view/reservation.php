<?php

require_once '../controller/rooms.controller.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/res.css">
    <link src="./css/bootstrap.min.css">
    <link src="./css/bootstrap.css">

    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Hotel</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Hotel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reservation.html">Reservation</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Nos Chambre
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="chambresimple.html">Chambre Simple</a></li>
                  <li><a class="dropdown-item" href="chambredouble.html"> Chambre Double</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="sweet.html"> Sweet</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="contact.html" >Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="about.html" >About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="login.html" >Login</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title" id="home">the hotel most private </h1>
            <p> as you want</p>
            <a href="reservation.html" class="btn btn-primary">Réservation</a>
        </div>
    </section>



    <!-- <section class="book">
      <div class="container flex_space">
        <div class="text">
          <h1><span>book</span>Your Rooms</h1>
        </div>
        <div class="form">
          <form>
            <div class="row">
              <div class="col-lg-3">
                <label class="form-label" style="font-weight:500;">Ckeck-in</label>
                  <input type="date" class="form-control shadow-none">
              </div>  
              <div class="col-lg-3">
                <label class="form-label" style="font-weight:500;">Ckeck-Out</label>
                  <input type="date" class="form-control shadow-none">
              </div> 
              <div class="col-lg-3">
               
                <label class="form-label" style="font-weight:500;">Adult</label>
                  <select class="form-select shadow-none" >
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div> -->




                <!-- <div class="col-lg-2">
                
               
                  <label class="form-label" style="font-weight:500;">Type</label>
                    <select class="form-select shadow-none" name="room_type" id="room_type" onchange="updateForm()" >
                      <option selected>Open this select menu</option>
                      <option value="1">Single Room</option>
                      <option value="2">Double</option>
                      <option value="3">Suite</option>
                    </select>
                  </div> -->
                  <!-- <form method="post" action="process_form.php"> -->
                    <!-- <label for="room_type">Room Type:</label>
                    <select name="room_type" id="room_type" onchange="updateForm()">
                      <option value="single">single</option>
                      <option value="double">double</option>
                      <option value="suite">suite</option>
                    </select>
                    <br>
                    <div id="suite_type_section" style="display: none;">
                      <label for="suite_type">Suite Type:</label>
                  <div class="col-lg-1">
                    <button type="submit" class="btn text-white shadow-none custom-bg"> Submit</button>
                  </div>
              </div>
            
            </div>
          </form>
          </div>
        </div>

      </div> -->
      <section>
       <!-- <center> -->
      <form method="post" action>
<div class="container">
        <label >Type de chambre:</label><br>
        <select  id="room_type" onchange="updateForm()"><option value=""></option>
          
          <option value="single" >Lit single</option>
          <option value="double" >Lit double</option>
          <option value="suite">Suite</option>
        </select><br>
        
        <label for="start_date">Date de début de réservation:</label><br>
        <input type="date" name="start_date" id="start_date"><br>
        <label for="end_date">Date de fin de réservation:</label><br>
        <input type="date" name="end_date" id="end_date"><br>
        <div id="suite_type_section" style="display: none;">
            <label >Type de suite:</label><br>
            <select name="suite_type">
              <option></option>
              <option value="standard">Standard</option>
              <option value="junior">Junior</option>
              <option value="presidential">Présidentielle</option>
              <option value="penthouse">Penthouse</option>
              <option value="honeymoon">Lune de miel</option>
              <option value="bridal">Mariage</option>
            </select><br>
            
            <label for="num_guests">Nombre de personnes:</label><br>
          <input type="number" name="num_guests" id="num_guests" min="1" max="6"><br>
          <div id="guest_info_section">
            <h3>Informations sur les invités</h3>
            <div id="guest_info_fields">
              <div class="guest_info">
                <label for="first_name_1"></label><br>
                <input type="text" name="first_name[]" id="first_name_1" placeholder="enter first name"><br>
                <label for="last_name_1"></label><br>
                <input type="text" name="last_name[]" id="last_name_1" placeholder="enter last name"><br>
               <br><label for="dob_1">Date de naissance:</label><br>
                <input type="date" name="dob[]" id="date" >
                </div>

        </div>
          
       
       
              </div>
              </div>
              <form action="" method="GET" name="">
	<table>
		<tr>
			<td><input type="text" name="k" value="<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>" placeholder="Enter your search keywords" /></td>
			<td><input type="submit" name="" value="Search" /></td>
		</tr>
	</table>
</form>

         </div>
              </form>
            </div>
            </section>
            <!-- </center> -->
<!-- 
              <form id="room-booking-form">
                <label for="room-type">Type de chambre:</label>
                <select name="room-type" id="room-type" onchange="updateForm()">
                  <option value="single">Lit simple</option>
                  <option value="double">Lit double</option>
                  <option value="suite">Suite</option>
                </select>
                <br>
                <div id="suite-type-section" style="display: none;">
                  <label for="suite-type">Type de suite:</label>
                  <select name="suite-type" id="suite-type">
                    <option value="standard">Standard</option>
                    <option value="junior">Junior</option>
                    <option value="presidential">Présidentielle</option>
                    <option value="penthouse">Penthouse</option>
                    <option value="honeymoon">Lune de miel</option>
                    <option value="bridal">Mariage</option>
                  </select>
                </div>
                <br>
                <label for="start-date">Date de début:</label>
                <input type="date" name="start-date" id="start-date">
                <br>
                <label for="end-date">Date de fin:</label>
                <input type="date" name="end-date" id="end-date">
                <br>
                <label for="num-guests">Nombre de personnes:</label>
                <input type="number" name="num-guests" id="num-guests" min="1" max="6">
                <br>
                <div id="guest-info-section">
                  <h3>Informations sur les invités:</h3>
                  <div id="guest-info-fields"></div>
                </div>
                <select name="room-type" id="room-type" onchange="updateForm()">
                  <options de chambre -->
                <!-- </select>  -->
                
                <!-- <form id="room-booking-form">
                  <label for="room-type">Type de chambre:</label>
                  <select name="room-type" id="room-type" onchange="updateForm()">
                    <option value="single">single room</option>
                    <option value="double">room double</option>
                    <option value="suite">Suite</option>
                  </select>
                  <br>
                  <div id="suite-type-section" style="display: none;">
                    <label for="suite-type">Type de suite:</label>
                    <select name="suite-type" id="suite-type">
                      <option value="standard">Standard</option>
                      <option value="junior">Junior</option>
                      <option value="presidential">Présidentielle</option>
                      <option value="penthouse">Penthouse</option>
                      <option value="honeymoon">Lune de miel</option>
                      <option value="bridal">Mariage</option>
                    </select>
                  </div>
                  <br>
                  <label for="start-date">Date de début:</label>
                  <input type="date" name="start-date" id="start-date">
                  <br>
                  <label for="end-date">Date de fin:</label>
                  <input type="date" name="end-date" id="end-date">
                  <br>
                  <label for="num-guests">Nombre de personnes:</label>
                  <input type="number" name="num-guests" id="num-guests" min="1" max="6">
                  <br>
                  <div id="guest-info-section">
                    <h3>Informations sur les invités:</h3>
                    <div id="guest-info-fields"></div>
                  </div>
                </form> -->
<!--                 
                <script>
                function updateForm() {
                  // Récupération de la valeur sélectionnée dans le champ de sélection de type de chambre
                  const roomType = document.getElementById("room-type").value;
                
                  // Si le type de chambre sélectionné est "suite", afficher le champ de sélection de type de suite
                  if (roomType === 'suite') {
                    document.getElementById("suite-type-section");
  }
                }
  
  function updateGuestInfoFields() {
    var numGuests = document.getElementById('num-guests').value;
    var guestInfoFields = document.getElementById('guest-info-fields');
  
    // supprime tous les champs de formulaire existants
    while (guestInfoFields.firstChild) {
      guestInfoFields.removeChild(guestInfoFields.firstChild);
   
    }
}  
</script> -->

    

  

  
    
  


   <script src="../view/js/script.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>