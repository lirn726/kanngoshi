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
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<meta name="description" content="今よりよい職場に働こう！絶対成功できる介護転職エージェントご紹介。初めて転職の方、ミスマッチを恐れがある方、今よりよい条件で仕事したい方におすすめ。求人数・求人の質から完全比較。あなたにぴったりの介護転職サイト必ず見つかる。" />
<meta name="keywords" content="介護転職,おすすめ,エージェント,ランキング,介護レポ,マイナビ介護,ココカイゴ,ウェルクルーエージェント" />
<title>高収入・高待遇の求人必ず見つかる介護転職エージェント大紹介</title>
<link href="/css/style.css" type="text/css" rel="stylesheet" />
<link href="css/index.css" type="text/css" rel="stylesheet" />
<!--<link href="../../lpa/css/index.css" type="text/css" rel="stylesheet" />-->
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="/js/jquery.scrollTo.min.js"></script>

<?php
require_once('../header_code.php');
?>

</head>
<body>

 <!-- <div class="pic" id="head" style="margin-bottom:0;">
    <img src="images/TOP1_1.png" />
</div> -->
<!-- <div class="pic">
    <img src="images/TOP1_2.png" />
</div>

<div class="pic">
    <img src="images/TOP2.png" />
</div>

<div class="pic">
    <img src="images/TOP3.png" />
</div> -->
<div class="pic" id="head" style="margin-bottom:0;">
    <img src="images/TOP4.png" />
</div>




<div class="pic">
    <img src="images/pic_2.png" />
</div>

<div class="noframe">
    <div class="content_box">
        <div class="content_box_img">
            <img src="images/pic_2_1.png">
        </div>
        <div class="content_box_text">
		複数の転職サイトを利用しよう！　 　 
            <br>
            <span class="pink">＜最低2サイトへの登録がおすすめ！＞</span>
        </div>
    </div>
    <div class="content_box">
        <div class="content_box_img">
            <img src="images/pic_2_1.png">
        </div>
        <div class="content_box_text">
        今すぐ環境の良い職場に転職しよう！
            <br>
            <span class="pink">＜すぐ転職できる方向けの高待遇案件が多い＞</span>
        </div>
    </div>
    <div class="content_box">
        <div class="content_box_img">
            <img src="images/pic_2_1.png">
        </div>
        <div class="content_box_text">
        お給料重視なら日勤・夜勤両方チェック
            <br>
            <span class="pink">＜給与が大幅アップするコツは日勤+夜勤勤務＞</span>
        </div>
    </div>
    <div class="content_box">
        <div class="content_box_img">
            <img src="images/pic_2_1.png">
        </div>
        <div class="content_box_text">
        サポート担当としっかり相談！
            <br>
            <span class="pink">＜担当者の初回連絡対応で転職成功率UP！＞</span>
        </div>
    </div>
</div>

