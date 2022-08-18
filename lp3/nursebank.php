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
                    <img class="logo" src="images/pic_15.png" alt="ナース人材バンク"/>
                    <br/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/>
               </td>
               <td class="pink">200,000件</td>
               <td class="pink">600万以上</td>
               <td class="pink" rowspan="3"><img src="images/pic_19_black.png"/>4.9</td>
            </tr>
            <tr>
                <th colspan="2">全国対応</th>
            </tr>
            <tr>
                <td colspan="2" class="pink">東京/千葉/神奈川/埼玉/静岡/愛知/岐阜/大阪/京都/兵庫/奈良</td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="result_text">
                        <p>■ 信頼度が高い転職サービス！<span class="red">年間10万人以上</span>の看護師が利用するから安心！</p>
                        <p>■ 看護師業界の転職実績は業界トップクラス!利用者の転職後の<span class="red">満足度が97％以上！</span></p>
                        <p>■ キャリアアドバイザーが<span class="red">しっかりサポート！</span>スピーディーかつ詳細は情報収集が得意！</p>
                        <a class="result_btn" href="/jump/ms_nursebank.html?lp=lp3&search_id=nursebank">公式ページはこちら</a>
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
                    <img class="logo" src="images/pic_15.png" alt="ナース人材バンク"/>
                    <br/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/>
               </td>
               <td class="pink">200,000件</td>
               <td class="pink">600万以上</td>
               <td class="pink">東京/千葉/神奈川/埼玉/静岡/愛知/岐阜/大阪/京都/兵庫/奈良</td>
               <td class="pink"><img src="images/pic_19_black.png"/>4.9</td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="result_text">
                        <p>■ 信頼度が高い転職サービス！<span class="red">年間10万人以上</span>の看護師が利用するから安心！</p>
                        <p>■ 看護師業界の転職実績は業界トップクラス!利用者の転職後の<span class="red">満足度が97％以上！</span></p>
                        <p>■ キャリアアドバイザーが<span class="red">しっかりサポート！</span>スピーディーかつ詳細は情報収集が得意！</p>
                        <a class="result_btn" href="/jump/ms_nursebank.html?lp=lp3&search_id=nursebank">公式ページはこちら</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <?php } ?>