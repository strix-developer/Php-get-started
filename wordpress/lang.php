 <?php
    include("header.php");
    ?>

 <div class="container-fluid col-sm-4 p-4 text-center rounded font-monospace">
     <form action="welcome.php" method="POST">

         <select multiple class="form-select" id="language" name="language" required>
             <option>English(United States)</option>
             <option>English(Australia)</option>
             <option>English(Canada)</option>
             <option>English(UK)</option>
             <option>English(South Africa)</option>
             <option>English(New Zealand)</option>
         </select>
         <button type="submit" class="btn btn-primary mt-3" name="submit">Continue</button>
     </form>
 </div>