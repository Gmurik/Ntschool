<?php $__env->startSection('pageName',$pageName); ?>
<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('url',$url); ?>
<?php $__env->startSection('labelForUrl',$labelForUrl); ?>


<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sections.upperSearchPanel', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('sections.topLogoPanel', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('sections.topNavigationPanel', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('sections.404', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('sections.copyrightSection', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>