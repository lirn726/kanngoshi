<?php
/********** 包含配置文件 ***********/
require_once('../../inc/config.php');
require_once('../../inc/general.php');
require_once('../../inc/conn.php');
require_once('../../inc/switch.php');
require_once('../../inc/analytics.php');
$btn_url = '/jump/doda.html';
$btn_url1 = '/jump/mynaviagent.html';
$btn_url2 = '/jump/hataractive.html';
$btn_url3 = '/jump/bizreach_pc.html';
$text_url = '/jump/doda.html';
$text_url1 = '/jump/mynaviagent.html';
$text_url2 = '/jump/hataractive.html';
$text_url3 = '/jump/bizreach_pc.html';
$_ID = 1;
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
<!--<link href="../../lpa/css/index.css" type="text/css" rel="stylesheet" />-->
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="/js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.popupoverlay.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

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

<div class="pic" id="head" style="margin-bottom:0;">
    <img src="images/TOP1.png" />
</div>

<div class="pic">
    <img src="images/TOP2.png" />
</div>

<div class="pic">
    <img src="images/TOP3.png" />
</div>

<div class="pic">
    <img src="images/TOP4.png" />
</div>

<div class="pic">
    <img src="images/TOP7.png" />
</div>


<!-- <div class="pic_title" id="num01">
	<img src="images/pic_48.png" >
</div>
<div class="flex">
    <div class="flex_img">
        <img src="images/pic_3.png">
    </div>
    <h2 class="flex_text">
        <span class="white">業界トップクラスの求人数!利用者数40万人突破!</span><br>
        <a  target="_blank">看護のお仕事</a>
    </h2>
</div>

<div class="frame">
  <div class="pic">
      <img class="desc" src="images/pic_30<?=isSP()?'_sp':''?>.png">
  </div>
  <div class="table">
     <table>
         <tr>
            <th>エリア</th>
         	<td>全国</td>
         </tr>
         <tr>
            <th>雇用形態</th>
         	<td>常勤（日勤）/常勤（夜勤可）</td>
         </tr>
         <tr>
            <th>求人数</th>
         	<td>150,000件以上</td>
         </tr>
         <tr>
            <th>サポート</th>
         	<td><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"></td>
         </tr>
     </table>
  </div> -->
	
	<div class="pic_title" id="num01">
		<img src="images/pic_32.png" >
	</div>
	<div class="flex">
	    <div class="flex_img">
	        <img src="images/pic_3.png">
	    </div>
	    <h2 class="flex_text">
	        <span class="white">日本最大級看護師の転職サイト</span><br>
	        <a  target="_blank">マイナビ看護師</a>
	    </h2>
	</div>
	
	<div class="frame">
	  <div class="pic">
	      <img class="desc" src="images/pic_33<?=isSP()?'_sp':''?>.png">
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
	         	<td>50,000件以上</td>
	         </tr>
	         <tr>
	            <th>サポート</th>
	         	<td><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"></td>
	         </tr>
	     </table>
	  </div>
  
  
  <div class="pic">
      <img src="images/pic_34.jpg" />
  </div>
  
  <div class="btn_a">
	  <p>＼好条件常勤（日勤/夜勤)求人豊富／</p>
      <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp5& button1_id=mynavi-kango"  target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
		  マイナビ看護師の求人を確認
		  <!-- <i class="fas fa-chevron-circle-right"></i> -->
		  <div class="button__triangle"></div>
          <div class="reflection"></div>
      </a>
	  <p class="btn_bottomtext">↑3か月以内に転職したいならココ！↑</p>
  </div>
</div>



<div class="pic">
    <img src="images/pic_35.png" />
</div>
<div class="pic pic_text">
    <img src="images/pic_36.png" />
</div>
<div class="pic pic_text">
    <img src="images/pic_38.png" />
</div>
<div class="pic pic_text">
    <img src="images/pic_39.png" />
</div>

