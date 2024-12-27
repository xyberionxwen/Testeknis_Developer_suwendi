<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Rekap Data Pegawai</title>
        <body>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>
  
            <div style="font-family:Arial; font-size:12px;">
                <center><h2>Data Pegawai</h2></center>  
            </div>
            <br>
            <table class="tg">
              <tr>
                <th class="tg-3wr7">NIP<br></th>
                <th class="tg-3wr7">Nama<br></th>
                <th class="tg-3wr7">Tempat, Tanggal Lahir<br></th>
                <th class="tg-3wr7">Nomor Telpon<br></th>
                <th class="tg-3wr7">Alamat<br></th>
              </tr>
              <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tampil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td class="tg-rv4w" width="20%"><?php echo e($tampil->nip); ?></td>
                <td class="tg-rv4w" width="40%"><?php echo e($tampil->nama); ?></td>
                <td class="tg-rv4w" width="30%"><?php echo e($tampil->tmpt_lahir); ?>, <?php echo e($tampil->tgl_lahir); ?></td>
                <td class="tg-rv4w" width="30%"><?php echo e($tampil->nohp); ?></td>
                <td class="tg-rv4w" width="30%"><?php echo e($tampil->alamat); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </body>
    </head>
</html><?php /**PATH C:\xampp\htdocs\projek_suwendi\resources\views/pegawai/pdf.blade.php ENDPATH**/ ?>