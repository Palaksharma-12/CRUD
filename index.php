<?php
error_reporting(0);

$id = $_REQUEST['id'] ?? '';
$name = $_REQUEST['name'] ?? '';
$email = $_REQUEST['email'] ?? '';
$mobile = $_REQUEST['mobile'] ?? '';
$state = $_REQUEST['state'] ?? '';
$address = $_REQUEST['address'] ?? '';
$parties = $_REQUEST['parties'] ?? '';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
<section>
  <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-12 col-sm-8 col-md-6 m-auto">
        <div class="card border-0 shadow">
          <div class="card-body">
            <h3 class="text-center">Online Voting System</h3>
            <form action="user_add.php" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($name); ?>" placeholder="Enter your name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>" placeholder="Enter your email">
              </div>
              <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control" value="<?php echo htmlspecialchars($mobile); ?>" placeholder="Enter your phone number">
              </div>
              <div class="mb-3">
                <label for="state" class="form-label">State</label>
                <input type="text" name="state" class="form-control" value="<?php echo htmlspecialchars($state); ?>" placeholder="Enter state">
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo htmlspecialchars($address); ?>" placeholder="Enter your address">
              </div>
              <div class="mb-3">
                <label>Select political party to vote:</label><br>
                <input type="radio" name="parties" value="BJP" <?php if($parties == "BJP") echo "checked"; ?>> BJP
                <input type="radio" name="parties" value="INC" <?php if($parties == "INC") echo "checked"; ?>> INC
                <input type="radio" name="parties" value="AAP" <?php if($parties == "AAP") echo "checked"; ?>> AAP
                <input type="radio" name="parties" value="BSP" <?php if($parties == "BSP") echo "checked"; ?>> BSP
                <input type="radio" name="parties" value="CPM" <?php if($parties == "CPM") echo "checked"; ?>> CPM
              </div>
              <div class="d-grid gap-2">
                <?php if(!empty($id)): ?>
                  <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                  <button type="submit" class="btn btn-primary" name="update">Update</button>
                <?php else: ?>
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <?php endif; ?>
                <a href="user_list.php" class="btn btn-secondary">View Data</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
