<section class="reviews-section section-padding section-bg" id="section_4">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                <em class="text-white">Reviews by Customers</em>

                <h2 class="text-white">Testimonials</h2>
            </div>

            <div class="timeline">
                <?php foreach ($reviews as $index => $review): ?>
                    <div class="timeline-container timeline-container-<?= ($index % 2 === 0) ? 'left' : 'right'; ?>">
                        <div class="timeline-content">
                            <div class="reviews-block">
                                <div class="reviews-block-image-wrap d-flex align-items-center"
                                     style="background-image: url(<?= $review->cover_img; ?>)">
                                    <img src="<?= $review->avatar_img; ?>"
                                         class="reviews-block-image img-fluid"
                                         alt="Photo de <?= $review->customer; ?>">
                                    <div class="">
                                        <h6 class="text-white mb-0"><?= $review->customer; ?></h6>
                                        <em class="text-white"> Customers</em>
                                    </div>
                                </div>
                                <div class="reviews-block-info">
                                    <p><?= $review->content; ?></p>
                                    <div class="d-flex border-top pt-3 mt-4">
                                        <strong class="text-white"><?= number_format($review->rating / 10, 1, ",", " "); ?>
                                            <small class="ms-2">Rating</small>
                                        </strong>
                                        <div class="reviews-group ms-auto">
                                            <?php for ($i = 0; $i < 5; $i++): ?>
                                                <i class="bi-star<?= ($i < floor($review->rating / 10)) ? '-fill' : ''; ?>"></i>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>