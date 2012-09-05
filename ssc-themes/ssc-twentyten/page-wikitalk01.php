<?php
/**
 * Template Name: ss Contest - Promotion
 */
get_header( 'promotion' );
?>
<?php if ($_GET["register"] == true) {?>

<iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dEM4TGtjWEhRQ2piMmpqU01paGdGQWc6MQ" width="940" height="1348" frameborder="0" marginheight="0" marginwidth="0" style="margin:40px;">로드 중...</iframe>

<?php } else { ?>
<aside id="left-aside-area">
	<h2 class="sprite sprite-title_01" style="margin: 30px 0 0 40px;" alt="title" ></h2>
	<h3 class="sprite sprite-title_02" style="margin: 20px 0 0 40px;" alt="title" ></h3>
	<a href="<?php echo add_query_arg('register', 'true'); ?>" id="register-small" class="sprite" alt="register_small"></a>
	<div id="tree-image" class="sprite sprite-img02" style="margin: 56px 0 0 -1px;"></div>
	<div class="sprite sprite-img03" style="margin: 42px 0 0 -1px;"></div>
	<table id="story-info-table">
		<tr class="height140 align-top">
			<td style="width:160px; padding-top: 15px;"><span class="x-strong">토크 하나,</span><br />듣고 생각하기</td>
			<td style="padding-top: 15px;"><span class="x-strong">위키토크</span> @삶터</td>
		</tr>
		<tr class="height139 align-top">
			<td></td>
			<td style="padding-top: 15px;"><span class="x-strong">위키토크</span> @교육</td>
		</tr>
		<tr class="height140 align-top thick-above-border">
			<td style="padding-top: 15px;"><span class="x-strong">토크 둘,</span><br />생각한 것 말하기</td>
			<td style="padding-top: 15px;"><span class="x-strong">위키토크</span> @시민마당</td>
		</tr>
	</table>
</aside>
<aside id="right-aside-area">
	<div class="sprite sprite-img01" style="margin: 300px 0 0 -190px;"></div>
	<table id="corp-info-table">
		<tr style="height: 64px">
			<td>
				<p class="sprite sprite-txt_05" alt="주최"></p>
				<p class="right-table-desc strong">서울시</p>
			</td>
		</tr>
		<tr style="height: 146px;" class="right-table-tr-border">
			<td>
				<p class="sprite sprite-txt_06" alt="주관"></p>
				<p class="right-table-desc strong">(사)서울사회적경제네트워크<br />하자센터<br />씨즈<br />사회연대은행<br />세스넷</p>
			</td>
		</tr>
		<tr style="height: 225px;" class="right-table-tr-border">
			<td>
				<p class="sprite sprite-txt_07" alt="협력"></p>
				<p class="right-table-desc strong">함께일하는재단<br />희망제작소<br />(사)마을<br />(사)사회적기업 중앙협의회<br />&nbsp;&nbsp;&nbsp;&nbsp;서울지부<br />한국지역자활센터협회<br />시민사회단체연대회의<br />Co-up<br />더 체인지</p>
			</td>
		</tr>
		<tr style="height: 64px;" class="right-table-tr-border">
			<td>
				<p class="sprite sprite-txt_08" alt="후원"></p>
				<p class="right-table-desc strong">Daum, 쌈지농부</p>
			</td>
		</tr>
		<tr style="height: 86px;" class="right-table-tr-border">
			<td>
				<p class="sprite sprite-txt_09" alt="문의"></p>
				<p class="right-table-desc strong">wikiseoul@gmail.com<br />02-2031-2127</p>
			</td>
		</tr>
	</table>
	<table id="empty-area-table">
		<tr style="height:280px;" class="align-top">
			<td><div class="sprite sprite-txt_12_" alt="강연자는 변경될 수 있습니다."></div></td>
		</tr>
		<tr class="thick-above-border align-top" style="height:139px;">
			<td><div class="sprite sprite-txt_13_" alt="이야기꾼 추후 공개"></div></td>
		</tr>
	</table>
</aside>
<section id="contents-area">
	<article id="desc-article">
		<h2 class="sprite sprite-txt_01" alt="wiki talk @__는"></h2>
		<p style="margin-top: 31px;">달팽이도 집이 있는데 집 구하기가 하늘에 별 따기인 우리,<br />먹고 사는 문제에 치여, 정다운 이웃을 그리워하는 우리,<br />야자와 학원에 지친 아이들을 안쓰러워하는 우리,<br />아이들이 행복한 참교육을 찾고 있는 우리,</p>
		<br />
		<p class="strong" >우리 모두가 모여 함께 대화를 나누고 삶터와 교육의 문제를<br />해결하기 위한 오픈컨퍼런스입니다.</p>
	</article>
	<table id="contest-info-table">
		<tr>
			<td style="height:181px;">
				<p class="sprite sprite-txt_02" alt="언제"></p>
				<p class="content-table-desc">2012.09.22 (토) 오후 02:00 ~ 06:30</p>
			</td>
		</tr>
		<tr>
			<td>
				<p class=" sprite sprite-txt_03" alt="어디서"></p>
				<p class="content-table-desc">하자센터 - 영등포시장역 근처</p>
			</td>
		</tr>
		<tr>
			<td>
				<p class="sprite sprite-txt_04" alt="신청"></p>
				<p class="content-table-desc">2012.09.05(수) ~ 09.19(수)<br />총230석 (선착순)<br />참가비 : 가벼운 마음으로 아이디어 하나 제안하기</p>
			</td>
		</tr>
	</table>
	<div id="how-flag" style="float:left;margin-top: 90px;"></div>
	<table id="contest-public-table">
		<tr>
			<td class="public-table-order">1</td>
			<td class="public-table-person-wrap"><span class="public-table-person">박원순</span><br /><span class="public-table-position">서울시장</span></td>
			<td class="public-table-subject">서울 삶터 2.0을 위하여</td>
		</tr>
		<tr class="right-table-tr-border">
			<td class="public-table-order">2</td>
			<td class="public-table-person-wrap"><span class="public-table-person">유호근</span><br /><span class="public-table-position">희망동네 사무국장</span></td>
			<td class="public-table-subject">마을에서 살다 - 희망동네에서 살아가기</td>
		</tr>
		<tr class="right-table-tr-border">
			<td class="public-table-order">1</td>
			<td class="public-table-person-wrap"><span class="public-table-person">조한혜정</span><br /><span class="public-table-position">연세대 문화인류학과 교수</span></td>
			<td class="public-table-subject">서울 교육 2.0을 위하여</td>
		</tr>
		<tr class="right-table-tr-border">
			<td class="public-table-order">2</td>
			<td class="public-table-person-wrap"><span class="public-table-person">김경옥</span><br /><span class="public-table-position">대안교육공간 민들레 대표</span></td>
			<td class="public-table-subject">6000 독자의 힘 - 함께 살리는 교육 민들레</td>
		</tr>
		<tr class="thick-above-border contest-public-table-rest" style="height:139px;">
			<td colspan="3">
				강연 후 관심주제별 시민 "위키토크@시민마당"진행<br /><br /><span class="x-strong">참여시민 지침서</span><br />하나, 토크하나와 둘 모두가 끝날 때까지 중간에 자리를 떠나지 않기<br />둘, 이야기꾼과 즐거운 이야기 나누기<br />셋, 원할 경우 현장에서 이야기꾼이 되어 시민들과 이야기 나누기
			</td>
		</tr>
	</table>
</section>
<div class="clear"></div>
<section id="register-area">
	<a href="<?php echo add_query_arg('register', 'true'); ?>" id="register-big" class="sprite" alt="register_big"></a>
	<p class="sprite sprite-txt_10" style="margin:auto;margin-top:27px;margin-bottom:47px;"></p>
</section>
<?php } ?>

<?php get_footer( 'promotion' ); ?>
