<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>


<?php

if (!empty($data['message'])) {
    echo "<div class='alert alert-success' role='alert'>";
    echo $data['message'];
    echo "</div>";
}
?>
<!--
<div class="container mt-2">
    <h2>
        <hr>
    </h2>
    <p> <b>Your <span style="color:orange;">monthly</span> stats are in! <b></p>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 style="text-align:center;"><b> 18 </b></h2>
                <p style="text-align:center;"> members
                <p>
            </div>
            <div class="col">
                <h2 style="text-align:center;"><b> 2 </b></h2>
                <p style="text-align:center;"> classes
                <p>
            </div>
            <div class="col">
                <h2 style="text-align:center;"><b> 180 </b></h2>
                <p style="text-align:center;"> $/months
                <p>
            </div>
        </div>
    </div>
    <hr>

    
-->


<div class="gym_content">
    <div class="gym_title pl-3"><?php echo $_SESSION['gym_name']; ?></div>
    <div class="gym_date">

            <div class="container">
                <div class="row">
                    <div class="col-4 text-center">
                        <span class="number" >18</span>
                        <hr>
                        <span class="desc">total members</span>
                    </div>
                    <div class="col-4 text-center">
                        <span class="number">4</span>
                        <hr>
                        <span class="desc">members this month</span>
                    </div>
                    <div class="col-4 text-center">
                        <span class="number">3</span>
                        <hr>
                        <span class="desc">activites</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 text-center">
                        <span class="number">180</span>
                        <hr>
                        <span class="desc">$/month</span>
                    </div>
                    <div class="col-4 text-center">
                        <span class="number ">2</span>
                        <hr>
                        <span class="desc">$ this month</span>
                    </div>
                    <div class="col-4 text-center">
                        <span class="number">17</span>
                        <hr>
                        <span class="desc">trainers</span>
                    </div>
                </div>
            </div>

    </div>

    <div class="gym_btn-group">
        <button>
            <a style="text-decoration:none; color:inherit;" href="<?php echo URLROOT; ?>/gym/activities">
                <span>Activities</span> </a>
            <span class="iconfont">&#xe60d;</span>
        </button>
        <button>
        <a style="text-decoration:none; color:inherit;" href="<?php echo URLROOT; ?>/gym/members">  <span>Members</span></a>
            <span class="iconfont">&#xe60d;</span>
        </button>
        <button>
            <span>Reports</span>
            <span class="iconfont">&#xe60d;</span>
        </button>
        <button>
        <a style="text-decoration:none; color:inherit;"  href="<?php echo URLROOT; ?>/Accounts/logout">
        <span>Log Out</span> </a>

        </button>
    </div>
</div>

<!-- Content end -->
</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>