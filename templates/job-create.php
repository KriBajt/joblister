<?php include 'inc/header.php'; ?>
<h2 class="page-header">Tworzenie oferty pracy</h2>
<form method="POST" action="create.php">
    <div class="form-group">
        <label>Company</label>
        <input type="text" class="form-control" name="company">
</div>
    <div class="form-group">
        <label>Category</label>
        <select type="text" class="form-control" name="category">
        <option value="0">Wybierz kategorię</option>
          <?php foreach($categories as $category): ?>
            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>

          <?php endforeach; ?>
</select>
</div>
    <div class="form-group">
        <label>Nazwa stanowiska</label>
        <input type="text" class="form-control" name="job_title">
</div>
    <div class="form-group">
        <label>Opis</label>
        <textarea class="form-control" name="description"></textarea>
</div>
<div class="form-group">
        <label>Lokalizacja</label>
        <input type="text" class="form-control" name="location">
</div>
<div class="form-group">
        <label>Stawka</label>
        <input type="text" class="form-control" name="salary">
</div>
<div class="form-group">
        <label>Kontakt Użytkownika</label>
        <input type="text" class="form-control" name="contact_user">
</div>
<div class="form-group">
        <label>Kontakt Email</label>
        <input type="text" class="form-control" name="contact_email">
</div>
<input type="submit" class="btn btn-default" value="Submit" name="submit">

</form>


<?php include 'inc/footer.php'; ?>