<div class="main__table PC">
	<div class="main__table__body">
	   <table  border="0" cellpadding="0" cellspacing="0">
	      <tr>
	         <th class="first__column"><span class="tabe__title__pc">転職サイト名</span><span class="tabe__title__sp">転職<br>サイト名</span></th>
	      			 <th class="table__icon__box"><span class="tabe__title__pc">総合満足度</span><span class="tabe__title__sp">総合<br>満足度</span></th>
	      			 <th class="table__text__box"><span class="tabe__title__pc">特徴</span><span class="tabe__title__sp">特徴</span></th>
	      			 <th class="table__icon__box"><span class="tabe__title__pc">求人数</span><span class="tabe__title__sp">求人数</span></th>
	      			 <!-- <th class="table__icon__box"><span class="tabe__title__pc">非公開求人</span><span class="tabe__title__sp">非公開<br>求人</span></th> -->
					 <th class="table__icon__box tabe__pc"><span>非公開求人</span></th>
	      			 <th class="last__column"><span class="tabe__title__pc">詳細</span><span class="tabe__title__sp">詳細</span></th>
	      </tr>
         
	      <tr>
	      	 <td class="first__column"><img src="images/pic_17.png" title="マイナビ看護師"></td>
	      	 <td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>4.9</span></td>
	      			 <td class="table__text__box"><p class="table__text"><span>4年連続認知度</span><span>No.1!</span>質の高い求人を紹介</p></td>
	      	 <td class="table__icon__box"><span class="icon"><img src="images/pic_20.png"></span><br><span>52,000</span></td>
	      	 <!-- <td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>多い</span></td> -->
			 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/pic_19.png"></span><br><span>多い</span></td>
	      	 <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&chart_id=mynavi-kango">詳細</a></td>
	      </tr>
	      <tr>
	      	<td class="first__column"><img src="images/pic_15.png" title="ナース人材バンク"></td>
	      	<td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>4.7</span></td>
	      			<td class="table__text__box"><p class="table__text"><span>転職満足度97</span><span>%!</span>求人数が圧倒的に多い</p></td>
	      	<td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>210,000</span></td>
	      	<!-- <td class="table__icon__box"><span class="icon"><img src="images/pic_20.png"></span><br><span>多い</span></td> -->
			<td class="table__icon__box tabe__pc"><span class="icon"><img src="images/pic_20.png"></span><br><span>多い</span></td>
	      	<td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&chart_id=mynavi-kango">詳細</a></td>
	      </tr>
		  <!-- <tr>
		    <td class="first__column"><img src="images/pic_14.png" title="看護のお仕事"></span></td>
		  	<td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>4.6</span></td>
		  			<td class="table__text__box"><p class="table__text"><span>業界最大級求人数！</span>高待遇の日勤・夜勤求人豊富</p></td>
		  	<td class="table__icon__box" class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>150,000</span></td>
		  	<!** <td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>多い</span></td> **>
		      <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/pic_20.png"></span><br><span>多い</span></td>
		  	<td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_kango-oshigoto.html?chart_id=kangonooshigoto">詳細</a></td>
		  </tr>
	      <tr> -->
	      	 <td class="first__column"><img src="images/pic_16.png" title="医療ワーカー"></td>
	      	 <td class="table__icon__box"><span class="icon"><img src="images/pic_20.png"></span><br><span>4.3</span></td>
	      			 <td class="table__text__box"><p class="table__text">月給40万円以上の求人多数！<span>大幅年収UP可能</span></p></td>
	       	 <td class="table__icon__box"><span class="icon"><img src="images/pic_20.png"></span><br><span>90,000</span></td>
	      	 <!-- <td class="table__icon__box"><span class="icon"><img src="images/pic_21.png"></span><br><span>普通</span></td> -->
	      			 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/pic_19.png"></span><br><span>多い</span></td>
	      	 <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&chart_id=mynavi-kango">詳細</a></td>
	      </tr>        
	      <tr>
	      	 <td class="first__column"><img src="images/pic_22.png" title="Nsキャリア"></td>
	      	 <td class="table__icon__box"><span class="icon"><img src="images/pic_21.png"></span><br><span>4.0</span></td>
	      			 <td class="table__text__box"><p class="table__text">登録者限定の<span>非公開求人数がトップクラス</span></p></td>
	      	 <td class="table__icon__box"><span class="icon"><img src="images/pic_21.png"></span><br><span>非公開</span></td>
	      	 <!-- <td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>多い</span></td> -->
			 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/pic_20.png"></span><br><span>普通</span></td>
	      	 <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&chart_id=mynavi-kango">詳細</a></td>
	      </tr>
	      
	   </table>
	</div>
</div>


