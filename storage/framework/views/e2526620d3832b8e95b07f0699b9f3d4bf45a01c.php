<?php $__env->startSection('title', '- إنشاء مشروع جديد'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center  text-right">
    <div class="col-10 col-xl-7 card p-5 mt-5">
        <h3 class="text-center pb-5 mb-5 font-weight-bold">مشروع جديد</h3>
        <form method="post" action="/projects" dir="rtl">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('projects.form', ['project' => new App\Models\Project], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="form-group mt-5">
                <button type="submit" class="btn btn-primary px-4 px-sm-5">إنشاء</button>
                <a href="/projects" class="btn btn-light px-4 px-sm-5">إلغاء</a>
            </div>

        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myprojects\resources\views/projects/create.blade.php ENDPATH**/ ?>