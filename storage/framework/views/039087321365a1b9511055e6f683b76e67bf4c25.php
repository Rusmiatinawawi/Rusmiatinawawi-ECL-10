 
 <?php $__env->startSection('content'); ?>
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa
        <small>SMK Negeri 4 bandung</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/')); ?>"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li class="active">Data Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php echo $__env->make('templates/feedback', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="<?php echo e(url ('siswa/add')); ?>" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah </a>
        </div>
        <div class="box-body">
          <table class="table table-stripped">
            <thead>
              <tr>
                <th>No</th>
                 <th>Foto</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Kelas</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($result as $row): ?>
              <tr>
                <td><?php echo e(!empty ($i) ? ++$i : $i = 1); ?> </td>
                 <td><img src="<?php echo e(asset('uploads/'.@$row->foto)); ?>" width="80px" class="img"> </td>
                <td><?php echo e($row->nama_lengkap); ?> </td>
                <td><?php echo e($row->jenis_kelamin_display); ?> </td>
                <td><?php echo e($row->alamat); ?> </td>
                <td><?php echo e($row->no_telp); ?> </td>
                <td><?php echo e($row->kelas->nama_kelas); ?> </td>
                <td>
                  <a href="<?php echo e(url("siswa/$row->nis/edit")); ?>" class="btn btn-sm btn=warning"><i class="fa fa-pencil"></i></a>
                  <form action="<?php echo e(url("siswa/$row->nis/delete")); ?>" method="POST" style="display:inline;">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                   </form>
                    
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>