<?php
    require APPROOT . '/views/includes/head.php';
?>

<style>
         tr.spaceUnder>td {
   padding-bottom: 0.5em;
}
         .btn{
           width: 80px;
           height: 25px;
           background: white;
           border-width: thin;
           border-color: black;
         }
</style>

<div style="margin-top: 15%; margin-left: 35%">
     <form action="<?php echo URLROOT; ?>/users/login" method ="POST">
         <p>Welcome to a job manager.</p>
         <p>To log in to the job controller, press the login button the
controller <br>
             to enter the job name, user name, and password.</p>
             <table>
                 <tr class="spaceUnder">
                     <td><label>user:</label></td>
                     <td><input type="text" id="user"
placeholder="Username *" name="username" size="28"
style="border-radius:3px; border-color: #C6C8C0; border-width:
thin;"></td>
                 </tr>
                 <tr class="spaceUnder">
                     <td><label>password:</label></td>
                     <td><input type="password" id="password"
placeholder="Password *" name="password" size="29"
style="border-radius:3px; border-color: #C6C8C0; border-width:
thin;"></td>
                 </tr>
                 <input type="hidden" name="csrf" value="<?php echo
$token ?>">
             </table>
         <div style="padding-top: 5%; padding-left: 35%">
             <button type="submit" class="btn"
value="Login">Login</button>
             <button type="reset"  class="btn"
value="Cancel">Cancel</button>
         </div>
     </form>
</div>