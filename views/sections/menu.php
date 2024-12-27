<section class="menu-section section-padding" id="section_3">
    <div class="container">
        <div class="row">
            <?php foreach ($categories as $index => $category): ?>
                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <div class="menu-block-wrap">
                        <div class="text-center mb-4 pb-lg-2">
                            <em class="text-white"><?= $category->pre; ?></em>
                            <h4 class="text-white"><?= $category->title; ?></h4>
                        </div>
                        <?php foreach ($category->subcategories as $index => $subcategory): ?>
                            <div class="mb-4">
                                <em class="text-white"><?= $subcategory->pre; ?></em>
                                <h4 class="text-white"><?= $subcategory->title; ?></h4>
                            </div>
                            <?php foreach ($subcategory->products as $index => $product): ?>
                                <div class="menu-block my-4">
                                    <div class="d-flex">
                                        <h6><?= $product->name; ?>
                                            <?php if ($product->tag): ?>
                                                <span class="badge ms-3"><?= $product->tag; ?></span>
                                            <?php endif; ?>
                                        </h6>
                                        <span class="underline"></span>
                                        <?php if ($product->discount): ?>
                                            <strong class="text-white ms-auto">€
                                                <del><?= number_format($product->price / 100, 2, ',', ' '); ?></del>
                                            </strong>
                                            <strong class="ms-2">€<?= number_format($product->discount / 100, 2, ',', ' '); ?></strong>
                                        <?php else: ?>
                                            <strong class="ms-auto">€<?= number_format($product->price / 100, 2, ',', ' '); ?></strong>
                                        <?php endif; ?>
                                    </div>

                                    <div class="border-top mt-2 pt-2">
                                        <small><?= $product->description; ?></small>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>