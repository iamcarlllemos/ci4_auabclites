

<div class="group-content">
    <div id="news">
        <div class="container py-5">
            <div class="section-title" data-aos="fade-up">
                <div class="section-main">
                    <h1>ALL CAPSTONE RESEARCH</h1>
                </div>
            </div>
            <div class="row my-5">
                <?php 
                    if(!empty($data['site_research'])) {
                        $total_page = ceil($data['set']['total_pages']);
                        $current_page = $data['set']['current_page'] ?? 1;
                        echo '
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="'.base_url('/home').'" class="text-link">Home</a></li>
                                <li class="breadcrumb-item"><a href="'.base_url('/bulletin').'" class="text-link">Castone Research</a></li>
                                <li class="breadcrumb-item active">Page '.$current_page.'</a></li>
                            </ol>
                        </nav>
                        ';
                        foreach($data['site_research'] as $key => $value) {
                            echo '
                            <div class="col-12 col-md-4 col-xl-3 mb-2" data-aos="fade-up">
                                <a href="'.base_url('/research/view/'.$value->id).'" class="text-link">
                                    <div class="card card-design-2">
                                        <div class="card-image">
                                            <img src="'.base_url('/assets/home/images/research/'.$value->image.'').'" alt="research">
                                        </div>
                                        <div class="card-body">
                                            <div class="card-date">
                                                <small>'.format_timestamp_to_date($value->date_updated).'</small>
                                            </div>
                                            <div class="card-title text-clamp clamp-1">
                                                <h5>'.ucwords($value->title).'</h5>
                                            </div>
                                            <div class="ins">
                                                <small>(Click to view)</small>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            ';
                        }
                        
                        if($total_page > 1) {
                            if($current_page == 1) {
                                echo '
                                <div class="action d-flex gap-3 justify-content-center mt-5">
                                    <a href="'.base_url('/research/page/'.($current_page + 1)).'" class="btn-custom btn-custom-outline text-link d-flex align-items-center gap-1">Next <i class="bx bxs-chevrons-right" style="margin-top: 2px"></i></a>
                                </div>
                                ';
                            } else if($current_page == $total_page) {
                                echo '
                                <div class="action d-flex gap-3 justify-content-center mt-5">
                                    <a href="'.base_url('/research/page/'.($current_page - 1)).'" class="btn-custom btn-custom-outline text-link d-flex align-items-center gap-1"><i class="bx bxs-chevrons-left" style="margin-top: 2px"></i>Prev</a>
                                </div>
                                ';
                            } else {
                                echo '
                                <div class="action d-flex gap-3 justify-content-center mt-5">
                                    <a href="'.base_url('/research/page/'.($current_page - 1)).'" class="btn-custom btn-custom-outline text-link d-flex align-items-center gap-1"><i class="bx bxs-chevrons-left" style="margin-top: 2px"></i>Prev</a>
                                    <a href="'.base_url('/research/page/'.($current_page + 1)).'" class="btn-custom btn-custom-outline text-link d-flex align-items-center gap-1">Next <i class="bx bxs-chevrons-right" style="margin-top: 2px"></i></a>
                                </div>
                                ';
                            }
                        }
                       
                    } else {
                        echo '
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="'.base_url('/home').'" class="text-link">Home</a></li>
                                <li class="breadcrumb-item"><a href="'.base_url('/research/page/1').'" class="text-link">Capstone Research</a></li>
                                <li class="breadcrumb-item active">404 Not Found</a></li>
                            </ol>
                        </nav>
                        <div class="col-12">
                            <div class="bulletin-info mt-4">
                                <div class="bulletin-date">
                                    As of Now  • '.date('F d, Y').'
                                </div>
                                <div class="bulletin-title">
                                    No Capstone Research Found
                                </div>
                                <div class="bulletin-posted-by">
                                    Posted by: System
                                </div>
                                <hr>
                                <div class="bulletin-content">
                                    Why Am I seeing this?
                                    <ul class="mt-3">
                                        <li>The page you&apos;re trying to access is not yet updated.</li>
                                        <li>The page you&apos;re trying to access is invalid</li>
                                        <li>The page you&apos;re trying to access doesn&apos;t exist</li>
                                        <li>The page you&apos;re trying to access is temporarily unavailable</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                ?>
            </div>
        </div>
    </div>