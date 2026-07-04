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

  <!-- JQuery -->
  <script src="javascript/jquery.js"></script>
  <script>

    $(document).ready(function() {
      
      $('.delete_btn_ajax').click(function(e) {
        e.preventDefault();

        var delete_id = $(this).closest("tr").find('.delete_id_value').val();
        // console.log(delete_id);
        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this Data!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            
            $.ajax({
              type: "POST",
              url: "code.php",
              data: {
                "delete_btn_set": 1,
                "delete_id": delete_id,
              },
              success: function(response) {

                swal(
                  "Data Deleted Successfully.",
                  {
                    icon: "success"
                  }
                ).then((result) => {
                  location.reload();
                });

              }
            });

          }
        });
      });
      
    });

  </script>

</body>

</html>