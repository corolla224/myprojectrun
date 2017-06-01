<?php $__env->startSection('content'); ?>
<h1>Hello My Lib</h1>  
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Language</th>
            <th>Star</th>
            <th>Create</th>
            <th width="200">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>TEST</td>
            <td>TEST</td>
            <td>TEST</td>
            <td>TEST</td>
            <td>TEST</td>
            <td>TEST</td>
        </tr>
    </tbody>
</table>
<div class="row">
    <div class="col-xs-5">
        <?php echo e(Html::link('lib/create', 'Add New', array(
            'class' => 'btn btn-primary'
        ))); ?>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>