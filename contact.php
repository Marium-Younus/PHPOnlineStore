<?php
include("include/header.php");
include("config.php");
?>

<!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
               Your Customer Care team is just a phone call away at 010-020-0340 Monday-Saturday, 24hrs Service.
            </p>
        </div>
    </div>

    <!-- Start Map -->
  <!-- Start Map -->
    <div id="mapid" style="width: 100%; height: 300px;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script>
        var mymap = L.map('mapid').setView([-23.013104, -43.394365, 13], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
           
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        L.marker([-23.013104, -43.394365, 13]).addTo(mymap)
            .bindPopup("<b>MShop</b> Cosmetics <br />Location.").openPopup();

        mymap.scrollWheelZoom.disable();
        mymap.touchZoom.disable();
    </script>
    <!-- Ena Map -->
    <!-- Ena Map -->
		<?php
        if(isset($_POST["btnsub"]))
		{
						$con_name = $_POST["name"];
						$con_email = $_POST["email"];
						$con_sub = $_POST["subject"];
						$con_msg = $_POST["message"];
						$con_status = false;
		$exe = mysqli_query($connect,"insert into  contact_tbl (con_name,con_email,con_sub,con_msg,con_status) values 
		('".$con_name."','".$con_email."','".$con_sub."','".$con_msg."','".$con_status."')");
		if($exe)
		{
			echo "<script>alert('Our Team Will Contact You Soon Thanks For Contact us')</script>";
		}
		else
		{
			echo "<script>alert('Error')</script>";
		}
		}
        
        ?>
    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Name</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Subject</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject" required>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8" required></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" name="btnsub" class="btn btn-success btn-lg px-3">Let’s Talk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->



<?php
include("include/footer.php");
?>