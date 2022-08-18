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
                    <img class="logo" src="images/pic_22.png" alt="Nsキャリア"/>
                    <br/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_3.png"/>
               </td>
               <td class="pink">90,000件</td>
               <td class="pink">500万以上</td>
               <td class="pink" rowspan="3"><img src="images/pic_19_black.png"/>4.1</td>
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
                        <p>■ <span class="red">オーダーメード求人</span>が魅力！転職サポートのプロ集団が求職者の強みを生かせる職場を提案！</p>
                        <p>■ 医療人材業界のサポート<span class="red">実績が豊富！</span>医療機関や企業と強い信頼関係を持っている！</p>
                        <p>■ <span class="red">プロのコンサルタント多数在籍！</span>求人を出していない好待遇施設への転職もサポート！</p>
                        <a class="result_btn" href="/jump/ms_nscareer.html?lp=lp1&search_id=nscareer">公式ページはこちら</a>
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
                    <img class="logo" src="images/pic_22.png" alt="Nsキャリア"/>
                    <br/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_3.png"/>
               </td>
               <td class="pink">90,000件</td>
               <td class="pink">500万以上</td>
               <td class="pink">全国</td>
               <td class="pink"><img src="images/pic_19_black.png"/>4.1</td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="result_text">
                        <p>■ <span class="red">オーダーメード求人</span>が魅力！転職サポートのプロ集団が求職者の強みを生かせる職場を提案！</p>
                        <p>■ 医療人材業界のサポート<span class="red">実績が豊富！</span>医療機関や企業と強い信頼関係を持っている！</p>
                        <p>■ <span class="red">プロのコンサルタント多数在籍！</span>求人を出していない好待遇施設への転職もサポート！</p>
                        <a class="result_btn" href="/jump/ms_nscareer.html?lp=lp1&search_id=nscareer">公式ページはこちら</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
<?php } ?>