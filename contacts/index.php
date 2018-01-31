<?php
include_once '../header.php';
?>
<title>Контакты - "Дача на Ладоге"</title>


				<div class="line-row visible-xs"></div>
			</header>
			<div role="main" class="main">
													<section class="page-top COLOR">
						<div class="row">
							<div class="maxwidth-theme">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<ul class="breadcrumb"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../" title="<?= $json->contacts->mainLink[0] ?>" itemprop="url"><span itemprop="title"><?= $json->contacts->mainLink[0] ?></span></a></li><li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"><?= $json->contacts->mainLink[1] ?></span></li></ul>										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h1><?= $json->contacts->mainText ?></h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
								<div class="container">
											<div class="row">
							<div class="maxwidth-theme">
																	<div class="col-md-12 col-sm-12 col-xs-12 content-md">
																		<div class="row contacts" itemscope itemtype="http://schema.org/Organization">
	<div class="col-md-12">
		<div class="row contacts">
			<div class="col-md-5"> 
				<div itemprop="description"><p>

                    <?php
                        foreach ($json->contacts->text as $item) {
                            echo '<p>'.$item.'</p>';
                        }
                    ?>

                </div>
			</div>
			<div class="col-md-7">
				<table cellpadding="0" cellspasing="0"> 
					<tbody> 
						<tr>
							<td align="left" valign="top"><i class="fa colored fa-map-marker"></i></td><td align="left" valign="top"><span class="dark_table"><?= $json->contacts->address->mainText ?></span>
								<br />
								<span itemprop="address"><?= $json->contacts->address->textaddress ?></span>
							</td>
							<td align="left" valign="top"><i class="fa colored fa-phone"></i></td><td align="left" valign="top"> <span class="dark_table"><?= $json->contacts->phone->mainText ?></span>
								<br />
								<span itemprop="telephone">
                                    <?php
                                        /*foreach ($phone_site as $item) {
                                            Country::getPhoneInSite($item['tel'], '<br>');
                                        }*/
                                    ?>
                                </span>
							</td>
						</tr>
						<tr>
						</tr>
						<tr>
							<td align="left" valign="top"><i class="fa colored fa-envelope"></i></td><td align="left" valign="top"> <span class="dark_table"><?= $json->contacts->email->mainText ?></span>
								<br />
								<span itemprop="email"><a href="mailto:<?= $json->contacts->email->textaddress ?>"><?= $json->contacts->email->textaddress ?></a></span>
							</td>
							<td align="left" valign="top"><i class="fa colored fa-clock-o"></i></td><td align="left" valign="top"> <span class="dark_table"><?= $json->contacts->modeWork->mainText ?></span>
								<br />       <?= $json->contacts->modeWork->time ?>							</td>
						</tr>
						<tr>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="tabs contacts_tabs">
	<ul class="nav nav-tabs">
		<li class="active"><a href="index.php#contacts_map" data-toggle="tab"><?= $json->contacts->tabMap->one ?></a></li>
		<li><a href="index.php#contacts_schema" data-toggle="tab"><?= $json->contacts->tabMap->two ?></a></li>
        <li><a href="index.php#contacts_train" data-toggle="tab">Расписание поездов</a></li>
	</ul>
</div>


		</div>	</div></div>

<div class="tab-content contacts_tab_content">
	<div class="tab-pane active" id="contacts_map">
		<div class="map_block">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8e54b1683532cc9fd27a9a82389704541cd8e0ba74503f8b1ce388386a8fd61f&amp;width=100%25&amp;height=500&amp;lang=en_RU&amp;scroll=true"></script>
		</div>
	</div>
	<div class="tab-pane" id="contacts_schema">
		<div class="row">
			<div class="maxwidth-theme">
				<div class="col-md-12">
                    <div class="et_pb_text et_pb_bg_layout_light et_pb_text_align_left polosa-text">
                        <h3>Как до нас добраться</h3>
                        <p><strong>1. Из Москвы. </strong><br>
                            — на поезде Москва — С-Петербург. В городе С-Петербург вам необходимо совершить пересадку.<br>
                        </p>
                        <p><strong>2. Из С-Петербурга.</strong><br>
                            — на поезде С-Петербург — Сортавала (до ст. Лахденпо́хья), далее трансфер (13 км).<br>
                            — на автомобиле С-Петербург - Лумиваара по трассе А-121. Расстояние от Мега Парнас до поселка Лумиваара составляет 190 км.<br>
                            — маршрутное такси от ст.метро «Озерки», до поселка Лахденпо́хья , далее трансфер (13 км.)</p>
                    </div>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Москва - Дача на Ладоге </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Санкт-Петербург - Дача на Ладоге </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                             <iframe src="https://yandex.ru/map-widget/v1/-/CBeaUHUVdC?lang=en_RU" width="100%" height="500"  frameborder="0"></iframe>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <iframe src="https://yandex.ru/map-widget/v1/-/CBeaU2Rq1C?lang=en_RU" width="100%" height="500" lang="en_RU" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div class="tab-pane" id="contacts_train">
        <div class="row">
            <div class="maxwidth-theme">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item active">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false">Москва - Санкт-Петребург</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Санкт-Петербург — Сортавала</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane active" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                            <iframe frameborder="0" style="-moz-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); overflow: hidden; border: 0; width: 100%; height: 350px;" src="https://rasp.yandex.ru/informers/search/?fromId=c213&amp;toId=c2&amp;size=5&amp;color=1&amp;lang=en_RU"></iframe>
                        </div>
                        <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
                            <iframe frameborder="0" style="-moz-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); overflow: hidden; border: 0; width: 100%; height: 350px;" src="https://rasp.yandex.ru/informers/search/?fromId=c2&amp;toId=c10937&amp;size=5&amp;color=1&amp;lang=en_RU"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="color_block">
	<div class="row">
		<div class="maxwidth-theme">
			<div class="col-md-12">
				<div class="block front">
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<div class="front-text1">
								<h2>Остались вопросы?</h2>							</div>
						</div>
						<div class="col-md-7 col-sm-6">
							<div class="front-text2">
								Подробно расскажем о базе отдыха,&nbsp;услугах, ценах&nbsp;и подготовим индивидуальное предложение!&nbsp;<br>							</div>
						</div>
						<div class="col-md-2 col-sm-3">
							<div class="front-text3">
								<span class="btn btn-default white_br white btn-lg" id="askQuestion" services="">Задать вопрос</span>							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
	
																																</div>																							</div>											</div>		</div>
<?php
include_once '../footer.php';
?>