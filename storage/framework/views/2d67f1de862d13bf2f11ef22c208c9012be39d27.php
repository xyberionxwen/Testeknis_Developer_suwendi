<?php $__env->startSection('title'); ?>
<?php echo e(isset($pegawai) ? 'Edit' : 'Tambah'); ?> Pegawai
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> <?php echo e(isset($pegawai) ? 'Edit' : 'Tambah'); ?> Pegawai</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Pegawai</li>
          <li class="breadcrumb-item"><a href="#"><?php echo e(isset($pegawai) ? 'Edit' : 'Tambah'); ?> Pegawai</a></li>
        </ul>
      </div>

      <div class="row">        
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <?php if(isset($pegawai)): ?>
            <form class="form-horizontal" action="<?php echo e(route('pegawai.update', $pegawai->id)); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>

            <?php else: ?>
            <form class="form-horizontal" action="<?php echo e(route('pegawai.store')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <?php endif; ?>
            <?php
                // dd($pegawai)
            ?>
                <div class="form-group row">
                    <label class="control-label col-md-3">NIP</label>
                    <div class="col-md-8">
                      <input required class="form-control col-md-8" type="number" name="nip" value="<?php echo e(isset($pegawai) ? $pegawai->nip : ''); ?>">
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama</label>
                  <div class="col-md-8">
                    <input required class="form-control" type="text" name="nama" value="<?php echo e(isset($pegawai) ? $pegawai->nama : ''); ?>">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Tempat Lahir</label>
                    <div class="col-md-8">
                      <input required class="form-control col-md-8" type="text" name="tmpt_lahir" value="<?php echo e(isset($pegawai) ? $pegawai->tmpt_lahir : ''); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Tanggal Lahir</label>
                    <div class="col-md-8">
                        <input required class="form-control col-md-8" type="date" name="tgl_lahir" value="<?php echo e(isset($pegawai) ? $pegawai->tgl_lahir : ''); ?>">
                    </div>
                </div>                                
                <div class="form-group row">
                  <label class="control-label col-md-3">Alamat</label>
                  <div class="col-md-8">
                    <textarea required class="form-control" rows="4" name="alamat"><?php echo e(isset($pegawai) ? $pegawai->alamat : ''); ?></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Jenis Kelamin</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input required class="form-check-input" type="radio" class="sr-only" name="jenis_kelamin" value="Laki-laki" <?php echo e(isset($pegawai) && $pegawai->jenis_kelamin == 'Laki-laki' ? 'checked' : ''); ?>>Laki-laki
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input required class="form-check-input" type="radio" class="sr-only" name="jenis_kelamin" value="Perempuan" <?php echo e(isset($pegawai) && $pegawai->jenis_kelamin  == 'Perempuan' ? 'checked' : ''); ?>>Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Agama</label>
                    <div class="col-md-8">
                        <select class="form-control" name="agama_id" id="exampleSelect1">
                          <option value="">Pilih Agama</option>
                            <?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tampil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php if(isset($pegawai) && $pegawai->agama_id == $tampil->id_agm): ?> selected <?php endif; ?> value="<?php echo e($tampil->id_agm); ?>"><?php echo e($tampil->nmagama); ?></option> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                           
                        </select>
                    </div>                    
                </div>  
                
                <div class="form-group row">
                  <label class="control-label col-md-3">Kewarganegaraan</label>
                    <div class="col-md-8">
                        <select class="form-control" name="negara_id" id="exampleSelect1">
                          <option value="">Pilih Negara</option>
                            <?php $__currentLoopData = $negara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tampil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php if(isset($pegawai) && $pegawai->negara_id == $tampil->id_ngr): ?> selected <?php endif; ?> value="<?php echo e($tampil->id_ngr); ?>"><?php echo e($tampil->nm_negara); ?></option> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                           
                        </select>
                    </div>                    
                </div>  
                
                <div class="form-group row">
                  <label class="control-label col-md-3">Golongan Darah</label>
                    <div class="col-md-8">
                        <select class="form-control" name="gol_darah_id" id="exampleSelect1">
                          <option value="">Pilih Golongan Darah</option>
                            <?php $__currentLoopData = $darah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tampil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php if(isset($pegawai) && $pegawai->gol_darah_id == $tampil->id_darah): ?> selected <?php endif; ?> value="<?php echo e($tampil->id_darah); ?>"><?php echo e($tampil->nama_gol_darah); ?></option> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                           
                        </select>
                    </div>                    
                </div>  
                <div class="form-group row">
                  <label class="control-label col-md-3">Status</label>
                    <div class="col-md-8">
                        <select class="form-control" name="skeluarga_id" id="exampleSelect1">
                          <option value="">Pilih Status Keluarga</option>
                            <?php $__currentLoopData = $keluarga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tampil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php if(isset($pegawai) && $pegawai->gol_darah_id == $tampil->kdstatusk): ?> selected <?php endif; ?> value="<?php echo e($tampil->kdstatusk); ?>"><?php echo e($tampil->nmstatusk); ?></option> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                           
                        </select>
                    </div>                    
                </div>  
                <div class="form-group row">
                  <label class="control-label col-md-3">Foto</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="file" name="foto" value="<?php echo e(isset($pegawai) ? $pegawai->foto : ''); ?>">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Nomor HP</label>
                    <div class="col-md-8">
                      <input required class="form-control" type="text" name="nohp" value="<?php echo e(isset($pegawai) ? $pegawai->nohp : ''); ?>">
                    </div>
                </div>
                
              
            </div>

            <div class="tile-footer">
              <div class="row">              
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>        
                
              </div>
              
            </div>
              </form>
          </div>
        </div>              
      </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projek_suwendi\resources\views/pegawai/create_edit.blade.php ENDPATH**/ ?>