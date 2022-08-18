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
                    <img class="logo" src="images/pic_16.png" alt="医療ワーカー"/>
                    <br/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_3.png"/>
               </td>
               <td class="pink">非公開</td>
               <td class="pink">500万以上</td>
               <td class="pink" rowspan="3"><img src="images/pic_19_black.png"/>4.6</td>
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
                        <p>■ 圧倒的な求人数、非公開求人がスゴイ！<span class="red">8万件以上</span>の非公開求人を保有！！</p>
                        <p>■ 高年収・好条件の求人が多い！<span class="red">月給40～50万円以上</span>の求人が多数、年収大幅アップで転職できる！</p>
                        <p>■ 応援ナース（応援看護師制度）のサービスを提供！<span class="red">短期間・高収入</span>で勤務するサービスを提供！</p>
                        <a class="result_btn" href="/jump/ms_iryouworker.html?lp=lp1&search_id=iryouworker1">公式ページはこちら</a>
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
                    <img class="logo" src="images/pic_16.png" alt="医療ワーカー"/>
                    <br/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_3.png"/>
               </td>
               <td class="pink">非公開</td>
               <td class="pink">500万以上</td>
               <td class="pink">全国</td>
               <td class="pink"><img src="images/pic_19_black.png"/>4.6</td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="result_text">
                        <p>■ 圧倒的な求人数、非公開求人がスゴイ！<span class="red">8万件以上</span>の非公開求人を保有！！</p>
                        <p>■ 高年収・好条件の求人が多い！<span class="red">月給40～50万円以上</span>の求人が多数、年収大幅アップで転職できる！</p>
                        <p>■ 応援ナース（応援看護師制度）のサービスを提供！<span class="red">短期間・高収入</span>で勤務するサービスを提供！</p>
                        <a class="result_btn" href="/jump/ms_iryouworker.html?lp=lp1&search_id=iryouworker1">公式ページはこちら</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <?php } ?>