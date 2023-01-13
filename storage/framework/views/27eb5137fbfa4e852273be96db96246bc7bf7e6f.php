<?php $__env->startSection('content'); ?>
<header class="d-flex justify-content-between align-items-center my-5" dir="rtl">
    <div class="h6 text-dark">
        <a href="/projects">المشاريع</a>
    </div>

    <div>
        <a href="/projects/create" class="btn btn-primary px-4" role="button">مشروع جديد</a>
    </div>
</header>

<section>
    <div class="row row-s">
        <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-4 mb-4">
                <div class="card text-right" style="height: 230px">
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
                            <h5 class="font-weight-bold card-title">
                                <a href="/projects/<?php echo e($project->id); ?>"><?php echo e($project->title); ?></a>
                            </h5>

                            <div class="card-text mt-4">
                                <?php echo e(Str::limit($project->description, 150)); ?>

                            </div>
                        </div>
                    </div>
                    <?php echo $__env->make('projects.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="m-auto align-content-center text-center">
                <p>لوحة العمل الخاصة بك خاليو من المشاديع ما رأيك بعمل مشروع جديد؟</p>
                <div class="mt-5">
                    <a href="/projects/create" class="btn btn-primary btn-lg d-inline-flex align-items-center" role="button">انشئ مشروعاً الآن</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myprojects\resources\views/projects/index.blade.php ENDPATH**/ ?>