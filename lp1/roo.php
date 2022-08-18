<?php if(isSP()) { ?>
    <div class="result_table">
        <table cellspacing=<?=isSP()?'0':'5'?>>
            <tr>
                <th>転職サイト</th>
                <th>求人数</th>
                <th>年収</th>
                <th>総合評価</th>
            </tr>
            <tr>
               <td class="company" rowspan="4">
                    <img class="logo" src="images/pic_28.png" alt="マイナビ看護師"/>
                    <br/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/>
               </td>
               <td class="pink">80,000件</td>
               <td class="pink">600万以上</td>
               <td class="pink" rowspan="3"><img src="images/pic_19_black.png"/>4.9</td>
            </tr>
            <tr>
                <th colspan="2">全国対応</th>
            </tr>
            <tr>
                <td colspan="2" class="pink">全国</td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="result_text">
                        <p>■ <span class="red">年収600万以上や年休130日以上</span>の好条件優良求人豊富！最短で年収アップできる!</p>
                        <p>■ <span class="red">業界No.1の紹介実績！</span>大企業が10年以上運営しているから安心！<span class="red">利用者満足度97％以上!</span></p>
                        <p>■ 求人紹介はもちろん、<span class="red">履歴書の添削・面接対策、条件交渉</span>までのサポートが素晴らしい!</p>
                        <a class="result_btn" href="https://www.kanngoshi.net/jump/ms_kangoroo.html??lp=lp1&search_id=kangoroo">公式ページはこちら</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
<?php } else { ?>
<div class="result_table">
        <table cellspacing=<?=isSP()?'0':'5'?>>
            <tr>
                <th>転職サイト</th>
                <th>求人数</th>
                <th>年収</th>
                <th>全国対応</th>
                <th>総合評価</th>
            </tr>
            <tr>
               <td class="company" rowspan="2">
                    <img class="logo" src="images/pic_28.png" alt="マイナビ看護師"/>
                    <br/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/>
               </td>
               <td class="pink">80,000件</td>
               <td class="pink">600万以上</td>
               <td class="pink">全国</td>
               <td class="pink"><img src="images/pic_19_black.png"/>4.9</td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="result_text">
                        <p>■ <span class="red">年収600万以上や年休130日以上</span>の好条件優良求人豊富！最短で年収アップできる!</p>
                        <p>■ <span class="red">業界No.1の紹介実績！</span>大企業が10年以上運営しているから安心！<span class="red">利用者満足度97％以上!</span></p>
                        <p>■ 求人紹介はもちろん、<span class="red">履歴書の添削・面接対策、条件交渉</span>までのサポートが素晴らしい!</p>
                        <a class="result_btn" href="https://www.kanngoshi.net/jump/ms_kangoroo.html??lp=lp1&search_id=kangoroo">公式ページはこちら</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
<?php } ?>