<?php include 'inc/header.php'; ?>
<h2 class="page-header">Edycja oferty pracy</h2>
<form method="POST" action="edit.php?id=<?php echo $job->id; ?>">
    <div class="form-group">
        <label>Company</label>
        <input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
</div>
    <div class="form-group">
        <label>Category</label>
        <select type="text" class="form-control" name="category">


        <option value="0">Wybierz kategorię</option>
          <?php foreach($categories as $category): ?>
            <?php if($job->category_id == $category->id): ?>
                <option value="<?php echo $category->id; ?> selected">
                <?php echo $category->name; ?></option>

            <?php else: ?>
                <option value="<?php echo $category->id; ?>">
                <?php echo $category->name; ?></option>

            <?php endif; ?>


          <?php endforeach; ?>
</select>
</div>
    <div class="form-group">
        <label>Nazwa stanowiska</label>
        <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>">
</div>
    <div class="form-group">
        <label>Opis</label>
        <textarea class="form-control" name="description" ><?php echo $job->description; ?></textarea>
</div>
<div class="form-group">
        <label>Lokalizacja</label>
        <input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
</div>
<div class="form-group">
        <label>Stawka</label>
        <input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
</div>
<div class="form-group">
        <label>Kontakt Użytkownika</label>
        <input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>">
</div>
<div class="form-group">
        <label>Kontakt Email</label>
        <input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>">
</div>
<input type="submit" class="btn btn-default" value="Submit" name="submit">

</form>


<?php include 'inc/footer.php'; ?>