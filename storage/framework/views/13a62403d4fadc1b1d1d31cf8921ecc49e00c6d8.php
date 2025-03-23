
<?php $__env->startSection('content'); ?>
<?php
    $baseURL = getBaseURL();
    $setting = getSettingsInfo();
    $base_color = '#6ab04c';
    if (isset($setting->base_color) && $setting->base_color) {
        $base_color = $setting->base_color;
    }
    ?>
    <section class="main-content-wrapper">
        <?php echo $__env->make('utilities.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <section class="content-header">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="top-left-header"><?php echo e(isset($title) && $title ? $title : ''); ?></h2>
                    <input type="hidden" class="datatable_name" data-title="<?php echo e(isset($title) && $title ? $title : ''); ?>"
                        data-id_name="datatable">
                </div>     
                <div class="col-md-offset-4 col-md-2">

                </div>           
            </div>
        </section>


        <div class="box-wrapper">

            <div class="table-box">
                <!-- /.box-header -->
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead>
                            <tr>
                            <tr>
                                <th class="w-5 text-start"><?php echo app('translator')->get('index.sn'); ?></th>
                                <th class="w-20"><?php echo app('translator')->get('index.month'); ?> - <?php echo app('translator')->get('index.year'); ?></th>
                                <th class="w-20"><?php echo app('translator')->get('index.total'); ?></th>
                                <th class="width_10_p"><?php echo app('translator')->get('index.account'); ?></th>
                                <th class="width_10_p"><?php echo app('translator')->get('index.added_by'); ?></th>
                                <th class="width_3_p ir_txt_center"><?php echo app('translator')->get('index.actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>

        </div>

    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rahul\Downloads\tenet_project\iproduction_null\resources\views/pages/production_module/index.blade.php ENDPATH**/ ?>