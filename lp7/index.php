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
	<img src="images/comics_24.png" />
</div>

<div class="btn_a">
	<p>＼好条件常勤（日勤/夜勤)求人豊富／</p>
    <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp7&btn_id=1"  target="_blank">
		マイナビ看護師の求人を確認
		<div class="button__triangle"></div>
        <div class="reflection"></div>
    </a>
	<p class="btn_bottomtext">↑3か月以内に転職したいならココ！↑</p>
</div>

<div class="pic">
	<img src="images/comics_25.png" />
</div>

<div class="pic">
	<img src="images/comics_26.png" />
</div>

<div class="btn_a">
	<p>＼高年収・好待遇の非公開求人豊富／</p>
    <a href="https://www.kanngoshi.net/jump/ms_iryouworker.html?lp=lp7&btn_id=2"  target="_blank">
		医療ワーカーの求人を確認
		<div class="button__triangle"></div>
        <div class="reflection"></div>
    </a>
	<p class="btn_bottomtext">↑手厚いサポートで高い転職実績↑</p>
</div>

<div class="pic">
	<img src="images/comics_14.png" />
</div>
<div class="pic">
	<img src="images/comics_15.png" />
</div>
<div class="pic">
	<img src="images/comics_27.png" />
</div>
<div class="pic">
	<img src="images/comics_17.png" />
</div>
<div class="pic">
	<img src="images/comics_28.png" />
</div>

<div class="btn_a">
	<p>＼好条件常勤（日勤/夜勤)求人豊富／</p>
    <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp7&btn_id=3"  target="_blank">
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
    <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp7&btn_id=4"  target="_blank">
		今すぐマイナビ看護師に登録
		<div class="button__triangle"></div>
        <div class="reflection"></div>
    </a>
	<p class="btn_bottomtext">↑3か月以内に転職したいならココ！↑</p>
</div>

<div class="pic">
	<img src="images/img_3.png" />
</div>

<div class="block b">
	<h3>最短1ヶ月で転職!圧倒的な実績!</h3>
	<p>人材大手マイナビ運営、5年連続認知度No.1!<br/><span>20代~40代常勤ナースが選んだNo.1サイト!</span><br/>高年収・好待遇の優良求人圧倒的に多い!</p>
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
    <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp7&btn_id=5"  target="_blank">
		マイナビ看護師公式サイト
		<div class="button__triangle"></div>
        <div class="reflection"></div>
    </a>
	<p class="btn_bottomtext">↑3か月以内に転職したいならココ！↑</p>
</div>

<div class="pic">
    <img src="images/pic_26.png" />
</div>

<div class="pic_title" id="num04">
	<img src="./images/pic_46.png" />
</div>
<div class="flex">
    <div class="flex_img">
        <img src="images/pic_3.png">
    </div>
    <h2 class="flex_text">
        <span class="white">看護師からの支持率4年連続No.1
		</span><br>
        <a class="big"  target="_blank">医療ワーカー</a>
    </h2>
</div>

<div class="frame">
  <div class="pic">
      <img class="desc" src="images/pic_3_1<?=isSP()?'_sp':''?>.png" class="Square_pic">
  </div>
  <div class="table">
     <table>
         <tr>
            <th>エリア</th>
			<td>全国</td>
         </tr>
		 <tr>
		    <th>雇用形態</th>
		 	<td>常勤/非常勤</td>
		 </tr>
		 <tr>
		    <th>求人数</th>
		 	<td>90,000件以上</td>
		 </tr>
         <tr>
            <th>サポート</th>
         	<td><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"></td>
         </tr>
     </table>
  </div>
  <div class="lp5_text">
	  <div class="pink_title__box">
	  		  <p class="pink_title"><span class="pink_title__text">＼医療ワーカーの特徴／</span></p>
	  </div>
      <p><span><span class="square">■</span>圧倒的な求人数、非公開求人がスゴイ！</span><span class="red">8万件以上</span>の非公開求人を保有！
      </p>
      <p><span><span class="square">■</span>高年収・好条件の求人が多い！</span><span class="red">月給40～50万円以上</span>の求人が多数、年収大幅アップで転職できる！
      </p>
      <p><span><span class="square">■</span>応援ナース（応援看護師制度）のサービスを提供！</span><span class="red">短期間・高収入</span>で勤務するサービスを提供！
      </p>
  </div>
  
  <div class="lp5_text person__box">
  	  <h1 class="person__title">医療ワーカーの口コミ</h1>
  	  <div class="person__talk__box">
  		  <div class="person__talk">
  		  		  <div class="person__line person__line__border">
  		  			  <div class="person__left">
  		  				  <img src="images/person4.png" />
  		  				  <p>(香川県・25歳)</p>
  		  			  </div>
  		  			  <div class="lp5_person__right">
  		  				  <p>求人の情報量が他の転職サイトより多い印象。</p>
  		  			  </div>
  		  		  </div>
  				  <div class="person__line person__line__border person__line__top">
  				  		<div class="person__left">
  							<img src="images/person5.png" />
  				  		  	<p>(愛知県・28歳)</p>
  				  		</div>
  				  		<div class="lp5_person__right">
  				  		  	<p>キャリアアドバイザーの方が頻繁に連絡を取ってくれたので良かったです。</p>
  				  		</div>
  				  </div>
  				  <div class="person__line person__line__top">
  				  		<div class="person__left">
  				  		  	<img src="images/person1.png" />
  				  		  	<p>(神奈川県・31歳)</p>
  				  		</div>
  				  		<div class="lp5_person__right">
  				  		  	<p>求人の情報量が多いだけでなく、自己PRや内定辞退の例文コラムがとても参考になりました。</p>
  				  		</div>
  				  </div>
  		  </div>
  	  </div>
  </div>
  
  <div class="btn_a">
      <a href="https://www.kanngoshi.net/jump/ms_iryouworker.html?lp=lp7&button_id=iryouworker1"target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
      高収入の転職なら医療ワーカー
		  <div class="button__triangle"></div>
          <div class="reflection"></div>
      </a>
  </div>
