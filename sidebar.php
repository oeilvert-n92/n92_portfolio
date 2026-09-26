<div class="top__sidebar-box">
    <?php if ( !is_home() && !is_front_page() ) : ?>
        <p class="top__main-title font-en"><a href="/">n92</a></p>
    <?php else: ?>
        <p class="top__main-title font-en">n92</p>
    <?php endif; ?>
        
    <?php if ( !is_home() && !is_front_page() ) : ?>
        <p class="top__sub-title font-en">NAO MURAKOSHI’s Portfolio</p>
    <?php else: ?>
        <h1 class="top__sub-title font-en">NAO MURAKOSHI’s Portfolio</h1>
    <?php endif; ?>

    <div class="top__job_box">
        <?php /* <p class="top__job font-en">
            Designer<br>
            Markup Engineer
        </p> */ ?>
        <a class="top__more-link font-en" href="/about/">Learn More</a>
    </div>

    <p class="top__category-title font-en">Skill Category</p>
    <ul class="top__skill-title">
        <?php
        $categories = get_categories();
        foreach($categories as $category):
        ?>
            <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
        <?php
        endforeach;
        ?>
    </ul>

    <div class="top__theme-box">
        <p class="top__category-title font-en">Change Theme</p>
        <div class="top__theme-area">
            <i class="fa-regular fa-sun"></i>
            <button class="top__button-switch" aria-label="テーマボタン">
                <input class="top__button-switch__input" id="js-switch-button" type="checkbox">
                <label class="top__button-switch__label" for="js-switch-button"></label>
            </button>
            <i class="fa-regular fa-moon"></i>
        </div>
    </div>

</div>