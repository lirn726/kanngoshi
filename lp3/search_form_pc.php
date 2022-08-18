<?php
$prefecture = array(
    '1' => '北海道',
    '2' => '青森県',
    '3' => '岩手県',
    '4' => '宮城県',
    '5' => '秋田県',
    '6' => '山形県',
    '7' => '福島県',
    '8' => '茨城県',
    '9' => '栃木県',
    '10' => '群馬県',
    '11' => '埼玉県',
    '12' => '千葉県',
    '13' => '東京都',
    '14' => '神奈川県',
    '15' => '新潟県',
    '16' => '富山県',
    '17' => '石川県',
    '18' => '福井県',
    '19' => '山梨県',
    '20' => '長野県',
    '21' => '岐阜県',
    '22' => '静岡県',
    '23' => '愛知県',
    '24' => '三重県',
    '25' => '滋賀県',
    '26' => '京都府',
    '27' => '大阪府',
    '28' => '兵庫県',
    '29' => '奈良県',
    '30' => '和歌山県',
    '31' => '鳥取県',
    '32' => '島根県',
    '33' => '岡山県',
    '34' => '広島県',
    '35' => '山口県',
    '36' => '徳島県',
    '37' => '香川県',
    '38' => '愛媛県',
    '39' => '高知県',
    '40' => '福岡県',
    '41' => '佐賀県',
    '42' => '長崎県',
    '43' => '熊本県',
    '44' => '大分県',
    '45' => '宮崎県',
    '46' => '鹿児島県',
    '47' => '沖縄県',
);
$occupation = array(
    '1' => '指定なし',
    '2' => '正看護師',
    '3' => '准看護師',
    '4' => '助産師',
    '5' => '保健師'
);
$work = array(
    '1' => '指定なし',
    '2' => '常勤',
    '3' => '非常勤',
    '4' => 'パート',
    '5' => 'その他'
);
$facility = array(
    '1' => '病院',
    '2' => 'クリニック',
    '3' => '介護施設',
    '4' => 'その他'
)
?>

<!-- search form start -->
<script>
function showHide(id){
    $('div.search_body tr.ctr').hide();
    $('div.search_body tr.c' + id).show();

    $('div.search_body a.a').removeClass('a_on');
    $('div.search_body a.a' + id).addClass('a_on');
}
$(document).ready(function(){
                //search radio init
                var input = $('#f .search_body input');
                for(var i=0 ; i<input.length ; i++){
                    if(input.eq(i).filter(":checked").length > 0){
                        input.eq(i).parent().addClass('check');
                    }
                }
                //search radio click
                $('#f .search_body input').bind( "click", function() {
                    var input = $('#f .search_body input');

                    for(var i=0 ; i<input.length ; i++){
                        if(input.eq(i).filter(":checked").length > 0){
                            input.eq(i).parent().addClass('check');
                        } else {
                            input.eq(i).parent().removeClass('check');
                        }
                    }

                });
            });
</script>
<?php
if(isset($_GET['prefecture']) && array_key_exists($_GET['prefecture'], $prefecture)) {
    $i_1 = $_GET['prefecture'];
} else {
    $i_1 = '0';
}
if(isset($_GET['occupation']) && array_key_exists($_GET['occupation'], $occupation)) {
    $i_2 = $_GET['occupation'];
} else {
    $i_2 = '1';
}
if(isset($_GET['work']) && array_key_exists($_GET['work'], $work)) {
    $i_3 = $_GET['work'];
} else {
    $i_3 = '1';
}
if(isset($_GET['facility']) && array_key_exists($_GET['facility'], $facility)) {
    $i_4 = $_GET['facility'];
} else {
    $i_4 = '1';
}
?>
<form id="f" method="get" action="/ms/lp3/search_result.php">
   <div class="search_title">
       <img src="/ms/lp1/images/icon_2.png" /> 詳細条件で選ぶ転職支援サービス
   </div>
   <div class="search_body">
        <table width="100%" cellpadding="0" cellspacing="5">
            <tr>
                <th>地域</th>
                <td>
                    <select name="prefecture" class="w100p h30">
                        <option value="">選択してください</option>
                        <?php
                            foreach($prefecture as $key => $val) {
                                echo "<option value='$key'" . (($i_1 == $key)?'selected':'') .">$val</option>\n";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>雇用形態</th>
                <td>
                    <?php
                        $i = 1;
                        foreach($occupation as $key => $val) {
                            echo "<label><input type='radio' name='occupation' value='$key' ". (($i==$i_2)?'checked':'') . ">$val</label>\n";
                            $i++;
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <th>職種</th>
                <td>
                    <?php
                        $i = 1;
                        foreach($work as $key => $val) {
                            echo "<label><input type='radio' name='work' value='$key' ". (($i==$i_3)?'checked':'') . ">$val</label>\n";
                            $i++;
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <th>施設形態</th>
                <td>
                    <?php
                        $i = 1;
                        foreach($facility as $key => $val) {
                            echo "<label><input type='radio' name='facility' value='$key' ". (($i==$i_4)?'checked':'') . ">$val</label>\n";
                            $i++;
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <div class="search_footer">
        <input type="image" src="/ms/lp1/images/search_btn.png" class="search_btn" />
    </div>
</form>
<!-- search form end -->
