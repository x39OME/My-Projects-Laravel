<?php $__env->startSection('title', 'الملف الشخصي'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center" dir="rtl">
    <div class="col-md-6">
        <div class="card p-3 p-md-3 p-lg-5 mt-5">
            <div class="text-center">
                <img src="<?php echo e(asset('storage/' . auth()->user()->image)); ?>" width="82px" height="82px">
                <h3 class="mt-4 font-weight-bold">
                    <?php echo e(auth()->user()->name); ?>

                </h3>
            </div>

            <div class="card-body">
                <form method="POST" action="/profile" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="form-group mt-3">
                        <label for="name">الاسم</label>
                        <input name="name" type="text"
                            class="form-control text-right <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="name"
                            autofocus value="<?php echo e(auth()->user()->name); ?>">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger mt-2" dir="rtl"><small><?php echo e($message); ?></small></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">البريد الإلكتروني</label>
                        <input name="email" type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            autocomplete="email" value="<?php echo e(auth()->user()->email); ?>">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger mt-2" dir="rtl"><small><?php echo e($message); ?></small></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                    <div class="form-group mt-3">
                        <label for="password"><?php echo e(__('كلمة المرور')); ?></label>
                        <input id="password" type="password"
                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
                            autocomplete="new-password">

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger mt-2" dir="rtl"><small><?php echo e($message); ?></small></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>

                    <div class="form-group mt-3">
                        <label for="password-confirm"><?php echo e(__('تأكيد كلمة المرور')); ?></label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            autocomplete="new-password">
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">تغيير الصورة الشخصية</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input form-control" id="image" name="image">
                            <label class="custom-file-label text-left" id="image-label" for="image" data-browse="استعرض"></label>
                        </div>
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger mt-2" dir="rtl"><small><?php echo e($message); ?></small></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group d-flex mt-5">
                        <button type="submit" class="btn btn-primary mr-2">
                            <?php echo e(__('حفظ التعديلات')); ?>

                        </button>

                        <form action="/logout">
                            <button type="submit" class="btn btn-light">تسجيل الخروج</button>
                        </form>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('image').onchange = uploadOnChange;
    function uploadOnChange() {
        var filename = this.value;
        var lastIndex = filename.lastIndexOf("\\");
        if (lastIndex >= 0) {
            filename = filename.substring(lastIndex + 1);
        }
        document.getElementById('image-label').innerHTML = filename;
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myprojects\resources\views/profile.blade.php ENDPATH**/ ?>