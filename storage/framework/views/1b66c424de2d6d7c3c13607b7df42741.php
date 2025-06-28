

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Student</h2>
    <form method="POST" action="<?php echo e(route('students.update', $student->id)); ?>">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <input type="text" name="name" class="form-control mb-2" value="<?php echo e($student->name); ?>" required>
        <input type="email" name="email" class="form-control mb-2" value="<?php echo e($student->email); ?>" required>
        <input type="text" name="phone" class="form-control mb-2" value="<?php echo e($student->phone); ?>" required>
        <input type="date" name="dob" class="form-control mb-2" value="<?php echo e($student->dob); ?>" required>
        <button type="submit" class="btn btn-success">Update Student</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\student management\resources\views/students/edit.blade.php ENDPATH**/ ?>