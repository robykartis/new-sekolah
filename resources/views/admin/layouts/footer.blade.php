<footer id="page-footer" class="bg-body-light">
    <div class="content py-3">
        <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="javascript:void(0)"
                    target="_blank">r</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                <a class="fw-semibold" href="javascript:void(0)"
                    target="_blank">{{ App\Models\Setting::first()->name }}</a>
                &copy; <?php
                $tgl = date('Y');
                echo $tgl;
                ?>
            </div>
        </div>
    </div>
</footer>
