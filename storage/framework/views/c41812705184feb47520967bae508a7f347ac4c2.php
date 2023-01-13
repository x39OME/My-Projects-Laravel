<div class="card-footer" dir="rtl">
    <div class="d-flex justify-content-between">
        <div class="d-flex align-items-center gap-2">
            <img src="/images/clock.svg" alt="">
            <div class="mr-2">
                <?php echo e($project->created_at->diffForHumans()); ?>

            </div>
            <img src="/images/list-check.svg" alt="list">
            <div class="mr-2">
                <?php echo e(count($project->tasks)); ?>

            </div>
        </div>
        <div class="d-flex align-items-center mr-auto">
            <form action="/projects/<?php echo e($project->id); ?>" method="POST">
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                <input type="submit" class="btn-delete" value="">
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\myprojects\resources\views/projects/footer.blade.php ENDPATH**/ ?>