<?php $__env->startSection('breadcrumb-title', 'Orders'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
        <?php echo $__env->make("flashMessages", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">On Going Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="onGoingOrders" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">Description</th>
                                            <th class="sorting">Customer</th>
                                            <th class="sorting">Driver</th>
                                            <th class="sorting">Due Date</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <?php if($order->status == "drop"): ?>
                                        <tr role="row">
                                            <td><?php echo e($order->order_id); ?></td>
                                            <td><?php echo e($order->description); ?></td>
                                            <td><?php echo e($order->customer_name); ?></td>
                                            <td><?php echo e($order->driver_name); ?></td>
                                            <td><?php echo e($order->due_date); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('shop.order.changeStatus', [$order->id, "progress"])); ?>" class="btn btn-sm btn-primary">Change Status</a>
                                                <a href="<?php echo e(route('shop.order.viewSingle', $order->id)); ?>"><i class="fa fa-eye fa-2x" style="color: #0e2b57"></i></a>
                                            </td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr role="row">
                                            <td colspan="2">No record found!</td>
                                        </tr>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">In Progress Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="inProgressOrders" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                    <tr role="row">
                                        <th class="sorting_asc">ID</th>
                                        <th class="sorting">Description</th>
                                        <th class="sorting">Customer</th>
                                        <th class="sorting">Driver</th>
                                        <th class="sorting">Due Date</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php if($order->status == "progress"): ?>
                                            <tr role="row">
                                                <td><?php echo e($order->order_id); ?></td>
                                                <td><?php echo e($order->description); ?></td>
                                                <td><?php echo e($order->customer_name); ?></td>
                                                <td><?php echo e($order->driver_name); ?></td>
                                                <td><?php echo e($order->due_date); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('shop.order.changeStatus', [$order->id, "complete"])); ?>" class="btn btn-sm btn-primary">Change Status</a>
                                                    <a href="<?php echo e(route('shop.order.viewSingle', $order->id)); ?>"><i class="fa fa-eye fa-2x" style="color: #0e2b57"></i></a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr role="row">
                                            <td colspan="2">No record found!</td>
                                        </tr>
                                    <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Completed Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="completedOrders" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                    <tr role="row">
                                        <th class="sorting_asc">ID</th>
                                        <th class="sorting">Description</th>
                                        <th class="sorting">Customer</th>
                                        <th class="sorting">Driver</th>
                                        <th class="sorting">Due Date</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php if($order->status == "complete"): ?>
                                            <tr role="row">
                                                <td><?php echo e($order->order_id); ?></td>
                                                <td><?php echo e($order->description); ?></td>
                                                <td><?php echo e($order->customer_name); ?></td>
                                                <td><?php echo e($order->driver_name); ?></td>
                                                <td><?php echo e($order->due_date); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('shop.order.changeStatus', [$order->id, "deliver"])); ?>" class="btn btn-sm btn-primary">Change Status</a>
                                                    <a href="<?php echo e(route('shop.order.viewSingle', $order->id)); ?>"><i class="fa fa-eye fa-2x" style="color: #0e2b57"></i></a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr role="row">
                                            <td colspan="2">No record found!</td>
                                        </tr>
                                    <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Delivered Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="deliveredOrders" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                    <tr role="row">
                                        <th class="sorting_asc">ID</th>
                                        <th class="sorting">Description</th>
                                        <th class="sorting">Customer</th>
                                        <th class="sorting">Driver</th>
                                        <th class="sorting">Due Date</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php if($order->status == "deliver"): ?>
                                            <tr role="row">
                                                <td><?php echo e($order->order_id); ?></td>
                                                <td><?php echo e($order->description); ?></td>
                                                <td><?php echo e($order->customer_name); ?></td>
                                                <td><?php echo e($order->driver_name); ?></td>
                                                <td><?php echo e($order->due_date); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('shop.order.viewSingle', $order->id)); ?>"><i class="fa fa-eye fa-2x" style="color: #0e2b57"></i></a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr role="row">
                                            <td colspan="2">No record found!</td>
                                        </tr>
                                    <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Canceled Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="canceledOrders" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                    <tr role="row">
                                        <th class="sorting_asc">ID</th>
                                        <th class="sorting">Description</th>
                                        <th class="sorting">Customer</th>
                                        <th class="sorting">Driver</th>
                                        <th class="sorting">Due Date</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php if($order->status == "cancel"): ?>
                                            <tr role="row">
                                                <td><?php echo e($order->order_id); ?></td>
                                                <td><?php echo e($order->description); ?></td>
                                                <td><?php echo e($order->customer_name); ?></td>
                                                <td><?php echo e($order->driver_name); ?></td>
                                                <td><?php echo e($order->due_date); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('shop.order.viewSingle', $order->id)); ?>"><i class="fa fa-eye fa-2x" style="color: #0e2b57"></i></a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr role="row">
                                            <td colspan="2">No record found!</td>
                                        </tr>
                                    <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        $(document).ready(function() {
            $('#onGoingOrders').DataTable();
            $('#inProgressOrders').DataTable();
            $('#completedOrders').DataTable();
            $('#deliveredOrders').DataTable();
            $('#canceledOrders').DataTable();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.shop.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Sir Imran\MyFoodApps\resources\views/shop/order/viewAll.blade.php ENDPATH**/ ?>