<div class="person">
	<div class="person__line">
		<div class="person__line__pic">
			<div>
				<img src="images/pic_9.png" />
			</div>
		</div>
		<div class="person__line__text">
			<p class="person__text__box">
				希望条件が決まるまで根気強くアドバイスしてくれすし、親切に転職に関する<span class="text_red">全般的なサポート</span>をしてくれたので安心して転職活動をしていくことができました。本当に利用して良かったな～と感じています。
				<br />(長野県　28歳)
			</p>
		</div>
	</div>
	<div class="person__line">
		<div class="person__line__pic">
			<div>
				<img src="images/pic_10.png" />
			</div>
		</div>
		<div class="person__line__text">
			<p class="person__text__box">
				マイナビ看護師利用して驚いたのは、<span class="text_red">非公開求人情報が多くあった</span>ところですかね。担当者がお給料が良く、人間関係の良い病院の求人を<span class="text_red">親身になって</span>探してくれて本当に感謝しています。おかげで以前よりも良い環境で働けていることにも感謝です。
				<br />(栃木県　34歳)
			</p>
		</div>
	</div>
	<div class="person__line">
		<div class="person__line__pic">
			<div>
				<img src="images/pic_11.png" />
			</div>
		</div>
		<div class="person__line__text">
			<p class="person__text__box">
				面接前に<span class="text_red">事業者の雰囲気や院長の人柄</span>など情報をくれたので安心感がありました。それぞれの病院のことをしっかり把握しており、面接ではどの様な質問がされるかを事前に教えていただけたうえに、面接にも同行してくださいました。
				<br />(福岡県　40歳)
			</p>
		</div>
	</div>
	<div class="btn_a">
		<p>＼好条件常勤（日勤/夜勤)求人豊富／</p>
	    <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp5&button2_id=mynavi-kango" target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
			   満足度が高いマイナビ看護師
	<!--	  <i class="fas fa-chevron-circle-right"></i>-->
   	        <div class="button__triangle"></div>
            <div class="reflection"></div>
	    </a>
		<p class="btn_bottomtext">↑3か月以内に転職したいならココ！↑</p>
	</div>
</div>


<div class="pic">
    <img src="images/pic_12.png" />
</div>

<div class="pic">
    <img src="images/pic_40.png" />
</div>

<div class="pic">
	<div class="btn_a">
		  <p>＼好条件常勤（日勤/夜勤)求人豊富／</p>
	      <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp5&button3_id=mynavi-kango" target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
			  今すぐマイナビ看護師に登録
	<!--		  <i class="fas fa-chevron-circle-right"></i>-->
			  <div class="button__triangle"></div>
	          <div class="reflection"></div>
	      </a>
		  <p class="btn_bottomtext">↑3か月以内に転職したいならココ！↑</p>
	  </div>
</div>


<div class="pic">
    <img src="images/pic_26.png" />
</div>


<!-- <div class="pic_title" id="num01">
	<img src="images/pic_31.png" >
</div>
<div class="flex">
    <div class="flex_img">
        <img src="images/pic_3.png">
    </div>
    <h2 class="flex_text">
        <span class="white">利用者数累計40万人突破</span><br>
        <a  target="_blank">看護のお仕事</a>
    </h2>
</div>

