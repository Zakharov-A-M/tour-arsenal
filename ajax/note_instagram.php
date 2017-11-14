<?php

?>

<div class="instagram clearfix">
	<div class="container">
				<div class="items row">
			<div class="item user">
				<div class="body2">
					<div class="title"><h4>Мы в Instagram</h4></div>
					<div class="description">Отдых в экологически чистом месте, на берегу Лесного озера — это то, о чём мечтает любой горожанин!</div>
					<div class="link"><a href="https://www.instagram.com/karelia.tour.arsenal/" target="_blank">karelia.tour.arsenal</a></div>
				</div>
			</div>
							<div class="item">
					<div class="image"><a href="https://www.instagram.com/p/BbMrXr7AF21/" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/23164456_1335350559925182_7557956480230490112_n.jpg" alt="" title="" /></a></div>
				</div>
															<div class="item">
					<div class="image"><a href="https://www.instagram.com/p/BbMmELFgVL0/" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/23279701_391092241320721_1732270725496045568_n.jpg" alt="Чудо-день" title="Чудо-день" /></a></div>
				</div>
															<div class="item">
					<div class="image"><a href="https://www.instagram.com/p/BbMl7aaAfIC/" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/23279774_299190320600107_4408083415883055104_n.jpg" alt="7 ноября" title="7 ноября" /></a></div>
				</div>
															<div class="item">
					<div class="image"><a href="https://www.instagram.com/p/BbCSvGFAlnj/" target="_blank"><img src="https://scontent.cdninstagram.com/t51.2885-15/s320x320/e35/22858011_1595607443811508_372435232919388160_n.jpg" alt="Поехали😁" title="Поехали😁" /></a></div>
				</div>
						</div>
	</div>
</div>
<script>
$(document).ready(function () {
    $('.instagram .item').sliceHeight();
    setTimeout (function () {
        $(window).resize();
    }, 100);
});
</script>
<style>
#instagram{padding:0 15px;}
#instagram .instagram{display:block;padding:60px 0;border-top:1px solid #f5f5f5;}
#instagram .instagram .item{float:left;width:20%;padding:0;position:relative;text-align:center;overflow: hidden;}
#instagram .instagram .item.user{background:#f2f2f2;text-align:left;}
#instagram .instagram .item.user .body2{padding:27px 30px;font-size:13px;line-height:18px;color:#333333;}
#instagram .instagram .item.user .image{margin:0 auto 12px;width:36px;height:36px;background:url(/bitrix/templates/aspro-resort/images/instagram.png) 0 0 no-repeat;}
#instagram .instagram .item.user .name{margin:0 0 17px;font-size:20px;color:#FFF;}
#instagram .instagram .item.user .button a{border-color:#557fa2;}
#instagram .instagram .item.user .link{margin:8px 0 0;font-size:16px;font-weight:bold;line-height:1.1;}
#instagram .instagram .item .image img{max-width:100%;max-height:100%;}

@media (max-width: 1150px) {
    #instagram .instagram .item{width:25%;}
}
	@media (max-width: 991px) {
    #instagram .instagram .item{width:33.33333%;}
}
	@media (max-width: 767px) {
    #instagram .instagram .item{width:50%;}
}
	@media (max-width: 530px) {
    #instagram .instagram .item{width:100%;}
}
</style>