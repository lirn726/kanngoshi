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
                    <img class="logo" src="images/pic_17.png" alt="マイナビ看護師"/>
                    <br/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/>
               </td>
               <td class="pink">52,000件</td>
               <td class="pink">600万以上</td>
               <td class="pink" rowspan="3"><img src="images/pic_19_black.png"/>4.7</td>
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
                        <p>■ 大手会社の運営だから安心！厳選された<span class="red">質の高い非公開求人</span>が豊富！</p>
                        <p>■ 日本全国にある<span class="red">事業拠点の数がNo.1！</span>病院、クリニックなど幅広い求人を豊富に扱う！</p>
                        <p>■ 転職先の職場環境・給料を重視！安心と信頼の<span class="red">4年連続認知度No.1！</span></p>
                        <a class="result_btn" href="/jump/ms_mynavi-kango.html?lp=lp1&search_id=mynavi-kango">公式ページはこちら</a>
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
                    <img class="logo" src="images/pic_17.png" alt="マイナビ看護師"/>
                    <br/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/><img src="images/pic_3_2.png"/>
               </td>
               <td class="pink">52,000件</td>
               <td class="pink">600万以上</td>
               <td class="pink">全国</td>
               <td class="pink"><img src="images/pic_19_black.png"/>4.7</td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="result_text">
                        <p>■ 大手会社の運営だから安心！厳選された<span class="red">質の高い非公開求人</span>が豊富！</p>
                        <p>■ 日本全国にある<span class="red">事業拠点の数がNo.1！</span>病院、クリニックなど幅広い求人を豊富に扱う！</p>
                        <p>■ 転職先の職場環境・給料を重視！安心と信頼の<span class="red">4年連続認知度No.1！</span></p>
                        <a class="result_btn" href="/jump/ms_mynavi-kango.html?lp=lp1&search_id=mynavi-kango">公式ページはこちら</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <?php } ?>