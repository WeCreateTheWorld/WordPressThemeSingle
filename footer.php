    <footer class="site-footer">
        <?php do_action('puma_credit');?>
    </footer>
</div>
<!--<div class="back-to-top u-hide" onclick="backToTop();"><svg class="icon" viewBox="0 0 1024 1024" width="38" height="38"><path d="M967.111111 512A455.111111 455.111111 0 1 0 56.888889 512a455.111111 455.111111 0 0 0 910.222222 0zM170.666667 512c0-188.245333 153.088-341.333333 341.333333-341.333333s341.333333 153.088 341.333333 341.333333-153.088 341.333333-341.333333 341.333333-341.333333-153.088-341.333333-341.333333z" fill="" p-id="2044"></path><path d="M568.775111 683.235556V476.558222l73.557333 74.922667c22.300444 22.072889 58.311111 22.072889 80.611556 0s22.243556-57.799111 0-79.815111l-168.789333-170.666667A57.287111 57.287111 0 0 0 513.820444 284.444444l-1.934222 0.056889C511.260444 284.558222 510.577778 284.444444 509.952 284.444444c-15.132444 0-29.639111 5.973333-40.334222 16.554667l-168.789334 170.666667c-22.243556 22.072889-22.243556 57.799111 0 79.815111s58.311111 22.072889 80.611556 0l73.614222-74.922667v206.677334c0 31.118222 25.201778 56.32 56.32 56.32h1.024a56.32 56.32 0 0 0 56.32-56.32z"></path></svg></div>-->

<div class="copyRight">
<div>Copyright © 2020 - <?php echo puma_get_site_created_year();?>. y.Han. All rights reserved.</div>
<div>站长统计 - 当前在线[<?php echo show_online_count(); ?>]人 </div>
<a href="https://beian.miit.gov.cn">蜀ICP备号</a>
<div>加载时间: <?php timer_stop(1); ?> s</div>
</div><br/>
<div class="back-to-top u-hide" onclick="backToTop();"></div>
<?php // You can add your analystic code to the following hide tag and won't display.?>
<div class="u-hide"></div>
<?php wp_footer();?>






</body>
</html>