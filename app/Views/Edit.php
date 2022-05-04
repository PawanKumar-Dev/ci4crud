<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>

<div class="container">
  <br>
  <h2>Edit & Update Student Details</h2>
  <br>

  <?php foreach($stu as $record): ?>
  <form autocomplete="off" method="post" action="<?= base_url('Home/update'); ?>">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="<?= $record->name; ?>">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="<?= $record->email; ?>">
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="number" class="form-control" id="phone" name="phone" value="<?= $record->phone; ?>">
    </div>

    <input type="hidden" name="upid" value="<?= $record->id; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-refresh"></i> Update</button>
  </form>
  <?php endforeach; ?>
</div>

<?= $this->endSection() ?>