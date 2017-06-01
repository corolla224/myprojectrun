<?php $__env->startSection('title', 'Band New Song'); ?>

<?php $__env->startSection('content'); ?>

  <?php if($band == 'Metallica'): ?>
  <h2>Band :: <?php echo e($band); ?></h2>
  <h3>Song :: <?php echo e($song); ?></h3>
  <?php else: ?>
      No Band And Song
  <?php endif; ?>

  <?php for($i=0; $i < 10; $i++): ?>
      <?php echo e($i); ?>

  <?php endfor; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>