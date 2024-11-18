<?php include('./inc/header.php') ?>

<?php
  $name = $email = $body = '';
  $name_err = $email_err = $body_err = '';

  // Form submit
  if(isset($_POST['submit'])) {
    // validate name
    if (empty($_POST['name'])) {
      $name_err = 'Name is Required.';
    } else {
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['email'])) {
      $email_err = 'Email is Required.';
    } else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }
    if (empty($_POST['body'])) {
      $body_err = 'Feedback is Required.';
    } else {
      $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    } 

    if(empty($name_err) && empty($email_err) && empty($body_err)) {
      // insert into db
      $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";

      if (mysqli_query($conn, $sql)) {
        // success
        header('Location: feedback.php');
      } else {
        // Error
        echo 'Error' . mysqli_errno($conn);
      }
    }
  }
?>
    <img src="/php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Traversy Media</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo $name_err ? 'is-invalid' : null ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invalid-feedback">
          <?php echo $name_err; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $email_err ? 'is-invalid' : null ?>" id="email" name="email" placeholder="Enter your email">
        <div class="invalid-feedback">
          <?php echo $email_err; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo $body_err ? 'is-invalid' : null ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
        <div class="invalid-feedback">
          <?php echo $body_err; ?>
        </div>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
<?php include('./inc/footer.php') ?>