http://dev.ballmarket.ru/bitrix/admin/#authorize
imironov
9juYC*g!r3Xz


<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("show_main_popular_cat", "Y");
$APPLICATION->SetPageProperty("description", "Интернет-портал BallMarket.ru");
$APPLICATION->SetTitle("Интернет-портал BallMarket.ru");
$APPLICATION->SetPageProperty("title", "Интернет-портал BallMarket.ru");

$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");

$landing = ($USER->isAuthorized() && ($USER->isAdmin() && $_GET["auth"] != "N")) ? true : false;

/*
if($_REQUEST["AUTH_FORM"]=="Y" && $_REQUEST["TYPE"]=="AUTH"){
    $APPLICATION->RestartBuffer();
    $arAuthResult = $GLOBALS["USER"]->Login($_REQUEST["USER_LOGIN"], $_REQUEST["USER_PASSWORD"], $_REQUEST["USER_REMEMBER"]);
    //print_r($arAuthResult);
    echo "success";
    die();
}

if($_POST["AUTH_FORM"] == "Y" && $_POST["TYPE"] == "AUTH"){
    $APPLICATION->RestartBuffer();
    $arAuthResult = $GLOBALS["USER"]->Login($_POST["USER_LOGIN"], $_POST["USER_PASSWORD"], $_POST["USER_REMEMBER"]);

    echo "success";
    die();
}
*/
?>

