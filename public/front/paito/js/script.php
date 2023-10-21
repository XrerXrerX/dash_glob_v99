<script>
const pasaranButtons = document.querySelectorAll('#pasaran');
let selectedPasaran = localStorage.getItem('selected_pasaran');

// Jika selectedPasaran tidak ada di localStorage, gunakan nilai default dari PHP
if (!selectedPasaran && '<?= $selected_pasaran ?>' !== '') {
  selectedPasaran = '<?= $selected_pasaran ?>';
  localStorage.setItem('selected_pasaran', selectedPasaran);
} else {
  // Jika selectedPasaran ada di localStorage, ubah nilai $selected_pasaran di PHP
  <?php $_SESSION['selected_pasaran'] = '<script>document.write(localStorage.getItem("selected_pasaran"))</script>' ?>;
}

// Update selectedPasaran ketika tombol diklik
pasaranButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    const value = this.value;
    localStorage.setItem('selected_pasaran', value);
    selectedPasaran = value;
    // Disable button to prevent multiple form submissions
    this.disabled = true;
  });
});
</script>