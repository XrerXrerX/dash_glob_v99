var asColumns = document.querySelectorAll('.number td:nth-child(1), .number td:nth-child(6), .number td:nth-child(11), .number td:nth-child(16), .number td:nth-child(21), .number td:nth-child(26), .number td:nth-child(31)');
var kopColumns = document.querySelectorAll('.number td:nth-child(2), .number td:nth-child(7), .number td:nth-child(12), .number td:nth-child(17), .number td:nth-child(22), .number td:nth-child(27), .number td:nth-child(32)');
var kepalaColumns = document.querySelectorAll('.number td:nth-child(3), .number td:nth-child(8), .number td:nth-child(13), .number td:nth-child(18), .number td:nth-child(23), .number td:nth-child(28), .number td:nth-child(33)');
var ekorColumns = document.querySelectorAll('.number td:nth-child(4), .number td:nth-child(9), .number td:nth-child(14), .number td:nth-child(19), .number td:nth-child(24), .number td:nth-child(29), .number td:nth-child(34)');
var jumlahColumns = document.querySelectorAll('.number td:nth-child(5), .number td:nth-child(10), .number td:nth-child(15), .number td:nth-child(20), .number td:nth-child(25), .number td:nth-child(30), .number td:nth-child(35)');
function detectNumber() {
    var inputs = document.querySelectorAll('input[type="text"]');
    inputs.forEach(function(input) {
      var cols = input.value.split('');
      cols.forEach(function(col, index) {
        if (!isNaN(col)) {
          var nthChild;
          switch (input.id) {
            case 'as':
              nthChild = 1;
              break;
            case 'kop':
              nthChild = 2;
              break;
            case 'kepala':
              nthChild = 3;
              break;
            case 'ekor':
              nthChild = 4;
              break;
            case 'jumlah':
              nthChild = 5;
              break;
            default:
              nthChild = -1;
          }
          if (nthChild > 0) {
            var columns;
            switch (nthChild) {
              case 1:
                columns = asColumns;
                break;
              case 2:
                columns = kopColumns;
                break;
              case 3:
                columns = kepalaColumns;
                break;
              case 4:
                columns = ekorColumns;
                break;
              case 5:
                columns = jumlahColumns;
                break;
              default:
                columns = null;
            }
            if (columns && columns.length > 0) {
              columns.forEach(function(cell) {
                if (cell.textContent.trim() === col) {
                  var color;  
                  switch (nthChild) {
                    case 1:
                      color = 'Red';
                      break;
                    case 2:
                      color = 'green';
                      break;
                    case 3:
                      color = 'blue';
                      break;
                    case 4:
                      color = 'indigo';
                      break;
                    case 5:
                      color = 'violet';
                      break;
                    default:
                      color = 'black';
                  }
                  cell.style.backgroundColor = color;
                  cell.style.color = "white";
                }
              });
            }
          }
        }
      });
    });
  }
function resetColors() {
  var cells = document.querySelectorAll('table tr td');
  cells.forEach(function(cell) {
    cell.style.backgroundColor = '';
    cell.style.color = '';
  });
}
var inputs = document.querySelectorAll('input[type="text"]');
inputs.forEach(function(input) {
  input.addEventListener('input', detectNumber);
});

