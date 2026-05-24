<?php
    include('includes/connection.php');
    $wpoet_sql = "SELECT * FROM `wpoet_tb` ORDER BY id";
    $wpoet_sql_result = $conn-> query($wpoet_sql);
    $wpoet_tasks = $wpoet_sql_result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WPOETS TASK</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="style.css">
<style>
    @media(max-width:991px) {
    <?php
        $count = 0;
        foreach ($wpoet_tasks as $wpoet_task){
            $count++;
    ?>
        #tab<?= $count; ?> .content-wrapper {
            background: url("img/<?= $wpoet_task['title']; ?>.jpg");
        }

    <?php
        }
    ?>
    }
</style>
</head>
<body>
<div class="container main-section">
    <div class="desktop-view col-11 mx-auto">
        <div class="row text-center  text-white">
            <h2>Delphain Logic in Action</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, debitis!</p>
            <div class=" row p-0 whl mx-auto">            
                <div class="col-lg-4 p-0 m-0 align-items-center row " style="background:#f6f6f6;">
                    <div class="side-tabs p-4">
                        <?php
                            $count = 0;

                            foreach ($wpoet_tasks as $wpoet_task){
                            $count++;
                            $active = ($count == 1) ? 'active' : '';
                        ?>  
                    
                        <button class="tab-btn d-flex  justify-content-between align-items-center <?= $active ?>" data-tab="tab<?= $wpoet_task['id']?>">
                            <span class="d-flex align-items-center">
                                <img class="h-75 me-4" src="img/<?= $wpoet_task['title']?>.svg" alt="DL-learning">
                                <?= $wpoet_task['title']?>
                            </span>
                            <span class="mobile-icon ">
                                <img class="icon-minus d-none" src="img/minus-01.svg" alt="minus">
                                <img class="icon-plus" src="img/plus-01.svg" alt="plus">
                            </span>
                        </button>
                    <?php 
                        }
                    ?>
                    </div>
                </div>
                <div class="col-lg-4 p-0 m-0 col-12 resbox" id="res" style="background:#63b4c9;">
                    <div class="align-items-center row h-100">
                        <div class="tab-pane-custom active h-100" id="tab1">
                            <div class="content-wrapper position-relative">
                                <div class="swiper designSlider">
                                    <div class="swiper-wrapper">
                                        <?php
                                            $subtitles = explode('^', $wpoet_task['subtitle']);
                                            $contents = explode('^', $wpoet_task['task_content']);
                                            foreach ($subtitles as $key => $subtitle) {
                                                $subtitle = trim($subtitle);
                                                $content = trim($contents[$key]);
                                        ?>
                                            <div class="swiper-slide">
                                                <div class="slider-content">
                                                    <p class="text-white px-3 d-inline-block" style="background:#5698aa;"><?= $subtitle ?></p>
                                                    <h3><?= $content ?></h3>
                                                    <a href="#" class="text-white text-decoration-none fw-bold">Learn More &#8594;</a>
                                                </div>
                                            </div>
                                        <?php 
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane-custom h-100" id="tab2">
                            <div class="content-wrapper position-relative">
                                <div class="swiper devSlider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="slider-content">
                                                <p class="text-white px-3 d-inline-block" style="background:#5698aa;">Web Development</p>
                                                <h3>Responsive websites using latest frontend and backend technologies.</h3>
                                                <a href="#" class="text-white text-decoration-none fw-bold">Learn More &#8594;</a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slider-content">
                                                <p class="text-white px-3 d-inline-block" style="background:#5698aa;">API Integration</p>
                                                <h3>Connect third-party platforms and automate workflows efficiently.</h3>
                                                <a href="#" class="text-white text-decoration-none fw-bold">Learn More &#8594;</a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slider-content">
                                                <p class="text-white px-3 d-inline-block" style="background:#5698aa;">Performance Optimization</p>
                                                <h3>Improve website speed and scalability for better performance.</h3>
                                                <a href="#" class="text-white text-decoration-none fw-bold">Learn More &#8594;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane-custom h-100" id="tab3">
                            <div class="content-wrapper position-relative">
                                <div class="swiper marketSlider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="slider-content">
                                                <p class="text-white px-3 d-inline-block" style="background:#5698aa;">Digital Marketing</p>
                                                <h3>Reach more audience through targeted marketing strategies.</h3>
                                                <a href="#" class="text-white text-decoration-none fw-bold">Learn More &#8594;</a>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="slider-content">
                                                <p class="text-white px-3 d-inline-block" style="background:#5698aa;">Social Media Growth</p>
                                                <h3>Build strong online visibility and improve brand awareness.</h3>
                                                <a href="#" class="text-white text-decoration-none fw-bold">Learn More &#8594;</a>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="slider-content">
                                                <p class="text-white px-3 d-inline-block" style="background:#5698aa;">Lead Generation</p>
                                                <h3>Generate quality leads using data-driven campaigns and funnels.</h3>
                                                <a href="#" class="text-white text-decoration-none fw-bold">Learn More &#8594;</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0 m-0 h-100" id="imgsld">
                    <?php
                        $count = 0;
                        foreach ($wpoet_tasks as $wpoet_task){
                        $count++;
                        $active = ($count == 1) ? 'active' : '';
                    ?>
                    <div class="tab-pane-custom <?= $active ?> h-100" id="img-tab<?= $wpoet_task['id']; ?>">
                        <div class="image-box h-100">
                            <img src="img/<?= $wpoet_task['title']; ?>.jpg">
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>