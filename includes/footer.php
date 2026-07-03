  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <script src="javascript/sweetalert.js"></script>

  <?php
  
  if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
  
  ?>

  <script>
    swal({
      title: "<?php echo $_SESSION['status']; ?>",
      // text: "You clicked the button!",
      icon: "<?php echo $_SESSION['status_code']; ?>",
      button: "Ok",
    });
  </script>

  <?php
  
    unset($_SESSION['status']);
  }
  
  ?>

</body>

</html>