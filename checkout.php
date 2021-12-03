<?php
include("include/header.php");
include("config.php");
?>
<div class="container py-5">
        <div class="row py-5 ">
            <form class="col-md-6 m-auto" action="purchase.php" method="post" role="form" style="border-radius:20px;border:4px solid #212934;background-color:#F5F5F5;">
                <div class="row mt-3" >
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname"><b>Full Name</b></label>
                        <input type="text" class="form-control mt-1" id="name" name="fullname" placeholder="Name" required>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail"><b>Phone Number</b></label>
                        <input type="text" class="form-control mt-1" id="phone" name="phone" placeholder="xxx-xxxxxxx" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject"><b>Address</b></label>
                    <input type="text" class="form-control mt-1" id="address" name="address" placeholder="Address" required>
                </div>
                <div class="mb-3">
                    <input type="radio" value="COD" name="pay_mode" required/><b> &nbsp;Cash on Delivery</b>
                </div>
                <div class="row">
                    <div class="col text-end mt-2 mb-3 proceed-checkout">
                        <input type="submit" name="btnpurchase" class="proceed-btn" value="Place Order" style="float:right;"/>
                    </div>
                </div>
            </form>
        </div>
    </div>



<?php
include("include/footer.php")
?>