<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
    if(isset($_POST['btn-submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $province = $_POST['province'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];
        $shortBio = $_POST['shortBio'];
        $interest = $_POST['interest'];
        foreach ($interest as $value) {
        }
    }
    if(empty($username) || empty($email) || empty($province) || empty($phone) || empty($gender) || empty($status) || empty($shortBio)) {
?>
    <div class="container mt-5">
        <div class="row">

            <div class="col-4"></div>

            <div class="col-4">
                <div class="alert alert-danger">
                    <strong> File cannot empty! </strong>
                </div>
                   <a class="btn btn-danger btn-block" href="index.php">Go Back</a>
            </div>

            <div class="col-4"></div>
        </div>
    </div>
<?php
    }else {
?>
     <div class="container">
        <div class="row">
        <div class="col-2"></div>

        <div class="col-8">
            <div class="list-group">    
                <div class="list-group-item list-group-item-action">
                <!-- Username -->
                <strong>Username:</strong><?php echo $username?>
                </div>
                <div class="list-group-item list-group-item-action">
                <!-- Email -->
                <strong>Email:</strong><?php echo $email ?>
                </div>
                <div class="list-group-item list-group-item-action">
                <!--  Select province --> 
                <strong>Province:</strong><?php echo $province ?>
                </div>
                <div class="list-group-item list-group-item-action">
                 <!-- phone number -->
                 <strong>Phone:</strong><?php echo $phone ?>

                </div>
                <div class="list-group-item list-group-item-action">
                <!-- gender -->
                <strong>Genter:</strong><?php echo $gender ?>

                </div>
                <div class="list-group-item list-group-item-action">
                <!-- Status -->
                <strong>Status:</strong><?php echo $status ?>

                </div>
                <div class="list-group-item list-group-item-action">
                <!-- Interest -->
                <strong>Indterest:</strong>
                
                <?php
                foreach ($interest as $value) {
                    echo $value. ',';
                }
                ?>

                </div>
                <div class="list-group-item list-group-item-action">
                <!-- Describe about who you are -->
                <strong>Sort Describe:</strong><?php echo $shortBio ?>

                </div>
            </div>
        </div>

        <div class="col-2"></div>
        </div>
    </div>
<?php  
    }

?>