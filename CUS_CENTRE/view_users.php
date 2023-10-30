<?php
session_start();
$cid = $_SESSION['uid'];
// echo $cid;
include '../connection/connect.php';
include './header.php';
$userid=$_REQUEST['uid'];

?>


<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap");
    * {
        margin: 0;
        padding: 0;
        font-family: "Nunito", sans-serif;
    }

    :root {
        --green: #58a497;
        --yellow: #e09449;
        --lightgreen1: #a4bdb7;
        --brown: #8b4448;
        --gray: gray;
        --lightgreen2: rgb(164, 189, 183, 0.5);
        --box: #ededed;
    }

    /* 
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;

        background: #a4bdb7;
    } */

    /* Content-1:Start */
    .box {
        width: 350px;
        height: fit-content;
        border-radius: 20px;
        padding: 10px;
        text-align: center;
        background: #ededed;
    }

    .box1 {
        margin-top: 10px;
    }

    .content {
        margin: 15px 2px;
    }

    .image img {
        height: auto;
        width: 120px;
        border-radius: 50%;

        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 5px;
    }

    .level {
        font-size: 0.7em;
        background-color: rgb(164, 189, 183, 0.5);
        width: 50px;
        padding: 3px;
        border-radius: 5px;
        font-weight: bolder;
        letter-spacing: 1px;

        display: block;
        margin: 0px auto 10px;
    }

    .name {
        font-size: 1.25em;
        font-weight: bolder;
        letter-spacing: 1px;
    }

    .job_title {
        font-size: 0.65em;
        font-weight: bolder;
        color: gray;
        margin-top: -2px;
    }

    .job_discription {
        font-size: 0.7em;
        color: gray;
        margin: 10px 30px 20px;
    }

    .icons {
        margin: 0px 30px;
        font-size: 1.5em;
        display: flex;
        justify-content: space-around;
    }

    .icons button {
        width: fit-content;
        height: fit-content;
        border: none;
        font-size: 1em;
    }

    ion-icon:hover {
        color: #58a497;
        transition: 0.5s;
    }

    button {
        width: 130px;
        height: 40px;
        border-radius: 10px;
        font-weight: bolder;
    }

    .button {
        display: flex;
        justify-content: space-around;
        flex-direction: row;
        margin: 20px 30px 0px;
    }

    .button .message {
        background: #ededed;
        border: 2px solid #000;
    }

    .button .connect {
        background-color: #000;
        color: #ededed;
        border: none;
    }

    button.connect:hover {
        letter-spacing: 1px;
        transition: 0.5s;
    }

    button.message:hover {
        letter-spacing: 1px;
        transition: 0.5s;
        background: rgba(88, 164, 151, 0.5);
    }

    /* Content-1:End */

    /* Content-2:Start */
    .box2 {
        margin-top: 50px;
        margin-bottom: 10px;
    }

    .box2 img {
        width: 80px;
    }

    .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0px 0px 10px;
    }

    h5 {
        font-weight: bolder;
        font-size: 1em;
    }

    .row p {
        font-size: medium
    }

    .box2 .text {
        text-align: left;
    }

    .box2 .text .name {
        font-size: 1.1em;
    }

    .box2 .text .job_title {
        font-size: 0.6em;
        margin-bottom: 10px;
    }

    .box2 .text .job_discription {
        margin: 0px;
    }

    .box2 .text .about {
        font-size: 0.9em;
        font-weight: bolder;
    }

    /* Content-2:End */

    /* Responsiveness:Start */
    @media screen and (max-width: 480px) {
        .box {
            width: 100vw;
            border-radius: 0px;
        }

        .button {
            display: flex;
            flex-direction: column;
        }

        .button button {
            width: 250px;
        }

        button.connect {
            margin-top: 10px;
        }

        .content2 {
            padding: 0px 20px;
        }

        .content2 img {
            width: 60px;
            height: 60px;
        }
    }
    /* p{
        font-size: medium;
    } */

    /* Responsiveness:End */
</style>

<center><br><br>
    <section>

        <div class="box1 box">
            <?php
            $vi = "SELECT * FROM `user` WHERE `uid`='$userid'";
            $ex = mysqli_query($conn, $vi);
            while ($row = mysqli_fetch_array($ex)) {

                ?>
                <div class="content">
                    <div class="image">
                        <img src="../image/<?php echo $row['uimage'] ?>" alt="Profile Image">
                    </div>
                    <div class="level">
                        <p>User</p>
                    </div>
                    <div class="text">
                        <p class="name" ><?php echo $row['uname'] ?></p>
                        <p class="job_discription" style="font-size: medium">Email ; <?php echo $row['uemail'] ?> <br>
                        <p class="job_discription"  style="font-size: large">Contact : <?php echo $row['uphone'] ?> <br> <?php echo $row['uaddress'] ?></p>
                    </div>
                   

                </div>
            <?php } ?>
        </div>

    </section>
</center>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


<?php
include './footer.php'
    ?>