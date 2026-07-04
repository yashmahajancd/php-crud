<?php include('includes/header.php') ?>
<?php include('dbconfig.php')?>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-11">
      <div class="card shadow-lg border-0 rounded-4">

        <div class="card-header bg-secondary text-white rounded-top-4 py-3">
          <div class="d-flex justify-content-between align-items-center">

            <h3 class="mb-0 fw-bold">
              PHP CRUD
            </h3>

            <a href="register.php" class="btn btn-light fw-semibold">
              Register
            </a>

          </div>
        </div>

        <div class="card-body">
          <div class="table-responsive">

            <?php
            
              $register = "SELECT * FROM register";
              $register_run = mysqli_query($conn, $register);

              if(mysqli_num_rows($register_run) > 0) {

            ?>

            <table class="table table-hover table-bordered align-middle text-center">
              <thead class="table-dark">

                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Contact</th>
                  <th width="120">Edit</th>
                  <th width="120">Delete</th>
                  <th width="120">Confirm D</th>
                </tr>

              </thead>
              <tbody>

              <?php
              
                while($reg_row = mysqli_fetch_array($register_run)) {
              
              ?>

                <tr>
                  <td><?php echo $reg_row['id']; ?></td>
                  <td><?php echo $reg_row['fname']; ?></td>
                  <td><?php echo $reg_row['lname']; ?></td>
                  <td><?php echo $reg_row['email']; ?></td>
                  <td><?php echo str_repeat("*", strlen($reg_row['password'])); ?></td>
                  <td><?php echo $reg_row['contact']; ?></td>
                  <td>
                    <a href="register-edit.php?id=<?php echo $reg_row['id']; ?>"
                      class="btn btn-info btn-sm fw-semibold">
                      Edit
                    </a>
                  </td>
                  <td>
                    <form action="code.php" method="POST">
                      <input type="hidden" name="delete_id" value="<?php echo $reg_row['id']; ?>">
                      <button type="submit" name="delete_btn" class="btn btn-danger btn-sm fw-semibold">
                        Delete
                      </button>
                    </form>
                  </td>
                  <td>
                    <input type="hidden" class="delete_id_value" value="<?php echo $reg_row['id']; ?>">
                    <a href="javascript:void(0)" class="delete_btn_ajax btn btn-danger btn-sm fw-semibold">Confirm D</a>
                  </td>
                </tr>

              <?php } ?>

              </tbody>
            </table>

            <?php
            
              } else {
                echo "No Record Found!";
              }
            
            ?>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php') ?>