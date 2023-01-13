<?php $__env->startSection('title', 'تعديل ' . $project->title); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center text-right">
    <div class="col-10 col-xl-7 card p-5 mt-5">
        <h3 class="text-center pb-5 font-weight-bold">تعديل المشروع</h3>
        <form method="post" action="/projects/<?php echo e($project->id); ?>" dir="rtl">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
            <?php echo $__env->make('projects.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="form-group mt-5">
                <button type="submit" class="btn btn-primary px-4 px-sm-5">تعديل</button>
                <a href="/projects" class="btn btn-light px-4 px-sm-5">إلغاء</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myprojects\resources\views/projects/edit.blade.php ENDPATH**/ ?>