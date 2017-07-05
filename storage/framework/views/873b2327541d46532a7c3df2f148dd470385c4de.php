<?php $__env->startSection('content'); ?>

<link href="<?php echo e(asset('css/general-541378b38b.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/bindMobile-2cd06feba4.css')); ?>" rel="stylesheet">
<link href="https://www.jimu.com/favicon.ico?1498812558728" rel="shortcut icon" type="image/x-icon">
<link href="<?php echo e(asset('css/index-ef3dfa649d.css')); ?>" rel="stylesheet">

<script src="<?php echo e(asset('js/mv.js')); ?>" async="" type="text/javascript"></script>
<script src="<?php echo e(asset('js/mba.js')); ?>" async="" type="text/javascript"></script>
<script src="<?php echo e(asset('js/v.htm')); ?>" charset="utf-8"></script>
<script src="<?php echo e(asset('js/header-init-8dc16d38ce.js')); ?>"></script>
<div class="register-main">
    <h4>充值</h4>
    <hr>
    <form action="/cz/add" method='post'>
        <div class="row-fluid">
            <div class="control-group">
                <label class="control-label" for="oldLoginPass">名称</label>
                <div class="controls">
                    <input type="text" name='name'>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="newLoginPass">金额</label>
                <div class="controls">
                    <input type="text" name='price'>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="newLoginPass2">描述</label>

                <div class="controls">
                    <textarea name="desc" id="" cols="40" rows="2"></textarea>
                </div>
                <span class="help-block"><span class="field-validation-valid" data-valmsg-for="newLoginPass2" data-valmsg-replace="true"></span></span>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary span12" style="margin-left: 0">确认</button>
        </div>
    </form>
</div>

<script src="<?php echo e(asset('js/jquery-07fd0237c1.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/bootstrap-fb24c92ad4.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/jquery-640f2d52cc.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/eden-20ce50b66d.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/jquery-b23540f87a.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/jquery-0abadbaab5.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/jquery-db3fe95623.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/eden-e72ac904d3.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/font_hxuxey0tud81714i.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/font_2vki31oofhudte29.jsv')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/settings-88ea31cf32.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/init-fc412db349.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/hm.js')); ?>"></script>
<script src="<?php echo e(asset('js/hm_002.js')); ?>"></script>


<script src="<?php echo e(asset('js/dc.js')); ?>" async="" type="text/javascript"></script>
<script src="<?php echo e(asset('js/agt.js')); ?>" async="" type="text/javascript"></script>
<script src="<?php echo e(asset('js/conversion.js')); ?>" async="" type="text/javascript"></script>
<script src="<?php echo e(asset('js/mvl.js')); ?>" async="" type="text/javascript">


<?php $__env->stopSection(); ?>
<?php echo $__env->make('Home.title', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>