<div class="frame">
  <div class="pic">
      <img class="desc" src="images/pic_30<?=isSP()?'_sp':''?>.png">
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
         	<td>150,000件以上</td>
         </tr>
         <tr>
            <th>サポート</th>
         	<td><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"></td>
         </tr>
     </table>
  </div>
  <div class="text">
	  <div class="pink_title__box">
	  		  <p class="pink_title"><span class="pink_title__text">＼看護のお仕事の特徴／</span></p>
	  </div>
      <p><span><span class="square">■</span></span><span class="red">月給40万、年収600万円超え</span>の高待遇日勤・夜勤の求人が豊富!
      </p>
      <p><span><span class="square">■</span></span><span class="red">LINE</span>でいつでも好きな時間に<span class="red">問合せ・相談が可能!</span>
      </p>
      <p><span><span class="square">■</span>質の高いサポート力と</span><span class="red">我慢強い交渉力</span>が魅力！内部情報を踏まえたアドバイスがもらえる！
      </p>
  </div>
  <div class="text person__box">
	  <h1 class="person__title">看護のお仕事の口コミ</h1>
	  <div class="person__talk__box">
		  <div class="person__talk">
		  		  <div class="person__line person__line__border">
		  			  <div class="person__left">
		  				  <img src="images/person1.png" />
		  				  <p>(東京都・28歳)</p>
		  			  </div>
		  			  <div class="person__right">
		  				  <p>電話とLINEを使って相談に乗ってもらいます。勤務先の雰囲気などの内部の気になることまで担当の方は知っていたのでとても安心できましたし、面接前は事務所で面接対応もじっくりしてもらえてとてもよかったです。</p>
		  			  </div>
		  		  </div>
				  <div class="person__line person__line__border person__line__top">
				  		<div class="person__left">
							<img src="images/person2.png" />
				  		  	<p>(新潟県・35歳)</p>
				  		</div>
				  		<div class="person__right">
				  		  	<p>総合病院で勤務していましたが、人間関係が複雑で、限界が訪れたので転職を決意しました。複数のサイトに登録しましたが、キャリアコンサルタントの対応が「看護のお仕事」が一番良かったです。</p>
				  		</div>
				  </div>
				  <div class="person__line person__line__top">
				  		<div class="person__left">
				  		  	<img src="images/person3.png" />
				  		  	<p>(静岡県・24歳)</p>
				  		</div>
				  		<div class="person__right">
				  		  	<p>日勤のクリニックに転職しました。周囲でも使っている人が多く、生の声の口コミを聞けたので安心して利用できました。今後友人から転職の相談を受けたらオススメしたいサービスです。</p>
				  		</div>
				  </div>
		  </div>
	  </div>
  </div>
  
  <div class="btn_a">
      <a href="https://www.kanngoshi.net/jump/ms_kango-oshigoto.html?lp=lp2&btn_id=4" target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
      今すぐ看護のお仕事に登録
		  <div class="button__triangle"></div>
          <div class="reflection"></div>
      </a>
  </div>
</div> -->


