<script src="bills.js"></script>
<div id="bills">
  <form action="" id="create_bills" class="form create bill f-cols">
    <input type="text" class="input" name="lastname" disabled value="<?php echo $user->lastname; ?>">
    <input type="text" class="input" name="name" disabled value="<?php echo $user->name; ?>">
    <input type="number" class="input" name="total" min="1">
    <input type="submit" class="btn" value="ajouter facture">
  </form>
  <?php if(!isset($bills)): ?>
</div>
