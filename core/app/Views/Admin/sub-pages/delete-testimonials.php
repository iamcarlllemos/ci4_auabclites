<div class="dashboard-wrapper my-md-0">
    <?= $this->include('admin/templates/sidebar') ?>
    <div class="content">
        <?= $this->include('admin/templates/navbar') ?>
        <div class="inner-content mx-3 pb-5">
            <div class="container">
                <hr class="mt-2">   
                <section class="mt-">
                    <div class="mt-5">
                        <?php 
                            $flashdata = session()->getFlashData('flashdata');
                            readFlashData($flashdata);
                        ?>
                        <div class="actions mb-4 d-flex justify-content-end">
                            <a href="<?= base_url('/admin/manage/page/testimonials') ?>" class="btn btn-primary"><i class='bx bx-arrow-back' ></i> Go Back</a>
                        </div>
                        <form action="<?= base_url('/admin/manage/page/testimonials/delete') ?>" method="post">
                            <div class="row">
                                <div class="col-12 col-md-12 mb-3">
                                    <div class="card delete shadow">
                                        <div class="card-header p-4 border-0">
                                            <h5 class="card-title m-0">Are you sure to delete this testimonial?</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="user-content">
                                                <div class="avatar-image">
                                                    <img src="<?= base_url('/assets/home/images/testimonials/'.$data["get_testimonial"][0]->image.'') ?>" alt="" srcset="">
                                                </div>
                                                <div class="w-100">
                                                    <input type="hidden" name="id" value="<?= $data["get_testimonial"][0]->id ?>">
                                                    <ul class="list-unstyled">
                                                        <?php
                                                        
                                                            if(empty($data["get_testimonial"])) {

                                                            } else {
                                                                foreach($data["get_testimonial"] as $value) {
                                                                    echo '<li class="mb-1">FULL NAME: <span>'.strtoupper($value->first_name .' '. $value->last_name).'</span></li>';
                                                                    echo '<li class="mb-1">TESTIMONIAL: <span>'.($value->testimonial).'</span></li>';
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                    <p class="alert alert-sm alert-danger mt-4">
                                                        Note: This action cannot be reverted
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="action d-flex justify-content-end mt-3 w-100">
                                <button class="btn btn-primary py-3 px-4">Proceed <i class='bx bx-right-arrow-alt bx-tada' ></i></button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>