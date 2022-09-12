document.addEventListener('DOMContentLoaded', function () {

    $(function() {
      $('.delete').on('click', function() {

        Swal.fire({
          title: 'Czy na pewno chcesz usunąć kategorię?',
          text: 'Wszystkie podkategorie również zostaną usunięte',
          icon: 'warning',
          showCancelButton: true,
          showDenyButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3234',
          denyButtonColor: '#3085d6',
          confirmButtonText: 'Tak, usuń!',
          denyButtonText: 'Zmień rodzica podkategorii',
          cancelButtonText: 'Anuluj'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              method: "DELETE",
              url: "http://127.0.0.1:8000/categories/" + $(this).data("id"),
            })
            .done(function(response) {
              window.location.reload();
            })
            .fail(function (response) {
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Coś poszło nie tak!',
              })
            }); 
          }

          else if (result.isDenied) {
            $.ajax({
              method: "POST",
              url: "http://127.0.0.1:8000/categories/edit_parent/" + $(this).data("id"),
            })
            .done(function(response) {
              window.location.reload();
            })
            .fail(function (response) {
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Coś poszło nie tak!',
              })
            }); 
          }
        })
    });
    });
  
  }, false);