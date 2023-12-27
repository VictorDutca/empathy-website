<?php $faq_container= get_field('faq_container'); ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 text-center">
          ciao 1
      </div>
      <div class="col-12 col-md-6">
        ciao 2
        </div>
    </div>
  </div>
</section>
<section class="faq">
  <div class="container">
  <div class="row">
    <?php foreach ($faq_container as $key => $item): ?>
        <div class="accordion-item col-12 col-md-6 my-5">
            <h5 class="accordion-header" id="item-heading-<?php echo $key ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#item-collapse-<?php echo $key ?>" aria-expanded="false"
                    aria-controls="item-collapse-<?php echo $key ?>">
                    <?php echo $item['title'] ?>
                </button>
            </h5>
            <div id="item-collapse-<?php echo $key ?>" class="accordion-collapse collapse"
                aria-labelledby="item-heading-<?php echo $key ?>" data-bs-parent="#item-heading-<?php echo $key ?>">
                <div class="accordion-body">
                      <?php echo $item['description'] ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
  </div>
  </div>
</section>
