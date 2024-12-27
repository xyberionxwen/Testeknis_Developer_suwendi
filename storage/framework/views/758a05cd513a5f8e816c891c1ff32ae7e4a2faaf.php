<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('dashboard'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dapeg Dashboard</h1>
          <p>Dashboard Daftar Pegawai</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Users</h4>
              <p><b><?php echo e($user); ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3"><a href="<?php echo e(route('pegawai.create')); ?>">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-edit fa-3x"></i>
            <div class="info"></a>
              <h4>Tambah Pegawai</h4>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3"><a href="<?php echo e(route('pegawai.index')); ?>">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info"></a>
              <h4>Data Pegawai</h4>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3"><a href="<?php echo e(route('pegawai-pdf')); ?>">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-download fa-3x"></i>
            <div class="info"></a>
              <h4>Report Pegawai</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
          <h3 class="tile-title">Pegawai Berdasarkan Status Pernikahan</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Pegawai Berdasarkan Jenis Kelamin</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script type="text/javascript">
      var data = {
      	labels: <?php echo json_encode($status_lbl); ?>,
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: <?php echo e(json_encode($status_val)); ?>,
            label: "Sudah Menikah"
      		},
      	]
      };
      var pdata = [
      	{
      		value: <?php echo e($pgw_lk); ?>,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Laki-laki"
      	},
      	{
      		value: <?php echo e($pgw_pr); ?>,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "Perempuan"
      	}
      ]
      
      var ctxb = $("#barChartDemo").get(0).getContext("2d");
      var barChart = new Chart(ctxb).Bar(data);      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projek_suwendi\resources\views/dashboard.blade.php ENDPATH**/ ?>