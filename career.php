<!-- Header -->
<?php
$title = "Join us as a Volunteer";
include_once 'partial/header.php';
include_once 'partial/navbar.php';

if (!isset($_SESSION['logined'])) {
    echo "<script>window.location.href='login.php?return=career.php'</script>";
}
?>
<style>
    .volenteer-card {
        background-color: white;
        padding: 2rem;
    }

    .volenteer-card form {
        width: 80%;
        margin: auto;
    }

    .volenteer-card label {
        display: block;
        margin-top: 20px;
        margin-bottom: 10px;
        font-weight: 700;
    }
</style>
<div class="login-form">
    <div class="container-fluid">
        <div class="col-md-7 bg-white mx-auto">
            <div class="sign text-center">
                <h4 class="text-white">#stopfoodwaste</h4>
            </div>
            <h4 class="text-center mt-5">Become a volunteer</h4>
            <form method="POST" class="col-md-10 mx-auto py-5">
                <div class="row">
                    <div class="col-md-6">
                        <label class="mb-2">Name </label>
                        <input type="text" name="name" id="name" class="p-3 form-control mb-4" placeholder="Your Name">
                    </div>
                    <div class="col-md-6">
                        <label class="mb-2">Phone</label>
                        <input type="text" name="phone" id="email" class="p-3 form-control mb-4" placeholder="Phone number">
                    </div>
                    <div class="col-md-6">
                        <label class="mb-2">Email</label>
                        <input type="email" name="email" id="address" class="p-3 form-control mb-4" placeholder="Your Email">
                    </div>
                    <div class="col-md-6">
                        <label class="mb-2">City</label>
                        <input type="text" name="city" id="contact" class="p-3 form-control mb-4" placeholder="Your City ">
                    </div>
                    <div class="col-md-12">
                        <label class="mb-2">Address</label>
                        <textarea type="text" name="address" id="description" rows="5" class="p-3 form-control" placeholder="Your Current Address"></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-theme mt-4">Apply now</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include("connection.php");
if (isset($_POST['placeorder'])) {
    $vname = $_POST['name'];
    $vemail = $_POST['email'];
    $vaddress = $_POST['address'];
    $vcontact = $_POST['contact'];

    // Perform basic validation
    if (!empty($vname) && !empty($vemail) && !empty($vaddress) && !empty($vcontact)) {
        $insert = $con->query("INSERT INTO `tbl_volunteer`(`name`, `email`, `address`, `contact`) VALUES ('$vname','$vemail','$vaddress','$vcontact')");
        if ($insert) {
            echo "<script>alert('Volunteer Form Submitted Successfully')</script>";
            echo "<script>window.location.href='volunteer.php'</script>";
        } else {
            echo "<script>alert('Failed to submit Volunteer Form')</script>";
        }
    } else {
        echo "<script>alert('Please fill in all required fields')</script>";
    }
}
?>
<?php
include('partial/footer.php')
?>