<? if($landing): ?>
	<section class="main-slider ">
		<div class="main-slider__box container swiper-container">
			<div class="main-slider__wrapper swiper-wrapper">
				<div class="main-slider-slide swiper-slide"><img src="https://sportsberry.ru/upload/iblock/8f9/sj7lxxyblpu6yw6lky8az5wri6qfpe36.jpg" alt="#"></div>
				<div class="main-slider-slide swiper-slide"><img src="https://sportsberry.ru/upload/iblock/0cc/r2o3ptfcqm114p4930fsz2i5lpxt9z0s.jpg" alt="#"></div>
				<div class="main-slider-slide swiper-slide"><img src="https://sportsberry.ru/upload/iblock/12a/c15st4qb8h2nje54wba9320pco14cbit.jpg" alt="#"></div>
				<div class="main-slider-slide swiper-slide"><img src="https://sportsberry.ru/upload/iblock/ea6/tvxryfwpc7rmkj42d99a673upn4ymcqc.jpg" alt="#"></div>
			</div>
			<div class="main-slider-navigation">
				<div class="main-slider-navigation__prev"></div>
				<div class="main-slider-navigation__next"></div>
			</div>
		</div>
	</section>

	<section class="hits-slider container">
		<h2>Горячие <span>пирожки</span> предложения</h2>
		<div class="hits-slider__inner">
			<div class="hits-slider__box swiper-container">
				<div class="hits-slider__wrapper swiper-wrapper">


					<div class="item-product swiper-slide">
						<a href="/">
							<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/slider-item/item1.png" alt="#"><span>-30%</span></div>
							<div class="item-product-articale"><span>Арт.</span> F321045</div>
							<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
							<div class="item-product-price-box"><span class="price-old ">2 400</span><strong class="border">1 053 Р</strong></div>
							<div class="item-product-stock">Доступно на складе: <strong>1889</strong></div>
						</a>
						<div class="item-product-sel">
							<input type="text" name="#" value="1">
							<div class="btn item-product-sel-basket "></div><a class="item-product-sel-favorites " href="#"></a><a class="item-product-sel-bar " href="#"></a>
						</div>
					</div>

					<div class="item-product swiper-slide">
						<a href="/">
							<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/slider-item/item2.png" alt="#"><span>-30%</span></div>
							<div class="item-product-articale"><span>Арт.</span> F321045</div>
							<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
							<div class="item-product-price-box"><span class="price-old price-old--red">2 400</span><strong>1 053 Р</strong></div>
							<div class="item-product-stock">Доступно на складе: <strong>1889</strong></div>
						</a>
						<div class="item-product-sel">
							<input type="text" name="#" value="1">
							<div class="btn item-product-sel-basket orange"></div><a class="item-product-sel-favorites orange" href="#"></a><a class="item-product-sel-bar orange" href="#"></a>
						</div>
					</div>

					<div class="item-product swiper-slide">
						<a href="">
							<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/slider-item/item3.png" alt="#"><span>-30%</span></div>
							<div class="item-product-articale"><span>Арт.</span> F321045</div>
							<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
							<div class="item-product-price-box"><span class="price-old ">2 400</span><strong class="border">1 053 Р</strong></div>
							<div class="item-product-stock">Доступно на складе: <strong>1889</strong></div>
						</a>
						<div class="item-product-sel">
							<input type="text" name="#" value="1">
							<div class="btn item-product-sel-basket "></div><a class="item-product-sel-favorites " href="#"></a><a class="item-product-sel-bar " href="#"></a>
						</div>
					</div>

					<div class="item-product swiper-slide">
						<a href="">
							<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/slider-item/item3.png" alt="#"><span>-30%</span></div>
							<div class="item-product-articale"><span>Арт.</span> F321045</div>
							<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
							<div class="item-product-price-box"><span class="price-old ">2 400</span><strong class="border">1 053 Р</strong></div>
							<div class="item-product-stock">Доступно на складе: <strong>1889</strong></div>
						</a>
						<div class="item-product-sel">
							<input type="text" name="#" value="1">
							<div class="btn item-product-sel-basket "></div><a class="item-product-sel-favorites " href="#"></a><a class="item-product-sel-bar " href="#"></a>
						</div>
					</div>

					<div class="item-product swiper-slide">
						<a href="">
							<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/slider-item/item3.png" alt="#"><span>-30%</span></div>
							<div class="item-product-articale"><span>Арт.</span> F321045</div>
							<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
							<div class="item-product-price-box"><span class="price-old ">2 400</span><strong class="border">1 053 Р</strong></div>
							<div class="item-product-stock">Доступно на складе: <strong>1889</strong></div>
						</a>
						<div class="item-product-sel">
							<input type="text" name="#" value="1">
							<div class="btn item-product-sel-basket "></div><a class="item-product-sel-favorites " href="#"></a><a class="item-product-sel-bar " href="#"></a>
						</div>
					</div>


				</div>
			</div>
			<div class="hits-slider-navigation">
				<div class="hits-slider-navigation__prev"></div>
				<div class="hits-slider-navigation__next"></div>
			</div>
		</div>
	</section>

	<section class="water-season container">
		<h2>Сезон открытой воды обявляем открытым!</h2>
		<div class="water-season__body">
			<div class="water-season-slider__box swiper-container">
				<div class="water-season__body-list swiper-wrapper">


					<a href = '/' class="item-product swiper-slide">
						<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/seazon/1.jpg" alt="#"></div>
						<div class="item-product-articale"><span>Арт.</span> F321045</div>
						<div class="item-product-text">Маска для плав. &quot;Salvas Domino Jr Mask&quot;, арт.CA105C1TBSTH, безопасн.стекло,Silflex, р. Junior, синий</div>
						<div class="item-product-price-box"><strong>1 053 Р</strong>
							<div class="item-product-price-box__sale"><span><strong>850 P</strong> Цена со скидкой</span></div>
						</div>
						<div class="item-product-stock"><span>Доступно на складе: <strong>1889</strong></span></div>
						<div class="item-product-cart">
							<input type="text" name="#" value="1">
							<button class="btn item-product-sel-cart">В корзину</button>
						</div>
					</a>

					<a href = '/' class="item-product swiper-slide">
						<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/seazon/2.jpg" alt="#"></div>
						<div class="item-product-articale"><span>Арт.</span> F321045</div>
						<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
						<div class="item-product-price-box"><strong>1 053 Р</strong>
							<div class="item-product-price-box__sale"><span><strong>850 P</strong> Цена со скидкой</span></div>
						</div>
						<div class="item-product-stock"><span>Доступно на складе: <strong>1889</strong></span></div>
						<div class="item-product-cart">
							<input type="text" name="#" value="1">
							<button class="btn item-product-sel-cart">В корзину</button>
						</div>
					</a>

					<a href = '/' class="item-product swiper-slide">
						<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/seazon/3.jpg" alt="#"></div>
						<div class="item-product-articale"><span>Арт.</span> F321045</div>
						<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
						<div class="item-product-price-box"><strong>1 053 Р</strong>
							<div class="item-product-price-box__sale"><span><strong>850 P</strong> Цена со скидкой</span></div>
						</div>
						<div class="item-product-stock"><span>Доступно на складе: <strong>1889</strong></span></div>
						<div class="item-product-cart">
							<input type="text" name="#" value="1">
							<button class="btn item-product-sel-cart">В корзину</button>
						</div>
					</a>

					<a href = '/' class="item-product swiper-slide">
						<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/seazon/4.jpg" alt="#"></div>
						<div class="item-product-articale"><span>Арт.</span> F321045</div>
						<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
						<div class="item-product-price-box"><strong>1 053 Р</strong>
							<div class="item-product-price-box__sale"><span><strong>850 P</strong> Цена со скидкой</span></div>
						</div>
						<div class="item-product-stock"><span>Доступно на складе: <strong>1889</strong></span></div>
						<div class="item-product-cart">
							<input type="text" name="#" value="1">
							<button class="btn item-product-sel-cart">В корзину</button>
						</div>
					</a>

					<a href="/" class="item-product swiper-slide">
						<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/seazon/3.jpg" alt="#"></div>
						<div class="item-product-articale"><span>Арт.</span> F321045</div>
						<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
						<div class="item-product-price-box"><strong>1 053 Р</strong>
							<div class="item-product-price-box__sale"><span><strong>850 P</strong> Цена со скидкой</span></div>
						</div>
						<div class="item-product-stock"><span>Доступно на складе: <strong>1889</strong></span></div>
						<div class="item-product-cart">
							<input type="text" name="#" value="1">
							<button class="btn item-product-sel-cart">В корзину</button>
						</div>
					</a>

					<a href="/" class="item-product swiper-slide">
						<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/seazon/4.jpg" alt="#"></div>
						<div class="item-product-articale"><span>Арт.</span> F321045</div>
						<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
						<div class="item-product-price-box"><strong>1 053 Р</strong>
							<div class="item-product-price-box__sale"><span><strong>850 P</strong> Цена со скидкой</span></div>
						</div>
						<div class="item-product-stock"><span>Доступно на складе: <strong>1889</strong></span></div>
						<div class="item-product-cart">
							<input type="text" name="#" value="1">
							<button class="btn item-product-sel-cart">В корзину</button>
						</div>
					</a>

				</div>
			</div>
			<div class="water-season-navigation">
				<div class="water-season-navigation__prev"></div>
				<div class="water-season-navigation__next"></div>
			</div>
			<button class="water-season__body-btn"><span>Смотреть всё</span></button>
		</div>
	</section>
	<section class="recomended-season container">
		<h2>Рекомендуем к сезону</h2>
		<div class="recomended-season__body">
			<div class="recomennded-slider__box swiper-container">
				<div class="swiper-wrapper">
					<div class="item-product swiper-slide">
						<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/product-hit.jpg" alt=""><span style="background-color: #264CAF">Хит продаж</span></div>
						<div class="item-product-articale"><span>Арт.</span> F321045</div>
						<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
						<div class="item-product-price-box"><span class="price-old undefined">2 400</span><strong class="undefined">1 053 Р</strong></div>
						<div class="item-product-stock">Доступно на складе: <strong>1889</strong></div>
						<div class="item-product-sel">
							<input type="text" name="#" value="1">
							<div class="btn item-product-sel-basket orange"></div><a class="item-product-sel-favorites orange" href="#"></a><a class="item-product-sel-bar orange" href="#"></a>
						</div>
					</div>
					<div class="item-product swiper-slide">
						<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/product-hit.jpg" alt=""><span style="background-color: #FFCB00">Товар года</span></div>
						<div class="item-product-articale"><span>Арт.</span> F321045</div>
						<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
						<div class="item-product-price-box"><span class="price-old undefined">2 400</span><strong class="undefined">1 053 Р</strong></div>
						<div class="item-product-stock">Доступно на складе: <strong>1889</strong></div>
						<div class="item-product-sel">
							<input type="text" name="#" value="1">
							<div class="btn item-product-sel-basket orange"></div><a class="item-product-sel-favorites orange" href="#"></a><a class="item-product-sel-bar orange" href="#"></a>
						</div>
					</div>
					<div class="item-product swiper-slide">
						<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/product-hit.jpg" alt=""><span style="background-color: #A8D600">07:45:21</span></div>
						<div class="item-product-articale"><span>Арт.</span> F321045</div>
						<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
						<div class="item-product-price-box"><span class="price-old undefined">2 400</span><strong class="undefined">1 053 Р</strong></div>
						<div class="item-product-stock">Доступно на складе: <strong>1889</strong></div>
						<div class="item-product-sel">
							<input type="text" name="#" value="1">
							<div class="btn item-product-sel-basket orange"></div><a class="item-product-sel-favorites orange" href="#"></a><a class="item-product-sel-bar orange" href="#"></a>
						</div>
					</div>
					<div class="item-product swiper-slide">
						<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/product-hit.jpg" alt=""><span style="background-color: ">-5%</span></div>
						<div class="item-product-articale"><span>Арт.</span> F321045</div>
						<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
						<div class="item-product-price-box"><span class="price-old undefined">2 400</span><strong class="undefined">1 053 Р</strong></div>
						<div class="item-product-stock">Доступно на складе: <strong>1889</strong></div>
						<div class="item-product-sel">
							<input type="text" name="#" value="1">
							<div class="btn item-product-sel-basket orange"></div><a class="item-product-sel-favorites orange" href="#"></a><a class="item-product-sel-bar orange" href="#"></a>
						</div>
					</div>
					<div class="item-product swiper-slide">
						<div class="item-product-img-box"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/product-hit.jpg" alt=""><span style="background-color: ">-10%</span></div>
						<div class="item-product-articale"><span>Арт.</span> F321045</div>
						<div class="item-product-text">Мяч футб. VISION Spark, F321045, р.5, FIFA Basiс, 24 пан, ПУ.слой, гибрид. сшив., мультиколор</div>
						<div class="item-product-price-box"><span class="price-old undefined">2 400</span><strong class="undefined">1 053 Р</strong></div>
						<div class="item-product-stock">Доступно на складе: <strong>1889</strong></div>
						<div class="item-product-sel">
							<input type="text" name="#" value="1">
							<div class="btn item-product-sel-basket orange"></div><a class="item-product-sel-favorites orange" href="#"></a><a class="item-product-sel-bar orange" href="#"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="recomennded-season-navigation">
				<div class="recomennded-season-navigation__prev"></div>
				<div class="recomennded-season-navigation__next"></div>
			</div>
		</div>
	</section>

    <? if($APPLICATION->GetProperty("show_main_popular_cat") == "Y"): ?>
		<section class="popular-slider container">
            <?$GLOBALS["popularFilter"] = array("UF_MAIN_POPULAR" => true); ?>
            <?
            $APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "main-popular",
                array(
                    "COMPONENT_TEMPLATE" => "main-popular",
                    "IBLOCK_TYPE" => "xmlcatalog",
                    "IBLOCK_ID" => "14",
                    "SECTION_ID" => "",
                    "SECTION_CODE" => "",
                    "COUNT_ELEMENTS" => "N",
                    "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                    "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
                    "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                    "TOP_DEPTH" => "2",
                    "SECTION_FIELDS" => array(
                        0 => "",
                        1 => "",
                    ),
                    "SECTION_USER_FIELDS" => array(
                        0 => "UF_MAIN_POPULAR",
                        1 => "",
                    ),
                    "FILTER_NAME" => "popularFilter",
                    "VIEW_MODE" => "LINE",
                    "SHOW_PARENT_NAME" => "Y",
                    "SECTION_URL" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_FILTER" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "TITLE" => "Популярные категории"
                ),
                false
            );
            ?>
		</section>
    <? endif; ?>

