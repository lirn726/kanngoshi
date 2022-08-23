<?php
/********** 包含配置文件 ***********/
require_once('../../inc/config.php');
require_once('../../inc/general.php');
require_once('../../inc/conn.php');
require_once('../../inc/switch.php');
require_once('../../inc/analytics.php');
?>
<!doctype html>
<html lang="ja">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" />
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow">
<!-- <link rel="icon" href="/images/favicon.ico" type="image/x-icon"> -->
<meta name="description" content="今よりよい職場に働こう！絶対成功できる看護転職エージェントご紹介。初めて転職の方、ミスマッチを恐れがある方、今よりよい条件で仕事したい方におすすめ。求人数・求人の質から完全比較。あなたにぴったりの看護転職サイト必ず見つかる。" />
<meta name="keywords" content="看護転職,おすすめ,エージェント,ランキング,看護のお仕事,マイナビ看護師,ナース人材バンク,医療ワーカー、Nsキャリア" />
<title>高年収・好待遇の求人必ず見つかる看護転職エージェント大紹介</title>
<link href="/css/style.css" type="text/css" rel="stylesheet" />
<link href="css/index.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/popup_pc.css"/>
<link rel="stylesheet" type="text/css" href="css/popup_sp.css"/>
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="/js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.popupoverlay.js"></script>

<?php
require_once('../header_code.php');
?>
<?php
if(count($_GET)){
	$url = '';
	foreach($_GET as $k => $v){
		if($k != 'isPopup'){
			$url.= "&{$k}=$v";
		}		
	}
}
?>
<script>
	$(document).ready(function(){
		var pattern = /kanngoshi\.net\//;
		var isNotFirstVisit = pattern.test(document.referrer);
		if(isNotFirstVisit == false){
			history.pushState({popup:1}, null, "<?=$_SERVER['REDIRECT_URL']?>?isPopup=1<?=$url?>");
			window.onpopstate = function(event) {
				// history.pushState(null, null, document.URL);
				const queryString = window.location.search;
				const urlParams = new URLSearchParams(queryString);
				const isPopup = parseInt(urlParams.get('isPopup'));
				console.log(isPopup);
				console.log("onpopup location: " + document.location + ", state: " + JSON.stringify(event.state));
				if(isPopup!=1){
					$('#pop_img_leave').popup('show');
				}
			};
		}
	
	})
</script>

</head>

<body>

<div class="pic" id="head">
    <img src="images/top.png" />
</div>
<div class="person">
	<div class="person__item">
		<div class="person__item__left">
			<img src="images/person_1.png" />
		</div>
		<div class="person__item__right">
			<h3>つらこ（28歳）</h3>
			<p>四年目の看護師<br/>仕事が辛くて身体も精神もボロボロ。</p>
		</div>
	</div>
	<div class="person__item">
		<div class="person__item__left">
			<img src="images/person_2.png" />
		</div>
		<div class="person__item__right">
			<h3>なあす（28歳）</h3>
			<p>最近神職場に転職した看護師仲間<br/>学生時代からつらこちゃんと友達。</p>
		</div>
	</div>
</div>
<div class="pic">
	<img src="images/comics_1.png" />
</div>
<div class="pic">
	<img src="images/comics_2.png" />
</div>
<div class="pic">
	<img src="images/comics_3.png" />
</div>
<div class="pic">
	<img src="images/comics_4.png" />
</div>
<div class="pic">
	<img src="images/comics_5.png" />
</div>
<div class="pic">
	<img src="images/comics_6.png" />
</div>
<div class="pic">
	<img src="images/comics_7.png" />
</div>
<div class="pic">
	<img src="images/comics_8.png" />
</div>
<div class="pic">
	<img src="images/comics_9.png" />
</div>
<div class="pic">
	<img src="images/comics_10.png" />
</div>
<div class="pic">
	<img src="images/comics_11.png" />
</div>
<div class="pic">
	<img src="images/comics_12.png" />
</div>
<div class="pic">
	<img src="images/comics_13.png" />
</div>

<div class="btn_a">
	<p>＼好条件常勤（日勤/夜勤)求人豊富／</p>
    <a href="https://www.kanngoshi.net/jump/ms_iryouworker.html?lp=lp7&btn_id=1"  target="_blank">
		医療ワーカーの求人を確認
		<div class="button__triangle"></div>
        <div class="reflection"></div>
    </a>
	<p class="btn_bottomtext">↑3か月以内に転職したいならココ！↑</p>