<?php/*
<div class="pic_title" id="num05">
	<img src="images/pic_24.png" >
</div>
<div class="flex">
    <div class="flex_img">
        <img src="images/pic_3.png">
    </div>
    <h2 class="flex_text">
        <span class="white small">看護求人紹介でトップクラスのコンサルタント</span><br>
        <a  target="_blank">Nsキャリア</a>
    </h2>
</div>

<div class="frame">
  <div class="pic">
      <img class="desc Square_pic" src="images/pic_23<?=isSP()?'_sp':''?>.png" style="width:80%;">
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
         	<td>非公開</td>
         </tr>
         <tr>
            <th>サポート</th>
         	<td><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_3.png"></td>
         </tr>
     </table>
  </div>
  <div class="text">
  <div class="pink_title__box">
	  		  <p class="pink_title"><span class="pink_title__text">＼Nsキャリアの特徴／</span></p>
	  </div>
      <p><span><span class="square">■</span><span class="red">オーダーメード求人</span></span>が魅力！転職サポートのプロ集団が求職者の強みを生かせる職場を提案！
      </p>
      <p><span><span class="square">■</span>医療人材業界のサポート</span><span class="red">実績が豊富！</span>医療機関や企業と強い信頼関係を持っている！
      </p>
      <p><span><span class="square">■</span><span class="red">プロのコンサルタント多数在籍！</span></span>求人を出していない好待遇施設への転職もサポート！
      </p>
  </div>
  
  <div class="text person__box">
  	  <h1 class="person__title">Nsキャリアの口コミ</h1>
  	  <div class="person__talk__box">
  		  <div class="person__talk">
  		  		  <div class="person__line person__line__border">
  		  			  <div class="person__left">
  		  				  <img src="images/person3.png" />
  		  				  <p>(三重県・23歳)</p>
  		  			  </div>
  		  			  <div class="person__right">
  		  				  <p>看護師転職に特化した転職サイトなので、とても求人を絞りやすかったです。</p>
  		  			  </div>
  		  		  </div>
  				  <div class="person__line person__line__border person__line__top">
  				  		<div class="person__left">
  							<img src="images/person4.png" />
  				  		  	<p>(福井県・36歳)</p>
  				  		</div>
  				  		<div class="person__right">
  				  		  	<p>オーダーメード求人が魅力に感じました。おかげで理想の転職先に転職を成功させることができたので感謝です。</p>
  				  		</div>
  				  </div>
  				  <div class="person__line person__line__top">
  				  		<div class="person__left">
  				  		  	<img src="images/person5.png" />
  				  		  	<p>(東京都・26歳)</p>
  				  		</div>
  				  		<div class="person__right">
  				  		  	<p>プロのコンサルタントが自分に合った求人だけを紹介してくれたので、ストレスなく転職活動ができました。</p>
  				  		</div>
  				  </div>
  		  </div>
  	  </div>
  </div>
  
  <div class="btn_a">
      <a href="https://www.kanngoshi.net/jump/ms_nscareer.html?lp=lp5&btn_id=4" target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
      Nsキャリア公式サイトに登録
		  <div class="button__triangle"></div>
          <div class="reflection"></div>
      </a>
  </div>
</div>
*/?>

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
  <div class="text">
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
  
  <div class="text person__box">
  	  <h1 class="person__title">医療ワーカーの口コミ</h1>
  	  <div class="person__talk__box">
  		  <div class="person__talk">
  		  		  <div class="person__line person__line__border">
  		  			  <div class="person__left">
  		  				  <img src="images/person4.png" />
  		  				  <p>(香川県・25歳)</p>
  		  			  </div>
  		  			  <div class="person__right">
  		  				  <p>求人の情報量が他の転職サイトより多い印象。</p>
  		  			  </div>
  		  		  </div>
  				  <div class="person__line person__line__border person__line__top">
  				  		<div class="person__left">
  							<img src="images/person5.png" />
  				  		  	<p>(愛知県・28歳)</p>
  				  		</div>
  				  		<div class="person__right">
  				  		  	<p>キャリアアドバイザーの方が頻繁に連絡を取ってくれたので良かったです。</p>
  				  		</div>
  				  </div>
  				  <div class="person__line person__line__top">
  				  		<div class="person__left">
  				  		  	<img src="images/person1.png" />
  				  		  	<p>(神奈川県・31歳)</p>
  				  		</div>
  				  		<div class="person__right">
  				  		  	<p>求人の情報量が多いだけでなく、自己PRや内定辞退の例文コラムがとても参考になりました。</p>
  				  		</div>
  				  </div>
  		  </div>
  	  </div>
  </div>
  
  <div class="btn_a">
      <a href="https://www.kanngoshi.net/jump/ms_iryouworker.html?lp=lp3&button_id=iryouworker1"target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
      高収入の転職なら医療ワーカー
		  <div class="button__triangle"></div>
          <div class="reflection"></div>
      </a>
  </div>
</div> 

<!-- <div class="pic_title" id="num05">
	<img src="./images/pic_49.png" />
</div>
<div class="flex">
    <div class="flex_img">
        <img src="images/pic_3.png">
    </div>
    <h2 class="flex_text">
        <span class="white small">親身で手厚いサポートで高い利用満足度
		</span><br>
        <a class="big"  target="_blank">クラッチナース</a>
    </h2>
</div>

