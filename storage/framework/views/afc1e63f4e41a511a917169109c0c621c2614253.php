<?php $__env->startSection('title', $project->title); ?>

<?php $__env->startSection('content'); ?>
<header class="d-sm-flex justify-content-between align-items-center my-5 text-center" dir="rtl">
    <div class="h6 text-dark">
        <a href="/projects">المشاريع</a> / <?php echo e($project->title); ?>

    </div>

    <div class="mt-4 mt-sm-0">
        <a href="/projects/<?php echo e($project->id); ?>/edit" class="btn btn-primary px-4">تعديل المشروع</a>
    </div>
</header>

<section class="row text-right" dir="rtl">
    
    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-body">
                <div class="status">
                    <?php switch($project->status):
                    case (1): ?>
                    <span class="text-success fs-6 fw-bold">مكتمل</span>
                    <?php break; ?>
                    <?php case (2): ?>
                    <span class="text-danger fs-6 fw-bold">ملغي</span>
                    <?php break; ?>
                    <?php default: ?>
                    <span class="text-warning fs-6 fw-bold">قيد الإنجاز</span>
                    <?php endswitch; ?>
                </div>
                <h5 class="font-weight-bold card-title"><a href="/projects/<?php echo e($project->id); ?>"><?php echo e($project->title); ?></a>
                </h5>
                <div class="card-text my-4">
                    <?php echo e($project->description); ?>

                </div>

            </div>
            <?php echo $__env->make('projects.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="card">

            <div class="card-body">
                <form action="/projects/<?php echo e($project->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("PATCH"); ?>
                    <select name="status" class="custom-select" onchange="this.form.submit()">
                        <option value="0" <?php echo e(($project->status == 0) ? 'selected' : ''); ?>>قيد الإنجاز</option>
                        <option value="1" <?php echo e(($project->status == 1) ? 'selected' : ''); ?>>مكتمل</option>
                        <option value="2" <?php echo e(($project->status == 2) ? 'selected' : ''); ?>>ملغي</option>
                    </select>
                </form>
            </div>
        </div>
    </div>

    
    <div class="col-lg-8">
        <?php $__currentLoopData = $project->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card justify-content-between p-3 mb-3 d-flex flex-row align-items-center">
            <div class="<?php echo e($task->done ? 'checked text-muted' : ''); ?>">
                <?php echo e($task->body); ?>

            </div>
            <div class="d-flex gap-3 align-items-center">
                <form action="/projects/<?php echo e($task->project->id); ?>/tasks/<?php echo e($task->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <input type="checkbox" name="done" onchange="this.form.submit()" class="ml-4"
                        <?php echo e($task->done ? 'checked' : ''); ?>>
                </form>

                <div class="d-flex align-items-center mr-auto">
                    <form method="POST" action="/projects/<?php echo e($task->project->id); ?>/tasks/<?php echo e($task->id); ?>"
                        class="hide-submit">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>
                        <input type="submit" class="btn btn-delete mt-1" value="">
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <form method="POST" action="/projects/<?php echo e($project->id); ?>/tasks" class="p-3 d-flex">
                <?php echo csrf_field(); ?>
                <input type="text" name="body" class="form-control p-2 ml-2" placeholder="أضف مهمة جديدة">
                <button type="submit" class="btn btn-primary">أضف</button>
            </form>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myprojects\resources\views/projects/show.blade.php ENDPATH**/ ?>