</div>

<div class="pic">
	<img src="images/comics_14.png" />
</div>
<div class="pic">
	<img src="images/comics_15.png" />
</div>
<div class="pic">
	<img src="images/comics_16.png" />
</div>
<div class="pic">
	<img src="images/comics_17.png" />
</div>
<div class="pic">
	<img src="images/comics_23.png" />
</div>

<div class="btn_a">
	<p>＼好条件常勤（日勤/夜勤)求人豊富／</p>
    <a href="https://www.kanngoshi.net/jump/ms_iryouworker.html?lp=lp7&btn_id=2"  target="_blank">
		高年収・好条件求人チェックする
		<div class="button__triangle"></div>
        <div class="reflection"></div>
    </a>
	<p class="btn_bottomtext">↑3か月以内に転職したいならココ！↑</p>
</div>

<div class="pic">
	<img src="images/comics_19.png" />
</div>
<div class="pic">
	<img src="images/comics_20.png" />
</div>
<div class="pic">
	<img src="images/comics_21.png" />
</div>
<div class="pic">
	<img src="images/comics_22.png" />
</div>

<div class="btn_a">
	<p>＼好条件常勤（日勤/夜勤)求人豊富／</p>
    <a href="https://www.kanngoshi.net/jump/ms_iryouworker.html?lp=lp7&btn_id=3"  target="_blank">
		今すぐ医療ワーカーに登録
		<div class="button__triangle"></div>
        <div class="reflection"></div>
    </a>
	<p class="btn_bottomtext">↑3か月以内に転職したいならココ！↑</p>
</div>

<div class="pic">
	<img src="images/img_1.png" />
</div>

<div class="block b">
	<h3>最短1ヶ月で転職!圧倒的な実績!</h3>
	<p>看護師からの支持率<span>4年連続No.1!</span><br/><span>年収500万以上</span>の魅力的な非公開求人多数! 高年収・好待遇の優良求人圧倒的に多い!</p>
</div>
<div class="block b">
	<h3>コンサルタントにじっくり相談!</h3>
	<p><span>質の高いサポート力</span>と<span>我慢強い交渉力</span>が魅力!<br/>担当者から内部情報を踏まえたアドバイスがもらえます！</p>
</div>
<div class="block b">
	<h3>病院の内部の情報が手に入る!</h3>
	<p>担当のコンサルタントに依頼すれば、掲載されている求人の<span>内部情報について事前に教えてもらえるので</span>、自分に合った職場を探しやすくなります！</p>
</div>

<div class="pic">
	<img src="images/img_2.png" />
</div>

<div class="btn_a">
	<p>＼好条件常勤（日勤/夜勤)求人豊富／</p>
    <a href="https://www.kanngoshi.net/jump/ms_iryouworker.html?lp=lp7&btn_id=4"  target="_blank">
		医療ワーカー公式サイト
		<div class="button__triangle"></div>
        <div class="reflection"></div>
    </a>
	<p class="btn_bottomtext">↑3か月以内に転職したいならココ！↑</p>
</div>

<!--pop content start-->
<div id="pop_img_leave" class="pop_img">
	<a class="pop_img__close" href="javascript:void($('#pop_img_leave').popup('hide'));"><img src="images/pop_img_close.png"/></a>
	<a class="pop_img__link" href="https://www.kanngoshi.net/jump/ms_iryouworker.html?lp=lp7&btn_id=pop">
		<img src="images/pop_img_leave.png"/>
	</a>
</div>
<!--pop content end-->

<div class="gototop">
    <a href="javascript:void($(window).scrollTo('#head',500));"><img src="images/gototop.png" /></a>
</div>

<!-- footer start -->
<div id="la_footer">
	<a href="about.html">運営者情報</a> |
    <a href="privacy.html">個人情報保護について</a>
	<!-- <a href="ranking.html">ランキング調査</a>  -->
    <br/>
    Copyright © <?=date('Y')?> 看護師まとめて検索ネット. All rights reserved.
</div>
<!-- footer end -->

<?php
require_once('../footer_code.php');
?>

</body>
</html>
