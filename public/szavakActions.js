$(document).ready(function() {
    $('.delete-button').on('click', function() {
      var deleteButton = $(this);
      var id = deleteButton.data('id');
      var apiEndPoint = '/delete/' + id;
  
      $.ajax({
        headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content') },
        url: apiEndPoint,
        type: "DELETE",
        success: function(result) {
          console.log("Delete success");
          deleteButton.closest('tr').remove(); 
        },
        error: function(xhr, status, error) {
          console.log("Delete error:", error);
        }
      });
    });

    $('.hozzaadasButton').on('click', function() {
        var hozzaadasButton = $(this);
        var id = hozzaadasButton.data('id');
        var apiEndPoint = '/create/' + id;
    
        $.ajax({
          headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content') },
          url: apiEndPoint,
          type: "POST",
          success: function(result) {
            console.log("success");
            hozzaadasButton.closest('tr').remove(); 
          },
          error: function(xhr, status, error) {
            console.log("Hozzaadas error:", error);
          }
        });
      });

  });