<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vote List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div class="d-flex justify-content-end mb-3">
        <a href="index.php" class="btn btn-primary">Add Data</a>
      </div>
      <table class="table table-bordered table-hover">
        <thead class="bg-info text-white">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>State</th>
            <th>Address</th>
            <th>National Parties</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'connection.php';

          $sql = "SELECT * FROM votes";
          $data = mysqli_query($conn, $sql);

          if (mysqli_num_rows($data) > 0) {
              while ($result = mysqli_fetch_assoc($data)) {
                  ?>
                  <tr>
                    <td><?php echo htmlspecialchars($result['voter_name']); ?></td>
                    <td><?php echo htmlspecialchars($result['voter_email']); ?></td>
                    <td><?php echo htmlspecialchars($result['contact']); ?></td>
                    <td><?php echo htmlspecialchars($result['state']); ?></td>
                    <td><?php echo htmlspecialchars($result['address']); ?></td>
                    <td><?php echo htmlspecialchars($result['political_parties']); ?></td>
                    <td>
                      <a href="index.php?id=<?php echo $result['id']; ?>&name=<?php echo urlencode($result['voter_name']); ?>&email=<?php echo urlencode($result['voter_email']); ?>&mobile=<?php echo $result['contact']; ?>&state=<?php echo urlencode($result['state']); ?>&address=<?php echo urlencode($result['address']); ?>&political_parties=<?php echo urlencode($result['political_parties']); ?>" class="btn btn-success">Update</a>
                    </td>
                    <td>
                      <a href="user_delete.php?id=<?php echo $result['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  <?php
              }
          } else {
              ?>
              <tr>
                <td colspan="8" class="text-center">No records found</td>
              </tr>
              <?php
          }
          ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
