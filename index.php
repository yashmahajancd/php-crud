<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

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
                  </tr>

                </thead>
                <tbody>

                  <tr>

                    <td>1</td>
                    <td>Bhavesh</td>
                    <td>Borse</td>
                    <td>borsebhavesh@gmail.com</td>
                    <td>********</td>
                    <td>8542168475</td>

                    <td>
                      <a href="register-edit.php"
                        class="btn btn-info btn-sm fw-semibold">
                        Edit
                      </a>
                    </td>

                    <td>
                      <a href="register-delete.php"
                        class="btn btn-danger btn-sm fw-semibold">
                        Delete
                      </a>
                    </td>

                  </tr>

                </tbody>
              </table>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>