<div class="main__table SP">
	<div class="main__table__body">
	   <table  border="0" cellpadding="0" cellspacing="0">
	      <tr>
	         <th class="first__column"><span class="tabe__title__pc">転職サイト名</span><span class="tabe__title__sp">転職<br>サイト名</span></th>
	      			 <th class="table__icon__box"><span class="tabe__title__pc">総合満足度</span><span class="tabe__title__sp">総合<br>満足度</span></th>
	      			 <th class="table__text__box"><span class="tabe__title__pc">特徴</span><span class="tabe__title__sp">特徴</span></th>
	      			 <th class="table__icon__box"><span class="tabe__title__pc">求人数</span><span class="tabe__title__sp">求人数</span></th>
	      			 <!-- <th class="table__icon__box"><span class="tabe__title__pc">非公開求人</span><span class="tabe__title__sp">非公開<br>求人</span></th> -->
					 <th class="table__icon__box tabe__pc"><span>非公開求人</span></th>
	      			 <!-- <th class="last__column"><span class="tabe__title__pc">詳細</span><span class="tabe__title__sp">詳細</span></th> -->
	      </tr>
         
	      <tr>
	      	 <td class="first__column"><img src="images/pic_17.png" title="マイナビ看護師"><a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&chart_id=mynavi-kango">詳細</a></td>
	      	 <td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>4.9</span></td>
	      			 <td class="table__text__box"><p class="table__text"><span>4年連続認知度</span><span>No.1!</span>質の高い求人を紹介</p></td>
	      	 <td class="table__icon__box"><span class="icon"><img src="images/pic_20.png"></span><br><span>52,000</span></td>
	      	 <!-- <td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>多い</span></td> -->
			 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/pic_19.png"></span><br><span>多い</span></td>
	      	 <!-- <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?chart_id=mynavi-kango">詳細</a></td> -->
	      </tr>
	      <tr>
	      	<td class="first__column"><img src="images/pic_15.png" title="ナース人材バンク"><a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&chart_id=mynavi-kango">詳細</a></td>
	      	<td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>4.7</span></td>
	      			<td class="table__text__box"><p class="table__text"><span>転職満足度97</span><span>%!</span>求人数が圧倒的に多い</p></td>
	      	<td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>210,000</span></td>
	      	<!-- <td class="table__icon__box"><span class="icon"><img src="images/pic_20.png"></span><br><span>多い</span></td> -->
			<td class="table__icon__box tabe__pc"><span class="icon"><img src="images/pic_20.png"></span><br><span>多い</span></td>
	      	<!-- <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_nursebank.html?chart_id=nursebank">詳細</a></td> -->
	      </tr>
		  <!-- <tr>
		    <td class="first__column"><img src="images/pic_14.png" title="看護のお仕事"><a href="https://www.kanngoshi.net/jump/ms_kango-oshigoto.html?chart_id=kangonooshigoto">詳細</a></span></td>
		  	<td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>4.6</span></td>
		  			<td class="table__text__box"><p class="table__text"><span>業界最大級求人数！</span>高待遇の日勤・夜勤求人豊富</p></td>
		  	<td class="table__icon__box" class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>150,000</span></td>
		  	<** <td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>多い</span></td> **>
		      <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/pic_20.png"></span><br><span>多い</span></td>
		  	<** <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_kango-oshigoto.html?chart_id=kangonooshigoto">詳細</a></td> **>
		  </tr> -->
	      <tr>
	      	 <td class="first__column"><img src="images/pic_16.png" title="医療ワーカー"><a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&chart_id=mynavi-kango">詳細</a></td>
	      	 <td class="table__icon__box"><span class="icon"><img src="images/pic_20.png"></span><br><span>4.3</span></td>
	      			 <td class="table__text__box"><p class="table__text">月給40万円以上の求人多数！<span>大幅年収UP可能</span></p></td>
	       	 <td class="table__icon__box"><span class="icon"><img src="images/pic_20.png"></span><br><span>90,000</span></td>
	      	 <!-- <td class="table__icon__box"><span class="icon"><img src="images/pic_21.png"></span><br><span>普通</span></td> -->
	      			 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/pic_19.png"></span><br><span>多い</span></td>
	      	 <!-- <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_iryouworker.html?chart_id=iryouworker1">詳細</a></td> -->
	      </tr>        
	      <tr>
	      	 <td class="first__column"><img src="images/pic_22.png" title="Nsキャリア"><a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&chart_id=mynavi-kango">詳細</a></td>
	      	 <td class="table__icon__box"><span class="icon"><img src="images/pic_21.png"></span><br><span>4.0</span></td>
	      			 <td class="table__text__box"><p class="table__text">登録者限定の<span>非公開求人数がトップクラス</span></p></td>
	      	 <td class="table__icon__box"><span class="icon"><img src="images/pic_21.png"></span><br><span>非公開</span></td>
	      	 <!-- <td class="table__icon__box"><span class="icon"><img src="images/pic_19.png"></span><br><span>多い</span></td> -->
			 <td class="table__icon__box tabe__pc"><span class="icon"><img src="images/pic_20.png"></span><br><span>普通</span></td>
	      	 <!-- <td class="last__column"><a href="https://www.kanngoshi.net/jump/ms_nscareer.html?chart_id=nscareer">詳細</a></td> -->
	      </tr>
	      
	   </table>
	</div>
