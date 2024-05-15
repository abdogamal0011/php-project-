
    <!-- Navigation -->
    <?php 
@include("head.php");
@include("body.php");
?>
    <div class="container shadow border bg-light ">
    <h2 class="mt-5 "><a class="text-success text-decoration-none" href="#" >Worker Change Password</a></h2>
    <form class="mt-5" id="changePasswordForm" action="view/handle/changePassword.php" method="post">
        <div class="form-group" style="margin-bottom: 20px;">
            <input type="password" id="currentPassword" placeholder="enter the Current Password" name="currentPassword" style="width: 100%; padding: 10px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;" >
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <input type="password" id="newPassword"  placeholder="enter the new Password" name="newPassword" style="width: 100%; padding: 10px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;" >
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <input type="password" id="confirmPassword"  placeholder="enter the confirm Password" name="confirmPassword" style="width: 100%; padding: 10px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;" >
        </div>
        <button type="submit" style="padding: 10px 20px; font-size: 16px; background-color: #4CAF50;  border: none; border-radius: 5px; cursor: pointer;">Change Password</button>
    </form>
</div>