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
<!--<link href="../../lpa/css/index.css" type="text/css" rel="stylesheet" />-->
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="/js/jquery.scrollTo.min.js"></script>
<?php
require_once('../header_code.php');
?>
<?php
function isSP(){
    if(preg_match('/mobile/i', $_SERVER['HTTP_USER_AGENT']) && !preg_match("/ipad/i", $_SERVER['HTTP_USER_AGENT'])){
      return true;
    } else {
      return false;
    }
  }
?>
</head>
<body>

<div class="search_form" style="margin-top:10px;">
<?php
	if(isSP()){
		require_once('search_form_sp.php');
	} else {
		require_once('search_form_pc.php');
	}
?>
</div>
    <div class="result_title">
        <h1>転職サイト・転職エージェント検索結果</h1>
        <p>＞＞<span>2件</span>該当がありました＜＜</p>
    </div>
    <?php
        $result_str = isset($_GET['work']) ? $_GET['work'] : '1';
        if($result_str == '3') {
			// require_once('kangooshikoto.php');
			require_once('iryouworker.php');
			// require_once('kangolifework.php');	
			require_once('mynavikango.php');		
			
			
			// require_once('nscareer.php');
            
        } else if($result_str == '4') {
			// require_once('kangooshikoto.php');
			require_once('iryouworker.php');
			// require_once('kangolifework.php');
			require_once('mynavikango.php');			
			
			
			// require_once('nscareer.php');
            
        } else {
			// require_once('kangooshikoto.php');
			require_once('iryouworker.php');
			// require_once('kangolifework.php');
			require_once('mynavikango.php');			
			
			
			// require_once('nscareer.php');
        }
    ?>
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