<? else: ?>

	<section class="who-we container">
		<div class="who-we__scroll"></div>
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            array(
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/why_are_we.php",
                "EDIT_TEMPLATE" => ""
            ),
            false
        );
        ?>
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:catalog.section",
            "distributor-list",
            array(
                "COMPONENT_TEMPLATE" => "distributor-list",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "34",
                "SECTION_ID" => "",
                "SECTION_CODE" => "exclusive",
                "TITLE" => "Ballmarket.ru - Эксклюзивный дистрибьютор",
                "SECTION_USER_FIELDS" => array(
                    0 => "UF_CLASS",
                    1 => "",
                ),
                "FILTER_NAME" => "arrFilter",
                "INCLUDE_SUBSECTIONS" => "Y",
                "SHOW_ALL_WO_SECTION" => "N",
                "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                "HIDE_NOT_AVAILABLE" => "N",
                "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                "ELEMENT_SORT_FIELD" => "sort",
                "ELEMENT_SORT_ORDER" => "asc",
                "ELEMENT_SORT_FIELD2" => "id",
                "ELEMENT_SORT_ORDER2" => "desc",
                "PAGE_ELEMENT_COUNT" => "18",
                "LINE_ELEMENT_COUNT" => "3",
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "OFFERS_LIMIT" => "5",
                "BACKGROUND_IMAGE" => "-",
                "SECTION_URL" => "",
                "DETAIL_URL" => "",
                "SECTION_ID_VARIABLE" => "SECTION_ID",
                "SEF_MODE" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_GROUPS" => "Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "BROWSER_TITLE" => "-",
                "SET_META_KEYWORDS" => "N",
                "META_KEYWORDS" => "-",
                "SET_META_DESCRIPTION" => "N",
                "META_DESCRIPTION" => "-",
                "SET_LAST_MODIFIED" => "N",
                "USE_MAIN_ELEMENT_SECTION" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "CACHE_FILTER" => "N",
                "ACTION_VARIABLE" => "action",
                "PRODUCT_ID_VARIABLE" => "id",
                "PRICE_CODE" => array(
                ),
                "USE_PRICE_COUNT" => "N",
                "SHOW_PRICE_COUNT" => "1",
                "PRICE_VAT_INCLUDE" => "Y",
                "CONVERT_CURRENCY" => "N",
                "BASKET_URL" => "/personal/basket.php",
                "USE_PRODUCT_QUANTITY" => "N",
                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                "ADD_PROPERTIES_TO_BASKET" => "N",
                "PRODUCT_PROPS_VARIABLE" => "prop",
                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                "PRODUCT_PROPERTIES" => array(
                ),
                "DISPLAY_COMPARE" => "N",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
                "COMPATIBLE_MODE" => "Y",
                "DISABLE_INIT_JS_IN_COMPONENT" => "N"
            ),
            false
        );
        ?>
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:catalog.section",
            "distributor-list",
            array(
                "COMPONENT_TEMPLATE" => "distributor-list",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "34",
                "SECTION_ID" => "",
                "SECTION_CODE" => "official",
                "TITLE" => "Ballmarket.ru - Официальный дистрибьютор",
                "SECTION_USER_FIELDS" => array(
                    0 => "UF_CLASS",
                    1 => "",
                ),
                "FILTER_NAME" => "arrFilter",
                "INCLUDE_SUBSECTIONS" => "Y",
                "SHOW_ALL_WO_SECTION" => "N",
                "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                "HIDE_NOT_AVAILABLE" => "N",
                "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                "ELEMENT_SORT_FIELD" => "sort",
                "ELEMENT_SORT_ORDER" => "asc",
                "ELEMENT_SORT_FIELD2" => "id",
                "ELEMENT_SORT_ORDER2" => "desc",
                "PAGE_ELEMENT_COUNT" => "18",
                "LINE_ELEMENT_COUNT" => "3",
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "OFFERS_LIMIT" => "5",
                "BACKGROUND_IMAGE" => "-",
                "SECTION_URL" => "",
                "DETAIL_URL" => "",
                "SECTION_ID_VARIABLE" => "SECTION_ID",
                "SEF_MODE" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_GROUPS" => "Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "BROWSER_TITLE" => "-",
                "SET_META_KEYWORDS" => "N",
                "META_KEYWORDS" => "-",
                "SET_META_DESCRIPTION" => "N",
                "META_DESCRIPTION" => "-",
                "SET_LAST_MODIFIED" => "N",
                "USE_MAIN_ELEMENT_SECTION" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "CACHE_FILTER" => "N",
                "ACTION_VARIABLE" => "action",
                "PRODUCT_ID_VARIABLE" => "id",
                "PRICE_CODE" => array(
                ),
                "USE_PRICE_COUNT" => "N",
                "SHOW_PRICE_COUNT" => "1",
                "PRICE_VAT_INCLUDE" => "Y",
                "CONVERT_CURRENCY" => "N",
                "BASKET_URL" => "/personal/basket.php",
                "USE_PRODUCT_QUANTITY" => "N",
                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                "ADD_PROPERTIES_TO_BASKET" => "N",
                "PRODUCT_PROPS_VARIABLE" => "prop",
                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                "PRODUCT_PROPERTIES" => array(
                ),
                "DISPLAY_COMPARE" => "N",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
                "COMPATIBLE_MODE" => "Y",
                "DISABLE_INIT_JS_IN_COMPONENT" => "N"
            ),
            false
        );
        ?>
		<div class="all"></div>
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "brands-slider",
            array(
                "COMPONENT_TEMPLATE" => "brands-slider",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "33",
                "NEWS_COUNT" => "100",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "TITLE_TEXT",
                    1 => "TEXT",
                    2 => "",
                ),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "STRICT_SECTION_CHECK" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
                "TITLE" => "И еще более 40 брендов",
                "BTN_TITLE" => "Смотреть весь ассортимент",
                "BTN_SCROLL" => ".form-landing"
            ),
            false
        );
        ?>
	</section>
	<section class="advantages">
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "advantages",
            array(
                "COMPONENT_TEMPLATE" => "advantages",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "35",
                "NEWS_COUNT" => "100",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "",
                ),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "STRICT_SECTION_CHECK" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
                "TITLE" => "Основные преимущества работы с Ballmarket.ru",
                "BTN_TITLE" => "Стать клиентом Ballmarket",
                "BTN_SCROLL" => ".form-landing"
            ),
            false
        );
        ?>
	</section>
	<section class="start-work container">
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "start-work",
            array(
                "COMPONENT_TEMPLATE" => "start-work",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "32",
                "NEWS_COUNT" => "20",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "TITLE_TEXT",
                    1 => "TEXT",
                    2 => "",
                ),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "STRICT_SECTION_CHECK" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
                "TITLE" => "Начать работать с нами очень просто!"
            ),
            false
        );
        ?>
	</section>
	<section class="form-landing">
        <?
        $APPLICATION->IncludeComponent(
            "mw_media:main.feedback",
            "form-landing",
            array(
                "COMPONENT_TEMPLATE" => "form-landing",
                "USE_CAPTCHA" => "N",
                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                "EMAIL_TO" => "info@ballmarket.ru",
                "REQUIRED_FIELDS" => array(
                    0 => "NONE",
                ),
                "EVENT_MESSAGE_ID" => array(
                    0 => "51",
                ),
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_SHADOW" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "TITLE" => "Заявка на регистрацию"
            ),
            false
        );
        ?>
	</section>
	<div class="modal-popup" data-close="1" data-popup="lend-popup">
        <?
        $APPLICATION->IncludeComponent(
            "mw_media:main.feedback",
            "form-landing-modal",
            array(
                "COMPONENT_TEMPLATE" => "form-landing-modal",
                "USE_CAPTCHA" => "N",
                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                "EMAIL_TO" => "info@ballmarket.ru",
                "REQUIRED_FIELDS" => array(
                    0 => "NONE",
                ),
                "EVENT_MESSAGE_ID" => array(
                    0 => "52",
                ),
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_SHADOW" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "TITLE" => "Заполните данные"
            ),
            false
        );
        ?>
	</div>
	<div class="modal-popup" data-close="2" data-popup="lend-popup-auth">
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:system.auth.form",
            "popup-auth",
            array(
                "REGISTER_URL" => "register.php",
                "FORGOT_PASSWORD_URL" => "",
                "PROFILE_URL" => "profile.php",
                "SHOW_ERRORS" => "Y"
            )
        );
        ?>
	</div>
<? endif; ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
