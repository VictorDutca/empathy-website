<?php $welcome= get_field('welcome'); ?>
    <main class="bg-lilly-500">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 my-5">
                        <h1 class="p-oggRegular c-grey-900">
                        <?php echo $welcome['title']?>
                        </h1>
                        <p class="p-hn c-grey-900 my-3">
                        <?php echo $welcome['subtitle']?>
                        </p>
                        <P class="p-hn c-grey-900">
                        <?php echo $welcome['description']?>
                        </P>
                        <a href="<?php echo $welcome['cta']['aboutus']?>" class="my-btn-b bg-grey-900 p-hn c-grey-50 mt-4 py-1 px-4 text-decoration-none"><?php echo $welcome['cta']['labelcta']?></a>
                    </div>
                    
                    <div class="col-12 col-md-6">
                        <div class="circle-container">
                            <div class="circle bg-mandarino-500 d-flex flex-column justify-content-center align-items-center">
                                <div>
                                    <p class="fs-2 p-oggRegular c-grey-50 text-center">
                                        Say wwwaaass
                                        <br>
                                        and hello to immediate, accessible, 
                                        <br>
                                        and personalized supportasdasdasdasd.
                                    </p>
                                </div>
                                <div class="">
                                    <button class="my-btn-w bg-grey-50 p-hn c-grey-900 my-4 py-1 px-4">VIEW SERVICES</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col bg-grey-50 my-5">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <p class="fs-1 p-oggMedium c-mandarino-600 text-center mt-5">Join us on this transformative journey.</p>
                                <p class="p-hn c-mandarino-600 text-center mb-5">
                                    With your contribution, we can expand our platform, reach more users, and continue innovating to meet the evolving needs of our community.
                                    <br>
                                    Support Empathy today and help us revolutionize mental health support for individuals everywhere. Together we can empower minds and create a brighter, healthier future.                
                                </p>
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>