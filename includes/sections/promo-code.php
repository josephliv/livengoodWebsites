<div class="promo-div">
  <div class="promo-div-inner text-center">
    <div class="close-promo" id="close-promo">×</div>
    <h3>Stay informed:</h3>
    <p>Subscribe for new posts!</p>
    <?php include 'includes/opt-in-form.php'; ?>
  </div>
</div>
</div>
<button class="toggle-promo" id="toggleButton">Stay Informed</button>

<script>
  const promo = document.querySelector('.promo-div');
  const closePromox = document.getElementById('close-promo');
  const toggleButton = document.getElementById('toggleButton');

  function togglePromo() {
    promo.classList.toggle('closed');
  }

  toggleButton.addEventListener('click', togglePromo);
  closePromox.addEventListener('click', togglePromo);
</script>