</div>



<div class="pic_title">
	<img src="./images/pic_18.png" />
</div>
<div class="flex">
    <div class="flex_img">
        <img src="images/pic_3.png">
    </div>
    <h2 class="flex_text">
        <span class="white">日本最大級看護師の転職サイト</span><br>
        <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&chart_id=mynavi-kango" target="_blank">マイナビ看護師
</a>
    </h2>
</div>

<div class="frame">
  <div class="pic">
      <img class="desc" src="images/pic_4<?=isSP()?'_sp':''?>.png" class="Square_pic">
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
      <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&chart_id=mynavi-kango" target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
      マイナビ看護師の求人を確認
<!--		  <i class="fas fa-chevron-circle-right"></i>-->
		  <div class="button__triangle"></div>
          <div class="reflection"></div>
      </a>
  </div>
</div>


<div class="pic_title">
	<img src="./images/pic_11.png" />
</div>
<div class="flex">
    <div class="flex_img">
        <img src="images/pic_3.png">
    </div>
    <h2 class="flex_text">
        <span class="white small">厚生労働省認可で安心！求人数が圧倒的に多い</span><br>
        <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&chart_id=mynavi-kango" target="_blank">ナース人材バンク</a>
    </h2>
</div>

<div class="frame">
  <div class="pic">
      <img class="desc" src="images/pic_8<?=isSP()?'_sp':''?>.png" class="Square_pic">
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
         	<td>200,000件以上</td>
         </tr>
         <tr>
            <th>サポート</th>
         	<td><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"><img src="images/pic_3_2.png"></td>
         </tr>
     </table>
  </div>
  <div class="text">
	  <div class="pink_title__box">
	  		  <p class="pink_title"><span class="pink_title__text">＼ナース人材バンクの特徴／</span></p>
	  </div>
      <p><span><span class="square">■</span>信頼度が高い転職サービス！</span><span class="red">年間10万人以上</span>の看護師が利用するから安心！
      </p>
      <p><span><span class="square">■</span>看護師業界の転職実績は業界トップクラス!利用者の転職後の</span><span class="red">満足度が97％以上！</span>
      </p>
      <p><span><span class="square">■</span>キャリアアドバイザーが</span><span class="red">しっかりサポート！</span>スピーディーかつ詳細は情報収集が得意！
      </p>
  </div>
  
  <div class="text person__box">
  	  <h1 class="person__title">ナース人材バンクの口コミ</h1>
  	  <div class="person__talk__box">
  		  <div class="person__talk">
  		  		  <div class="person__line person__line__border">
  		  			  <div class="person__left">
  		  				  <img src="images/person4.png" />
  		  				  <p>(大阪府・25歳)</p>
  		  			  </div>
  		  			  <div class="person__right">
  		  				  <p>他の転職サイトと、比較すると転職先が細かく検索できるように設定されていて使いやすかったです。</p>
  		  			  </div>
  		  		  </div>
  				  <div class="person__line person__line__border person__line__top">
  				  		<div class="person__left">
  							<img src="images/person5.png" />
  				  		  	<p>(福島県・29歳)</p>
  				  		</div>
  				  		<div class="person__right">
  				  		  	<p>在職中だったので忙しかったのですが、面接日の調整や給与面の交渉などを代わりに行ってくれた。</p>
  				  		</div>
  				  </div>
  				  <div class="person__line person__line__top">
  				  		<div class="person__left">
  				  		  	<img src="images/person1.png" />
  				  		  	<p>(東京都・37歳)</p>
  				  		</div>
  				  		<div class="person__right">
  				  		  	<p>スタッフの対応が心地よく、サポートが手厚いことがとても好印象です。</p>
  				  		</div>
  				  </div>
  		  </div>
  	  </div>
  </div>
  
  <div class="btn_a">
      <a href="https://www.kanngoshi.net/jump/ms_nursebank.html?button_id=nursebank" target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
      満足度の高いナース人材バンク