</div> 

<div class="main__table PC">
	<div class="main__table__body">
	   <table  border="0" cellpadding="0" cellspacing="0">
	     <tr>
				 <th class="table__icon__box"><span class="tabe__title__pc">順位</span></th>
	       <th class="first__column"><span class="tabe__title__pc">転職サイト名</span><span class="tabe__title__sp">転職<br>サイト名</span></th>
	     	 <th class="table__icon__box"><span class="tabe__title__pc">総合満足度</span><span class="tabe__title__sp">総合<br>満足度</span></th>
	     	 <th class="table__icon__box"><span class="tabe__title__pc">求人数</span><span class="tabe__title__sp">求人数</span></th>
			   <th class="table__icon__box tabe__pc"><span>非公開求人</span></th>
	     	 <th class="last__column"><span class="tabe__title__pc">詳細</span><span class="tabe__title__sp">詳細</span></th>
	    </tr>
				
			<tr>
			 	 <td class="table__icon__box"><img src="images/num01.png" class="num_pic"></span></td>
			   <td class="first__column"><img src="images/company_1.png" title="マイナビ看護師"></td>
			   <td class="table__icon__box"><span class="icon"><img src="images/grade_1.png"></span><br><span>4.9</span></td>
			   <td class="table__icon__box"><span class="icon"><img src="images/grade_2.png"></span><br><span>52,000</span></td>
				 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/grade_1.png"></span><br><span>普通</span></td>
			   <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp7&chart_id=2" class="table_button">公式サイト</a></td>
			</tr>
			
			<tr>
				 <td class="table__icon__box"><img src="images/num02.png" class="num_pic"></span></td>
				 <td class="first__column"><img src="images/company_2.png" title="医療ワーカー"></td>
				 <td class="table__icon__box"><span class="icon"><img src="images/grade_2.png"></span><br><span>4.7</span></td>
			 	 <td class="table__icon__box"><span class="icon"><img src="images/grade_3.png"></span><br><span>非公開</span></td>
				 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/grade_1.png"></span><br><span>多い</span></td>
				 <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_iryouworker.html?lp=lp7&chart_id=3" class="table_button">公式サイト</a></td>
			</tr>
	      
	   </table>
	</div>
</div>

<div class="main__table SP">
	<div class="main__table__body">

		<table cellpadding="0" cellspacing="0">
		     <tr>
		         <td rowspan="2" class="first__column">
		         <img class="table__icon" src="images/num01.png" alt="1"/><br/><img src="images/company_1.png" title="マイナビ看護師"><br/>
		         </td>
		         <th>総合<br>満足度</th>
		         <th>求人数</th>
		         <th>非公開求人</th>
		     </tr>
		     <tr>
		         <td><span class="icon"><img src="images/grade_1.png"></span><br><span>4.9</span></td>
		         <td><span class="icon"><img src="images/grade_2.png"></span><br><span>52,000</span></td>
		         <td><span class="icon"><img src="images/grade_1.png"></span><br><span>普通</span></td>
		     </tr>
		     <tr>
		         <td colspan="4">
		             <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp7&chart_id=2" class="table_button">公式サイト</a>
		         </td>
		     </tr>
		</table>
		
		<table cellpadding="0" cellspacing="0">
		     <tr>
		         <td rowspan="2" class="first__column">
		         <img class="table__icon" src="images/num02.png" alt="2"/><br/><img src="images/company_2.png" title="医療ワーカー"><br/>
		         </td>
		         <th>総合<br>満足度</th>
		         <th>求人数</th>
		         <th>非公開求人</th>
		     </tr>
		     <tr>
		         <td><span class="icon"><img src="images/grade_2.png"></span><br><span>4.7</span></td>
		         <td><span class="icon"><img src="images/grade_3.png"></span><br><span>非公開</span></td>
		         <td><span class="icon"><img src="images/grade_1.png"></span><br><span>多い</span></td>
		     </tr>
		     <tr>
		         <td colspan="4">
		             <a href="https://www.kanngoshi.net/jump/ms_iryouworker.html?lp=lp7&chart_id=3" class="table_button">公式サイト</a>
		         </td>
		     </tr>
		</table>
	</div>
</div>


<!--pop content start-->
<div id="pop_img_leave" class="pop_img">
	<a class="pop_img__close" href="javascript:void($('#pop_img_leave').popup('hide'));"><img src="images/pop_img_close.png"/></a>
	<a class="pop_img__link" href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp7&btn_id=pop">
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