<div class="frame">
  <div class="pic">
      <img class="desc Square_pic" src="images/pic_50<?=isSP()?'_sp':''?>.png" style="width:80%;">
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
         	<td>非公開</td>
         </tr>
         <tr>
            <th>サポート</th>
         	<td><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"></td>
         </tr>
     </table>
  </div>
  <div class="text">
  <div class="pink_title__box">
	  		  <p class="pink_title"><span class="pink_title__text">＼クラッチナースの特徴／</span></p>
	  </div>
      <p><span><span class="square">■</span>年収600万円以上の高年収の</span><span class="red">看護師向けの転職情報が満載！</span>
      </p>
      <p><span><span class="square">■</span>操作簡単！</span><span class="red">たった50秒</span>で好条件の非公開求人を紹介！
      </p>
      <p><span><span class="square">■</span>親見になってサポートしてくれるからコンサルタントさんの</span><span class="red">業績業界No.1!</span>
      </p>
  </div>
  
  <div class="text person__box">
  	  <h1 class="person__title">クラッチナースの口コミ</h1>
  	  <div class="person__talk__box">
  		  <div class="person__talk">
  		  		  <div class="person__line person__line__border">
  		  			  <div class="person__left">
  		  				  <img src="images/person2.png" />
  		  				  <p>(神奈川県・28歳)</p>
  		  			  </div>
  		  			  <div class="person__right">
  		  				  <p>無料でここまでサポートしてくれるのかと驚きでした。転職に対して不安があっただけに、こういった細かいサポートは非常にありがたかったです。</p>
  		  			  </div>
  		  		  </div>
  				  <div class="person__line person__line__border person__line__top">
  				  		<div class="person__left">
  							<img src="images/person3.png" />
  				  		  	<p>(兵庫県・36歳)</p>
  				  		</div>
  				  		<div class="person__right">
  				  		  	<p>転職を考えていましたが、子供が小さいため転職活動の時間をとることがなかなかできませんでした。担当の方がとでも頼りになり私の希望に沿った求人を探してくれました。</p>
  				  		</div>
  				  </div>
  				  <div class="person__line person__line__top">
  				  		<div class="person__left">
  				  		  	<img src="images/person1.png" />
  				  		  	<p>(埼玉県・42歳)</p>
  				  		</div>
  				  		<div class="person__right">
  				  		  	<p>職場の環境に馴染めず、転職先の求人を探している時にこちらを見つけました。自分で探していては、絶対に見つけられなかったと思うのでやはり専門家は違うなと思いました。</p>
  				  		</div>
  				  </div>
  		  </div>
  	  </div>
  </div>
  
  <div class="btn_a">
      <a href="https://www.kanngoshi.net/jump/ms_clutchnurse.html?lp=lp3&btn_id=clutchnurse" target="_blank"<?=isSP()?' style="font-size:4.6vw;"':' style="font-size:45px;"'?>>
      クラッチナース公式サイトに登録
		  <div class="button__triangle"></div>
          <div class="reflection"></div>
      </a>
  </div>
</div> -->

<!-- <div class="pic_title" id="num03">
	<img src="./images/pic_47.png" />
</div>
<div class="flex">
    <div class="flex_img">
        <img src="images/pic_3.png">
    </div>
    <h2 class="flex_text">
        <span class="white">日本最大級看護師の転職サイト</span><br>
        <a  target="_blank">マイナビ看護師</a>
    </h2>
</div>

