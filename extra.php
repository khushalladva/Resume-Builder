

                     <!-- Other Accordian Code Start -->

                    <!--     <div class="col-md-12">           
                        <div class="form-group">
                            <h3>Other</h3>
                            <label >List your most recent education on top. You should not include high-school.</label>

                            <ul id="accordion">
                                <li>
                                    <label for="sixth"><?php echo $row['other_name'];  ?><i class="fas fa-arrow-circle-down"></i></label>
                                    <input type="checkbox" name="accordion" id="sixth">
                                    <div class="content">
                                        
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <hr>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">Name</label>
                                                                <input type="text" value="<?php echo $row['other_name'];  ?>" name="other_name" class="form-control" placeholder="Enter name here" required>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Job Title">City</label>
                                                                <input type="text" value="<?php echo $row['other_city'];  ?>" name="other_city" class="form-control" placeholder="Enter city name" required>
                                                            </div>
                                                            </div>-->

                                                            <!-- Start date -->
                                                           <!-- <div class="col-md-3">
                                                                <label for="start date">Start Date</label>
                                                                <input type="date" value="<?php echo $row['other_strt_date'];  ?>" class="form-control" name="OthStrtDate" required>
                                                            </div>
                                                             -->
                                                            <!-- End date --> 
                                                            <!--   <div class="col-md-3">
                                                                <label for="start date">End Date</label>
                                                                <input type="date" value="<?php echo $row['other_end_date'];  ?>" class="form-control" name="OthEndDate" required>
                                                            </div>

                                                        </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                       
                            </ul>

                        </div>
                    </div>-->
                    <!-- Other Accirdian Code End here -->
           
                    
                    
  <div class="section">
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
          </div>
          <div class="right">
            <div class="desc"> 
              <!-- Button -->
         <button class="myBtn print-button" onclick="printPage()" title="Generate to PDF">Print CV</button>
    <!-- Button --></div>
          </div>
        </div>
      </div>
      
  </div>
 
     </div>
  </div>
</div>

<script>
      function printPage() {
      document.getElementById("edit").style.display = "none";
      window.print();
    } 

    // JavaScript code for handling the scroll-to-top functionality
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("edit").style.display = "block";
        } else {
            document.getElementById("edit").style.display = "show";
        }
    }
  </script>
<?php
} 
else
{
    header("location:auth/login.php");
}
 }
  else
  {
      header('location:templates.php');
  }
?>
</body>
</html>