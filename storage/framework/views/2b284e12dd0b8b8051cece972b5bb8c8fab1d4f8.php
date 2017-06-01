<?php $__env->startSection('content'); ?>
<h1>Hello Ja My Form</h1>
<div class="panel panel-primary">
    <div class="panel-heading">
        <?php if(isset($lib)): ?>
            Edit Form
        <?php else: ?>
            Add Form
        <?php endif; ?>
    </div>
        <?php if(isset($lib)): ?>
            <?php echo e(Form::open(['method' => 'put', 'route' => ['lib.update', $lib->id] ])); ?>

        <?php else: ?>
            <?php echo e(Form::open(['url' => 'lip'])); ?>

        <?php endif; ?>
    <div class="panel-body">
        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-xs-2">
                <?php echo e(Form::label('title', 'Title Library')); ?>

              </div>
              <div class="col-xs-5">
                <?php if(isset($lib->title)): ?>
                  <?php echo e(Form::text('title',$lib->title,['class' => 'form-control'])); ?>

                <?php else: ?>
                  <?php echo e(Form::text('title', '',['class' => 'form-control'])); ?>

                <?php endif; ?>
              </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-2">
                <?php echo e(Form::label('language', 'Language')); ?>

              </div>
              <div class="col-xs-5">
                <?php if(isset($lib->language)): ?>
                  <?php echo e(Form::text('language',$lib->language,['class' => 'form-control'])); ?>

                <?php else: ?>
                  <?php echo e(Form::text('language', '',['class' => 'form-control'])); ?>

                <?php endif; ?>
              </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-2">
                <?php echo e(Form::label('star', 'The Star')); ?>

              </div>
              <div class="col-xs-5">
                <?php if(isset($lib->star)): ?>
                  <?php echo e(Form::text('star',$lib->star,['class' => 'form-control'])); ?>

                <?php else: ?>
                  <?php echo e(Form::text('star', '',['class' => 'form-control'])); ?>

                <?php endif; ?>
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-5">
            <?php echo e(Form::submit('Save',['class' => 'btn-primary'])); ?>

        </div>
    </div>
    <?php echo e(Form::close()); ?>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>