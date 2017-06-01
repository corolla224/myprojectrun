<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
  
  <?php echo e(Html::style(('css/bootstrap.css'))); ?>

  <?php if(isset($style)): ?>
      Hello style
  <?php endif; ?>
      </style>
  </style>
  </head>
  <body>
    <h1>Layout Main Karun</h1>
    <div class="container">
  <?php echo $__env->yieldContent('content'); ?>
    </div>
  </body>
</html>
