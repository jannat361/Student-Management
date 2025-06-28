

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Add New Student</h2>
    <form method="POST" action="<?php echo e(route('students.store')); ?>">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
        <input type="text" name="phone" class="form-control mb-2" placeholder="Phone" required>
        <input type="date" name="dob" class="form-control mb-2" required> 
        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\student management\resources\views/students/create.blade.php ENDPATH**/ ?>