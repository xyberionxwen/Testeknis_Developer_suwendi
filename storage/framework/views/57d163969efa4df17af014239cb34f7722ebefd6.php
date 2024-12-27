<?php $__env->startSection('title'); ?>
Data Pegawai
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Data Pegawai</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Pegawai</li>
          <li class="breadcrumb-item"><a href="#">Data Pegawai</a></li>
        </ul>
      </div>
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
                <form action="" class="form-inline" method="get">
                  <input type="text" name="nama" class="form-control mb-2 mr-2" value="<?php echo e(request()->nama); ?>" placeholder="Cari Nama Pegawai">
                  <select name="limit" class="form-control mb-2 mr-2">
                    <option <?php if(request()->limit == 10): ?> selected <?php endif; ?>>10</option>
                    <option <?php if(request()->limit == 20): ?> selected <?php endif; ?>>20</option>
                    <option <?php if(request()->limit == 50): ?> selected <?php endif; ?>>50</option>
                    <option <?php if(request()->limit == 100): ?> selected <?php endif; ?>>100</option>
                    <option <?php if(request()->limit == 500): ?> selected <?php endif; ?>>500</option>
                  </select>
                  <button type="submit" class="btn btn-info mb-2"><i class="fa fa-search"></i></button>
                </form>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Foto</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>TTL</th>
                      <th>JK</th>
                      <th>No. Telp</th>
                      <th>More</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $no=1 + (request()->limit ? intval(request()->limit) : 10) * ((request()->page ? intval(request()->page) : 1) - 1);
                    ?>
                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tampil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr> 
                      <td><?php echo e($no++); ?></td>                     
                      <td>
                        <?php if(isset($tampil->foto)): ?>
                        <img src="<?php echo e(asset('imgpegawai/'.$tampil->foto)); ?>" alt="" width="50px" height="50px">
                        <?php else: ?>
                        <img src="<?php echo e(asset('img/pegawai.png')); ?>" alt="" width="50px" height="50px">
                        <?php endif; ?>
                    </td>
                      <td><?php echo e($tampil->nip); ?></td>
                      <td><a href="<?php echo e(route('pegawai.show', $tampil->id)); ?>"><?php echo e($tampil->nama); ?></a></td>
                      <td><?php echo e($tampil->tmpt_lahir); ?>, <?php echo e(Carbon\Carbon::parse($tampil->tgl_lahir)->isoFormat('DD MMMM Y')); ?></td>
                      <td><?php echo e($tampil->jenis_kelamin); ?></td>
                      <td><?php echo e($tampil->nohp); ?></td>
                      <td>
                        <a href="<?php echo e(url('/pegawai/'.$tampil->id.'/edit')); ?>"
                        class="btn btn-info"><span class="fa fa-edit (alias)"></span></a>

                      </td>
                      <td>
                        <button class="btn btn-danger btn_modal_hapus" type="button" data-url="<?php echo e(route('pegawai.destroy', $tampil->id)); ?>" ><span class="fa fa-trash"></span></button>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
                <?php echo e($pegawai->appends(request()->all())->links('pagination::bootstrap-4')); ?>   
            </div>            
          </div>
        </div>
      </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projek_suwendi\resources\views/pegawai/index.blade.php ENDPATH**/ ?>