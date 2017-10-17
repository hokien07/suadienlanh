<aside class="left left-content col-lg-3 col-lg-pull-9">
    <aside class="aside-item sidebar-category blog-category">
        <div class="aside-title">
            <h2 class="title-head"><span>Danh mục bài viết</span></h2>
        </div>
        <div class="aside-content">
            <?php hk_nav_sidebar(); ?>
        </div>
    </aside>
    <div class="aside-item aside-tags">
        <div>
            <div class="aside-title">
                <h2 class="title-head"><span>Thẻ tags</span></h2>
            </div>
            <div class="aside-content list-tags">
                <?php
                //get thẻ tags
                    hk_get_tags();
                ?>
            </div>
        </div>
    </div>
    <div class="aside-item">
        <div >
            <div class="aside-title">
                <h2 class="title-head"><a href="">Bài viết liên quan</a></h2>
            </div>
            <div class="aside-content">
                <?php hk_bai_viet_lien_quan(); ?>

            </div>
        </div>
    </div>
</aside>