<!--		  <i class="fas fa-chevron-circle-right"></i>-->
		  <div class="button__triangle"></div>
          <div class="reflection"></div>
      </a>
  </div>
</div>


<!-- <a name="mynavi"></a> -->
<!-- <div class="pic_title">
	<img src="images/pic_25.png" >
</div>
<div class="flex">
    <div class="flex_img">
        <img src="images/pic_3.png">
    </div>
    <h2 class="flex_text">
        <span class="white">利用者数累計40万人突破</span><br>
        <a href="https://www.kanngoshi.net/jump/ms_kango-oshigoto.html?text_id=kangonooshigoto" target="_blank">看護のお仕事</a>
    </h2>
</div>

<div class="frame">
  <div class="pic">
      <img class="desc" src="images/pic_10<?=isSP()?'_sp':''?>.png">
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
      <p><span><span class="square">■</span>研修が充実している求人が多い！</span>
      <span class="red">スキルや経験不足</span>で自身がない人に丁寧に対応！
      </p>
      <p><span><span class="square">■</span>求人数は業界最大級！</span>
      <span class="red">高待遇の日勤・夜勤の非公開求人</span>が豊富！
      </p>
      <p><span><span class="square">■</span>質の高いサポート力と</span>
      <span class="red">我慢強い交渉力</span>が魅力！内部情報を踏まえたアドバイスがもらえる！
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
		  				  <p>サポートの方がとても親切に相談に乗ってくれたので安心して転職活動を進めることができました。また、対応が迅速なのも好印象でした。</p>
		  			  </div>
		  		  </div>
				  <div class="person__line person__line__border person__line__top">
				  		<div class="person__left">
							<img src="images/person2.png" />
				  		  	<p>(新潟県・35歳)</p>
				  		</div>
				  		<div class="person__right">
				  		  	<p>求人の質が高いと感じました。サポートの方から転職先の内部情報も含めてとても的確なアドバイスを頂くことができて満足です。</p>
				  		</div>
				  </div>
				  <div class="person__line person__line__top">
				  		<div class="person__left">
				  		  	<img src="images/person3.png" />
				  		  	<p>(静岡県・24歳)</p>
				  		</div>
				  		<div class="person__right">
				  		  	<p>求人の量が豊富で自分にマッチした職場に転職することができました。</p>
				  		</div>
				  </div>
		  </div>
	  </div>
  </div>
  
  <div class="btn_a">
      <a href="https://www.kanngoshi.net/jump/ms_kango-oshigoto.html?button_id=kangonooshigoto" target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
      今すぐ看護のお仕事に登録
		  <div class="button__triangle"></div>
          <div class="reflection"></div>
      </a>
  </div>
