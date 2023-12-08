let colorPicker = document.getElementById("color-picker");  
let colorPalette = document.getElementById("color-palette");  
let colors = colorPalette.getElementsByClassName("color");  
let highlightedCells = [];  
let hatColors = document.querySelectorAll('input[name="hat-color"]');  
hatColors.forEach(function(hatColor) {  
  hatColor.addEventListener('change', function() {  
    let selectedColor = this.value;  
    let table = document.getElementById("my-table");  
    let cells = table.getElementsByTagName("td");  
    for (let j = 0; j < cells.length; j++) {  
        cells[j].addEventListener("click", function() {  
          if (highlightedCells.length > 0) {  
            for (let k = 0; k < highlightedCells.length; k++) {  
              highlightedCells[k].classList.remove("highlighted");  
              if (highlightedCells[k].style.backgroundColor === "") {  
                if (selectedColor === "") {  
                  highlightedCells[k].style.backgroundColor = "";  
                } else {  
                  highlightedCells[k].style.color = "black";  
                }  
              } else {  
                highlightedCells[k].style.color = "white";  
              }  
            }  
            highlightedCells = [];  
          }  
          this.style.backgroundColor = selectedColor;  
          this.style.color = "white";  
          if (selectedColor === "") {  
            this.style.color = "black";  
          }  
          highlightedCells.push(this);  
        });  
    }  
  });  
});  
  
let selected_pasaran = sessionStorage.getItem("selected_pasaran");  
let resetButton = document.getElementById("reset-button");  
  
resetButton.addEventListener("click", function() {  
  let selectedPasaran = document.getElementById("selected-pasaran");  
  sessionStorage.setItem("selected_pasaran", selectedPasaran);  
  localStorage.setItem("selected_pasaran", selectedPasaran);   
  location.reload();  
});