<div class="frame">
  <div class="pic">
      <img class="desc" src="images/pic_2<?=isSP()?'_sp':''?>.png" class="Square_pic">
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
        	<td>50,000件以上</td>
        </tr>
        <tr>
           <th>サポート</th>
        	<td><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"></td>
        </tr>
     </table>
  </div>
  <div class="text">
	  <div class="pink_title__box">
	  		  <p class="pink_title"><span class="pink_title__text">＼マイナビ看護師の特徴／</span></p>
	  </div>
      <p><span><span class="square">■</span>大手会社の運営だから安心！厳選された</span><span class="red">質の高い非公開求人</span>が豊富！
      </p>
      <p><span><span class="square">■</span>日本全国にある</span><span class="red">事業拠点の数がNo.1！</span>病院、クリニックなど幅広い求人を豊富に扱う！
      </p>
      <p><span><span class="square">■</span>転職先の職場環境・給料を重視！安心と信頼の</span><span class="red">4年連続認知度No.1！</span>
      </p>
  </div>
  
  <div class="text person__box">
  	  <h1 class="person__title">マイナビ看護師の口コミ</h1>
  	  <div class="person__talk__box">
  		  <div class="person__talk">
  		  		  <div class="person__line person__line__border">
  		  			  <div class="person__left">
  		  				  <img src="images/person5.png" />
  		  				  <p>(京都府・34歳)</p>
  		  			  </div>
  		  			  <div class="person__right">
  		  				  <p>求人数が豊富で、さすが大手という感じでした。</p>
  		  			  </div>
  		  		  </div>
  				  <div class="person__line person__line__border person__line__top">
  				  		<div class="person__left">
  							<img src="images/person1.png" />
  				  		  	<p>(東京都・27歳)</p>
  				  		</div>
  				  		<div class="person__right">
  				  		  	<p>サポートの方が、真摯に面接対策や職務経歴書の添削などをしてくれたので助かりました。</p>
  				  		</div>
  				  </div>
  				  <div class="person__line person__line__top">
  				  		<div class="person__left">
  				  		  	<img src="images/person2.png" />
  				  		  	<p>(兵庫県・25歳)</p>
  				  		</div>
  				  		<div class="person__right">
  				  		  	<p>コンサルタントの方が面接に同行してくれたので、有利に交渉できました。</p>
  				  		</div>
  				  </div>
  		  </div>
  	  </div>
  </div>
  
  <div class="btn_a">
      <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&button_id=mynavi-kango" target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
      マイナビ看護師の求人を確認
		  <div class="button__triangle"></div>
          <div class="reflection"></div>
      </a>
  </div>
</div> -->





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
		  <!-- <tr>
		  	 <td class="table__icon__box"><img src="images/num01.png" class="num_pic"></span></td>
		  	 <td class="first__column"><img src="images/company_4.png" title="ナース人材バンク"></td>
		  	 <td class="table__icon__box"><span class="icon"><img src="images/grade_1.png"></span><br><span>4.9</span></td>
		  	 <td class="table__icon__box"><span class="icon"><img src="images/grade_1.png"></span><br><span>210,000</span></td>
			 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/grade_1.png"></span><br><span>多い</span></td>
		  	 <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_nursebank.html?lp=lp2&chart_id=1" class="table_button">公式サイト</a></td>
		  </tr> -->
		  <!-- <tr>
		  	 <td class="table__icon__box"><img src="images/num01.png" class="num_pic"></span></td>
		  	 <td class="first__column"><img src="images/company_5.png" title="看護のお仕事"></td>
		  	 <td class="table__icon__box"><span class="icon"><img src="images/grade_1.png"></span><br><span>4.9</span></td>
		  	 <td class="table__icon__box"><span class="icon"><img src="images/grade_2.png"></span><br><span>150,000</span></td>
				 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/grade_1.png"></span><br><span>多い</span></td>
		  	 <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_kango-oshigoto.html?lp=lp5&chart_id=1" class="table_button">公式サイト</a></td>
		  </tr> -->
			
			<tr>
			 	 <td class="table__icon__box"><img src="images/num01.png" class="num_pic"></span></td>
			   <td class="first__column"><img src="images/company_1.png" title="マイナビ看護師"></td>
			   <td class="table__icon__box"><span class="icon"><img src="images/grade_1.png"></span><br><span>4.9</span></td>
			   <td class="table__icon__box"><span class="icon"><img src="images/grade_2.png"></span><br><span>52,000</span></td>
				 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/grade_1.png"></span><br><span>普通</span></td>
			   <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp5&chart_id=2" class="table_button">公式サイト</a></td>
			</tr>
			
			<tr>
				 <td class="table__icon__box"><img src="images/num02.png" class="num_pic"></span></td>
				 <td class="first__column"><img src="images/company_2.png" title="医療ワーカー"></td>
				 <td class="table__icon__box"><span class="icon"><img src="images/grade_2.png"></span><br><span>4.7</span></td>
			 	 <td class="table__icon__box"><span class="icon"><img src="images/grade_3.png"></span><br><span>非公開</span></td>
				 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/grade_1.png"></span><br><span>多い</span></td>
				 <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_iryouworker.html?lp=lp5&chart_id=3" class="table_button">公式サイト</a></td>
			</tr>
			
			<!-- <tr>
				 <td class="table__icon__box"><img src="images/num03.png" class="num_pic"></span></td>
				 <td class="first__column"><img src="images/company_6.png" title="クラッチナース"></td>
				 <td class="table__icon__box"><span class="icon"><img src="images/grade_1.png"></span><br><span>4.5</span></td>
			 	 <td class="table__icon__box"><span class="icon"><img src="images/grade_2.png"></span><br><span>非公開</span></td>
				 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/grade_1.png"></span><br><span>非公開</span></td>
				 <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_clutchnurse.html?lp=lp3&btn_id=clutchnurse" class="table_button">公式サイト</a></td>
			</tr> --> 
			 
		 <!-- <tr>
		  	 <td class="table__icon__box"><img src="images/num02.png" class="num_pic"></span></td>
		  	 <td class="first__column"><img src="images/company_5.png" title="看護のお仕事"></td>
		  	 <td class="table__icon__box"><span class="icon"><img src="images/grade_1.png"></span><br><span>4.7</span></td>
		  	 <td class="table__icon__box"><span class="icon"><img src="images/grade_2.png"></span><br><span>15,000</span></td>
		  	 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/grade_1.png"></span><br><span>多い</span></td>
		  	 <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_kango-oshigoto.html?lp=lp2&chart_id=2" class="table_button">公式サイト</a></td>
		  </tr> -->
	          
	      <!-- <tr>
			 <td class="table__icon__box"><img src="images/num02.png" class="num_pic"></span></td>
	      	 <td class="first__column"><img src="images/company_3.png" title="Nsキャリア"></td>
	      	 <td class="table__icon__box"><span class="icon"><img src="images/grade_2.png"></span><br><span>4.5</span></td>
	      	 <td class="table__icon__box"><span class="icon"><img src="images/grade_2.png"></span><br><span>90,000</span></td>
			 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/grade_3.png"></span><br><span>普通</span></td>
	      	 <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_nscareer.html?lp=lp5&chart_id=2" class="table_button">公式サイト</a></td>
	      </tr> -->
	      
	   </table>
	</div>