</div> -->



<div class="pic_title">
	<img src="./images/pic_12.png" />
</div>
<div class="flex">
    <div class="flex_img">
        <img src="images/pic_3.png">
    </div>
    <h2 class="flex_text">
        <span class="white">看護師からの支持率4年連続No.1
		</span><br>
        <a class="big" href="https://www.kanngoshi.net/jump/ms_iryouworker.html?text_id=iryouworker1" target="_blank">医療ワーカー</a>
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
      <a href="https://www.kanngoshi.net/jump/ms_iryouworker.html?button_id=iryouworker1"target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
      高収入の転職なら医療ワーカー
<!--		  <i class="fas fa-chevron-circle-right"></i>-->
		  <div class="button__triangle"></div>
          <div class="reflection"></div>
      </a>
  </div>
</div>





<div class="pic_title">
	<img src="images/pic_24.png" >
</div>
<div class="flex">
    <div class="flex_img">
        <img src="images/pic_3.png">
    </div>
    <h2 class="flex_text">
        <span class="white small">看護求人紹介でトップクラスのコンサルタント</span><br>
        <a href="https://www.kanngoshi.net/jump/ms_nscareer.html?text_id=nscareer" target="_blank">Nsキャリア</a>
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
      <a href="https://www.kanngoshi.net/jump/ms_nscareer.html?button_id=nscareer" target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
      Nsキャリア公式サイトに登録
		  <div class="button__triangle"></div>
          <div class="reflection"></div>
      </a>
  </div>
</div>





<div class="pic">
    <img src="images/pic_6.png">
</div>
<div class="block_text">
    <div>
        <h3><span class="linear-pink">求人の質が高い転職エージェントを選ぶ！</span></h3>
        <p>
        看護師求人サイトを選ぶときは、まず<span class="pink">求人数の多さを比較するのが重要なポイントです。</span><br />
		また、求人の質も大事で、実績のある転職サイトを選ぶことで、転職サイト選びの失敗を避けることが可能です。
        </p>
    </div>
    <div>
        <h3><span class="linear-pink">コンサルタントの転職サポート力をチェック！</span></h3>
        <p>
        看護師求人サイトを選ぶ際は、アドバイザーの質も重要なポイントです。<br />
		<span class="pink">「希望を聞いてくれる」、「コミュニケーションが取りやすい」</span>など自分のペースに合わせてくれるコンサルタントに出会うことで、希望に合った転職先が早く見つけることができます。
        </p>
    </div>
    <div>
        <h3><span class="linear-pink">複数の転職サイトを利用して成功率UP！</span></h3>
        <p>
        複数の求人サイトを見ることで自分の希望の条件に合った職場を探し出すことが出来ます！<br />
		少なくとも<span class="pink">2社の登録</span>をおすすめします。
        </p>
    </div>
</div>


<div class="pic">
    <img src="images/pic_7.png">
</div>


<div class="flex">
    <div class="flex_img">
        <img src="images/pic_3.png">
    </div>
    <h2 class="flex_text">
        <span class="white">日本最大級看護師の転職サイト</span><br>
        <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&chart_id=mynavi-kango" target="_blank">マイナビ看護師
</a>
    </h2>
</div>

<div class="frame">
  <div class="pic">
      <img class="desc" src="images/pic_4<?=isSP()?'_sp':''?>.png" class="Square_pic">
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
      <a href="https://www.kanngoshi.net/jump/ms_mynavi-kango.html?lp=lp3&chart_id=mynavi-kango" target="_blank"<?=isSP()?' style="font-size:5vw;"':''?>>
      マイナビ看護師の求人を確認
<!--		  <i class="fas fa-chevron-circle-right"></i>-->
		  <div class="button__triangle"></div>
          <div class="reflection"></div>
      </a>
  </div>
</div>



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
