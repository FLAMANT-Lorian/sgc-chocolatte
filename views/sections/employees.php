<section class="barista-section section-padding section-bg" id="barista-team">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                <em class="text-white">Creative Baristas</em>

                <h2 class="text-white">Meet People</h2>
            </div>

            <?php foreach($employees as $index => $employee): ?>
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <div class="team-block-wrap">
                        <div class="team-block-info d-flex flex-column">
                            <div class="d-flex mt-auto mb-3">
                                <h4 class="text-white mb-0"><?= $employee->name; ?></h4>

                                <p class="badge ms-4"><em><?= $employee->job; ?></em></p>
                            </div>

                            <p class="text-white mb-0"><?= $employee->description; ?></p>
                        </div>

                        <div class="team-block-image-wrap">
                            <img src="<?= $employee->img; ?>" class="team-block-image img-fluid" alt="Image de <?= $employee->name; ?>">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>