</div>

<div class="main__table SP">
	<div class="main__table__body">
		
		<!-- <table cellpadding="0" cellspacing="0">
		     <tr>
		         <td rowspan="2" class="first__column">
		         <img class="table__icon" src="images/num01.png" alt="1"/><br/><img src="images/company_4.png" title="ナース人材バンク"><br/>
		         </td>
		         <th>総合<br>満足度</th>
		         <th>求人数</th>
		         <th>非公開求人</th>
		     </tr>
		     <tr>
		         <td><span class="icon"><img src="images/grade_1.png"></span><br><span>4.9</span></td>
		         <td><span class="icon"><img src="images/grade_1.png"></span><br><span>210,000</span></td>
		         <td><span class="icon"><img src="images/grade_1.png"></span><br><span>多い</span></td>
		     </tr>
		     <tr>
		         <td colspan="4">
		             <a href="https://www.kanngoshi.net/jump/ms_nursebank.html?lp=lp2&chart_id=1" class="table_button">公式サイト</a>
		         </td>
		     </tr>
		</table> -->
		
		<!-- <table cellpadding="0" cellspacing="0">
		     <tr>
		         <td rowspan="2" class="first__column">
		         <img class="table__icon" src="images/num01.png" alt="1"/><br/><img src="images/company_5.png" title="看護のお仕事"><br/>
		         </td>
		         <th>総合<br>満足度</th>
		         <th>求人数</th>
		         <th>非公開求人</th>
		     </tr>
		     <tr>
		         <td><span class="icon"><img src="images/grade_1.png"></span><br><span>4.9</span></td>
		         <td><span class="icon"><img src="images/grade_2.png"></span><br><span>150,000</span></td>
		         <td><span class="icon"><img src="images/grade_1.png"></span><br><span>多い</span></td>
		     </tr>
		     <tr>
		         <td colspan="4">
		             <a href="https://www.kanngoshi.net/jump/ms_kango-oshigoto.html?lp=lp5&chart_id=1" class="table_button">公式サイト</a>
		         </td>
		     </tr>
		</table> -->
		
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
		             <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp5&chart_id=2" class="table_button">公式サイト</a>
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
		             <a href="https://www.kanngoshi.net/jump/ms_iryouworker.html?lp=lp5&chart_id=3" class="table_button">公式サイト</a>
		         </td>
		     </tr>
		</table>
		
		<!-- <table cellpadding="0" cellspacing="0">
		     <tr>
		         <td rowspan="2" class="first__column">
		         <img class="table__icon" src="images/num03.png" alt="2"/><br/><img src="images/company_6.png" title="クラッチナース"><br/>
		         </td>
		         <th>総合<br>満足度</th>
		         <th>求人数</th>
		         <th>非公開求人</th>
		     </tr>
		     <tr>
		         <td><span class="icon"><img src="images/grade_1.png"></span><br><span>4.5</span></td>
		         <td><span class="icon"><img src="images/grade_2.png"></span><br><span>非公開</span></td>
		         <td><span class="icon"><img src="images/grade_1.png"></span><br><span>非公開</span></td>
		     </tr>
		     <tr>
		         <td colspan="4">
		             <a href="https://www.kanngoshi.net/jump/ms_clutchnurse.html?lp=lp3&btn_id=clutchnurse" class="table_button">公式サイト</a>
		         </td>
		     </tr>
		</table> -->

			 
	   <!-- <table cellpadding="0" cellspacing="0">
	        <tr>
	            <td rowspan="2" class="first__column">
	            <img class="table__icon" src="images/num02.png" alt="1"/><br/><img src="images/company_5.png" title="看護のお仕事"><br/>
	            </td>
	            <th>総合<br>満足度</th>
	            <th>求人数</th>
	            <th>非公開求人</th>
	        </tr>
	        <tr>
	            <td><span class="icon"><img src="images/grade_1.png"></span><br><span>4.7</span></td>
	            <td><span class="icon"><img src="images/grade_2.png"></span><br><span>15,000</span></td>
	            <td><span class="icon"><img src="images/grade_1.png"></span><br><span>多い</span></td>
	        </tr>
	        <tr>
	            <td colspan="4">
	                <a href="https://www.kanngoshi.net/jump/ms_kango-oshigoto.html?lp=lp2&chart_id=2" class="table_button">公式サイト</a>
	            </td>
	        </tr>
	   </table> -->
       
	   <!-- <table cellpadding="0" cellspacing="0">
	        <tr>
	            <td rowspan="2" class="first__column">
	            <img class="table__icon" src="images/num02.png" alt="3"/><br/><img src="images/company_3.png" title="Nsキャリア"><br/>
	            </td>
	            <th>総合<br>満足度</th>
	            <th>求人数</th>
	            <th>非公開求人</th>
	        </tr>
	        <tr>
	            <td><span class="icon"><img src="images/grade_2.png"></span><br><span>4.5</span></td>
	            <td><span class="icon"><img src="images/grade_2.png"></span><br><span>90,000</span></td>
	            <td><span class="icon"><img src="images/grade_3.png"></span><br><span>普通</span></td>
	        </tr>
	        <tr>
	            <td colspan="4">
	                <a href="https://www.kanngoshi.net/jump/ms_nscareer.html?lp=lp5&chart_id=2" class="table_button">公式サイト</a>
	            </td>
	        </tr>
	   </table> -->
	</div>
</div>
<!--pop content start-->
			<div id="pop_img_leave" class="pop_img">
				<a class="pop_img__close" href="javascript:void($('#pop_img_leave').popup('hide'));"><img src="images/pop_img_close.png"/></a>
				<a class="pop_img__link" href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp5&btn_id=pop">
					<img src="images/pop_img_leave2.png"/>
				</a>
			</div>
<!--pop content end-->

<div class="pic c">
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
