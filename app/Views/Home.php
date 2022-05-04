<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>

<div class="container">
  <br>

  <?php if (isset($_SESSION['msg'])) : ?>
    <div class="alert <?= $_SESSION['msg-class']; ?> alert-dismissible fade show" role="alert"><?= $_SESSION['msg']; ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>

  <a href="<?= base_url('add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add Student Detail</a>
  <br><br>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">S.no</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone No</th>
        <th scope="col" colspan="2" class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      foreach ($stu_data as $record) : ?>
        <tr>
          <th scope="row"><?= $i; ?>.</th>
          <td><?= $record->name; ?></td>
          <td><?= $record->email; ?></td>
          <td><?= $record->phone; ?></td>
          <td class="text-center"><a href="edit/<?= $record->id; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a></td>
          <td class="text-center"><a href="delete/<?= $record->id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
      <?php $i++;
      endforeach; ?>
    </tbody>
  </table>
  <br><br>

</div>
<br><br>
<?= $this->endSection() ?>