<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>

<div class="container">
  <br>
  <h2>Add New Student Details</h2>
  <br>

  <form autocomplete="off" method="post" action="Home/save">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="number" class="form-control" id="phone" name="phone">
    </div>

    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
  </form>
</div>

<?= $this->endSection() ?>