function toggleColumn(col) {
    // set number of columns based on selected option
    var num_cols = col;

    // set grid-template-columns property to match selected number of columns
    var grid_cols = "grid-template-columns: repeat(" + num_cols + ", 1fr);";
    $("#my-table tbody").attr("style", grid_cols);

  var button = document.querySelector(".btn-col");
  button.textContent = col + " Col";


}


$(document).ready(function() {
    // Menangkap event klik pada opsi dropdown
    $('#dropdown-menu-style a').click(function(e) {
      e.preventDefault();
      
      // Mendapatkan nilai data-value dari opsi yang dipilih
      var colValue = $(this).data('value');
      
      // Menyesuaikan nilai grid-template-columns sesuai dengan nilai data-value yang dipilih
      switch (colValue) {
        case 'kol1':
          $('.kepalatabel').css('display', 'none');
          $('#my-table tbody').css('grid-template-columns', '1fr');
          break;
        case 'kol2':
          $('.kepalatabel').css('display', 'none');
          $('#my-table tbody').css('grid-template-columns', 'repeat(2, 1fr)');
          break;
        case 'kol3':
          $('.kepalatabel').css('display', 'none');
          $('#my-table tbody').css('grid-template-columns', 'repeat(3, 1fr)');
          break;
        case 'kol4':
          $('.kepalatabel').css('display', 'none');
          $('#my-table tbody').css('grid-template-columns', 'repeat(4, 1fr)');
          break;
        case 'kol5':
          $('.kepalatabel').css('display', 'none');
          $('#my-table tbody').css('grid-template-columns', 'repeat(5, 1fr)');
          break;
        case 'kol6':
          $('.kepalatabel').css('display', 'none');
          $('#my-table tbody').css('grid-template-columns', 'repeat(6, 1fr)');
          break;
        case 'kol7':
          $('.kepalatabel').css('display', 'block');
          $('#my-table tbody').css('grid-template-columns', 'repeat(7, 1fr)');
          break;
        default:
          break;
      }
    });
  });
