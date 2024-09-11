<?php

/** 
 * * Template Name: トップページ
 * @package WordPress
 * @Template Post Type: post, page,
 */
get_header(); ?>

<!-- メインビジュアル -->
<section class="mainVisual">
    <h1 class="mainVisual__title">Shohokan's<br><span class="title__gold">E</span>nglish<br><span class="title__gold">B</span>attle<br><span class="title__gold">R</span>oyale</h1>
</section>

<!-- タイマー -->
<section class="Timer">
<!-- 申し込みリンク -->
<div class="requestLink">
  <div class="requestLink__flex">
    <a class="requestLink__item -guest" href="https://docs.google.com/forms/d/e/1FAIpQLSeN66tRCIuVy8_pssjk8pJMNnZeN5tHjHtCJwJsNybvOeVeBw/viewform" id="js-request-guest" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text">(ゲストの方)<br>　申し込む</p>
    </a>
    <a class="requestLink__item -student" href="https://docs.google.com/forms/d/e/1FAIpQLScj2b2ZH2SKMyr6FCwwrMk-jblrtCCySUv3Il8_u3893Rt24w/viewform" id="js-request-student" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text -student">(門下生)<br>申し込む</p>
    </a>
  </div>
  <a href="#" class="backToTop__button" id="backToTop">↑</a>
</div>

<div class="requestLink -mobile">
  <div class="requestLink__flex -mobile">
    <a class="requestLink__item -guest" href="https://docs.google.com/forms/d/e/1FAIpQLSeN66tRCIuVy8_pssjk8pJMNnZeN5tHjHtCJwJsNybvOeVeBw/viewform" id="js-request-guest"
    target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text">申し込む<br>(ゲストの方)</p>
    </a>
    <a class="requestLink__item -student" href="https://docs.google.com/forms/d/e/1FAIpQLScj2b2ZH2SKMyr6FCwwrMk-jblrtCCySUv3Il8_u3893Rt24w/viewform" id="js-request-student" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text -student">申し込む<br>(門下生)</p>
    </a>
  </div>
  <a href="#" class="backToTop__button -mobile" id="backToTop">↑</a>
</div>
<!-- 申し込みリンクここまで -->

  <div class="Timer__wrap">
  <div class="inner">  
    <h2 class="Timer__title"><span>火花散る！！<br class="Timer__title__spOnly">度肝抜かれる</span><br>決戦まで</h2>
    <div class="Timer__section">
    あと<span class="Timer__text" id="timer-day"></span>日
    <span class="Timer__text" id="timer-hours"></span>時間
    <span class="Timer__text" id="timer-min"></span>分
    <span class="Timer__text" id="timer-sec"></span>秒
  </div>
  <div class="requestWrap">
    <div class="requestInner__line">
  <p class="requestText">EBRに申し込む</p>
  <div class="requestButton__flex">
  <a class="requestButton -guest" href="https://docs.google.com/forms/d/e/1FAIpQLSeN66tRCIuVy8_pssjk8pJMNnZeN5tHjHtCJwJsNybvOeVeBw/viewform" target="_blank" rel="noopener noreferrer">ゲストの方はこちら</a>
  <a class="requestButton -student" href="https://docs.google.com/forms/d/e/1FAIpQLScj2b2ZH2SKMyr6FCwwrMk-jblrtCCySUv3Il8_u3893Rt24w/viewform" target="_blank" rel="noopener noreferrer">門下生はこちら</a>
  </div>
  </div> 
  </div>
  </div>
  </div>
</section>



<!-- About -->
<section class="about" id="about">
  <div class="inner">
      <h2 class="aboutTitle">ABOUT <span>EBR</span></h2>
      <p class="aboutSubTitle -first">
    What's <span>E</span>nglish<span>B</span>attle<span>R</span>oyale(EBR) ?
    </p>
      <div class="aboutFlex -first">
      <div class="aboutContents -first">
      <p class="aboutText">東京・京都(比叡平)に本拠を置く唯一無二の英語道場<br class="pc-only">「升砲館」 <br>
      師匠である館長Shawnの教えのもと今までに多くの<br class="pc-only">「英語の達人」を生み出してきました。</p>
      <p class="aboutText">升砲館門下生の英語を聞いた人は皆<br>
    「え！?あの人英語上手くない！？」<br class="sp-only02">と息巻きます。</p>
    <p  class="aboutText">そんな英語の達人たちが年に1度日頃の稽古の成果を披露する場</p>
    <p class="aboutText">チーム対抗スピーチコンテスト <br class="sp-only01">
    「English Battle Royale」<br class="sp-only02">(通称EBR)</p>
    <p class="aboutText">2つのチームに分かれた門下生が5つの種目にエントリーし優勝をかけて熱戦を繰り広げます。<br>升砲館門下生の話す英語はまさにネイティブそのもの！！<br>その威風堂々とした話しぶりに驚嘆し感動を覚えることでしょう！</p>
    <p class="aboutText">英語、スピーチの概念を一変させる記念すべき1日。ぜひご参加ください！</p>
    </div>
    <div class="aboutImg__box -first">
     <div class="aboutImg -first"></div>
     <div class="aboutImg -second"></div>
     </div>
  </div>

   <p class="aboutSubTitle -second">
    EBRは他のスピーチコンテストとはここが違う！！
  </p>
  <div class="aboutFlex -second">
    <div class="aboutContents">
      <ul class="aboutContents__list">
        <li class="aboutContents__listItem">
          <span>1</span>チーム対抗戦
        <p class="aboutText -second">
          一般的にスピーチと言えば一人で話す「個人戦」が普通。
          <br class="pc-only02">
          EBRでは2チームに分かれて優勝を争う「団体戦」を採用。
          <br class="pc-only02">
          個人の力量に加え、チームワークが試されるEBRは
          <br class="pc-only02">
          普通のスピーチより楽しく、興奮、感動します。
        </p>
        <img class="aboutContents__img" src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-36.jpg')); ?>" alt="コンテスト画像1">
        </li>
        <li class="aboutContents__listItem">
          <span>2</span>多様な競技種目
        <p class="aboutText -second">
          スピーチだけでなく、洋楽をチーム毎に合唱する「歌合戦」や
          <br class="pc-only02">
          有名な洋画の英語を吹き替える「アテレコ」を上映するなど
          <br class="pc-only02">
          多様な競技種目があり、やる方も見る方もみんなが楽しめます。
        </p>
          <!-- 詳細ページリンク -->
          <img class="aboutContents__img" src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-35.jpg')); ?>" alt="コンテスト画像">
    <a class="contestContents__link -about" href="<?php echo esc_url(home_url('/contest')); ?>">競技詳細ページは<br class="sp-only">こちら</a>
        </li>
        <li class="aboutContents__listItem">
          <span>3</span>パーティー
        <p class="aboutText -second">
          コンテストの後はフォーマルパーティー！
          <br class="pc-only02">
          国際基準の振る舞いを楽しく学べる場であり
          <br class="pc-only02">
          色んなバックグラウンドを持つ方々と交流ができます。
        </p>
        <img class="aboutContents__img" src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-37.jpg')); ?>" alt="パーティー画像">
        </li>
      </ul>
    </div>
    <div class="aboutImg__box -second">
    <div class="aboutImg -fourth"></div>
    <div class="aboutImg -third"></div>
    <div class="aboutImg -fifth"></div>
    <div class="aboutImg -sixth"></div>
    </div>
  </div>

  <div class="aboutPictures">
    <ul class="aboutPictures__list">
      <li class="aboutPictures__listItem">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-05.jpg')); ?>" alt="パーティー画像2">
      </li>
       <li class="aboutPictures__listItem">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-15.jpg')); ?>" alt="パーティー画像1">
      </li>
      <li class="aboutPictures__listItem">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-13.jpg')); ?>" alt="パーティー画像3">
      </li>
      <li class="aboutPictures__listItem">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-21.jpg')); ?>" alt="パーティー画像3">
      </li>
      <li class="aboutPictures__listItem">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-18.jpg')); ?>" alt="パーティー画像3">
      </li>
      <li class="aboutPictures__listItem">
        <img src="<?php echo esc_url(get_theme_file_uri('/img/ebr2023-20.jpg')); ?>" alt="パーティー画像3">
      </li>
    </ul>
    <p class="aboutPrice">【参加費】<br>コンテスト＆パーティ：18,000円前後</p>
  </div>
  <div class="requestWrap -about">
    <div class="requestInner__line">
  <p class="requestText -about">EBRに申し込む</p>
  <div class="requestButton__flex -about">
  <a class="requestButton -guest" href="https://docs.google.com/forms/d/e/1FAIpQLSeN66tRCIuVy8_pssjk8pJMNnZeN5tHjHtCJwJsNybvOeVeBw/viewform" target="_blank" rel="noopener noreferrer">ゲストの方はこちら</a>
  <a class="requestButton -student" href="https://docs.google.com/forms/d/e/1FAIpQLScj2b2ZH2SKMyr6FCwwrMk-jblrtCCySUv3Il8_u3893Rt24w/viewform" target="_blank" rel="noopener noreferrer">門下生はこちら</a>
  </div>
  </div>
  </div>
  </div>
</section>

<!-- 昨年の声 -->
<section class="impression">
  <div class="impression__bg"></div>
  <h2 class="impression__title">VOICEs</h2>
  <p class="impression__subTitle">昨年参加された方々の感想</p>
  <div class="impressionWords">
    <p class="impressionWords__item -first">その雰囲気と感動はその場でしか味わえない、まさにアメージング！</p>
    <p class="impressionWords__item -second">EBR1ヶ月後、母国語のように英語が喋れるようになりました🎵</p>
    <p class="impressionWords__item -third">単なる英語発表会じゃない、英語文化を体現する場がそこに在った。興奮した！</p>
    <p class="impressionWords__item -fourth">ペア競技のスタバ、最初は全く噛み合わなかったのに、本番では意外と肝が座っていて、うまくぶっ放せた！</p>
     <p class="impressionWords__item -fifth">EBRに向けた稽古で上手くなること間違いなし!</p>
     <p class="impressionWords__item -sixth">ステージの上でプレゼンなんて、、、と言っていた門下生が本番で輝いていて、素敵だった！！！</p>
     <p class="impressionWords__item -seventh">執行部はじめ門下生全員で準備したEBRが成功し、とても嬉しかった!!</p>
     <p class="impressionWords__item -eight">EBRに向けての集中稽古や自主練習を通して、英語が自分のものになっていく感覚がありました。本番は夢のような時間でした。忘れられない一日となりました。</p>
     <p class="impressionWords__item -ninth">笑いあり涙ありで感動の一日でした!!</p>
     <p class="impressionWords__item -tenth">みんなが人前で堂々とネイティブのように英語を話す姿を見て感動しました！改めて升砲館は凄いなと思いましたし、一員で入れて嬉しかったです！！</p>
  </div>
</section>


<!-- ShowDown -->
<div class="showDown__bar">
      <div class="showDown__barWrap">
        <div class="showDown__Flex">
          <p class="showDown__barTitle -first">Team<br class="sp-only"> H. Blacks</p>
          <p class="showDown__barTitle -second">VS</p>
          <p class="showDown__barTitle -third">Team<br class="sp-only02"> e-Go!</p> 
        </div>
        <div class="showDown__barImg"></div>
      <div class="showDown__barImg -second"></div>

      <div class="showDown__barImg -third"></div>
      </div>
</div>

<section class="showDown__Description">
  <div class="inner">
    <h2 class="showDown__title">連覇か!!王座奪還か!?</h2>
    <div class="showDown__textRight">
      <div class="showDown__textWrap">
    <p class="showDown__text -first">昨年のEBRで大接戦の末<br>見事優勝を果たしたTeam e-Go!<br>今年はさらなる上達を目論み、<br>リーダーSherryを筆頭に<br>メンバー全員が貪欲に猛稽古に励む。<br>昨年よりパワーアップした<br>Team e-Go!は前回王者のプライド
    <br>を胸に大会連覇を狙う。<br>
    ２度目の大輪の華を<br class="sp-only">咲かせることができるか！？</p>
    </div>
    <div class="showDown__DescriptionImg"></div>
    </div>

    <div class="showDown__textLeft">
      <div class="showDown__textWrap">
    <p class="showDown__text -second">対して僅かの差で優勝を逃した<br>Team H. Blacks<br>
    このまま黙っていられない！<br>
    リーダーKirkを中心に想いは一つ。<br>
    昨年の悔しさをバネに<br class="sp-only02">今年こそはとリベンジを誓う。<br>
    持ち前の腹黒さで虎視眈々と優勝を狙う。<br>
    1年間の稽古の成果を発揮し<br>
    見事王座奪還となるか！？
    </p>
</div>
<div class="showDown__DescriptionImg -second"></div>
    </div>
  </div>
</section>

<!-- 当日のスケジュール -->
<section class="timeTable" id="timetable">
  <div class="inner">
    <div class="timeTable__contents">
  <div class="timeTable__wrap">
    <div class="timeTable__outline">
      <div class="timeTable__inline">
         <h2 class="timeTableTitle" data-en="当日の流れ">TIME TABLE</h2>
         <p class="timeTable__subTitle">当日の流れ(仮)</p>
         <ul class="timeTable__list">
          <li class="timeTable__listItem">15:00 開場</li>
          <li class="timeTable__listItem">15:10 開会の挨拶</li>
          <li class="timeTable__listItem">15:20 競技種目①(個人)<span>引用文の音読</span></span></li>
          <li class="timeTable__listItem">15:50 競技種目②(個人)<span>Delivery = ぶっ放す</span></span></li>
          <li class="timeTable__listItem">16:10 競技種目③(団体)<span>音節分化即時対応</span></span></li>
          <li class="timeTable__listItem">休憩</li>
          <li class="timeTable__listItem">17:00 競技種目④(団体)<span>チーム対抗歌合戦</span></span></li>
          <li class="timeTable__listItem">17:30 競技種目⑤(個人)<span>アテレコ</span></spaN></li>
          <li class="timeTable__listItem">18:00 競技種目⑥(個人)<span>ビデオレター</span></spaN></li>
          <li class="timeTable__listItem">18:30 〜 21:00<span>パーティー</span></spaN></li>
         </ul>

        <!-- 詳細ページリンク -->
    <a class="contestContents__link" href="<?php echo esc_url(home_url('/contest')); ?>">競技詳細ページは<br class="sp-only">こちら</a>
      </div>
    </div>

  </div>
  </div>
  </div>
</section>


<!-- Topics -->
<section class="topics" id="topics">

<?php  
$paged = (get_query_var('paged')) ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);
$args = [
  'page_type' => 'post',
  'posts_per_page' => 3,
  'order' => 'DESC',
  'paged' => $paged
];
$the_query = new WP_Query($args);
?>

  <div class="inner">
  <h2 class="topicsTitle" data-en="お知らせ">TOPICs</h2>
  <div class="topicsSubTitle">お知らせ</div>
  <?php if($the_query -> have_posts()) : ?>
    
    <ul class="topicsPost__list">
    <?php while($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <li class="topicsPost__listItem">
    <a class="topicsPost__listLink" href="<?php the_permalink(); ?>">
    <?php if(has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('thumbnail',['class' => 'topicsPost__img']) ?>
    <?php else: ?>
        <img class="topicsPost__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ebr2023-33.png" alt="代替画像">
    <?php endif; ?>
    <div class="topicsPost__wrap">
    <div class="topicsPost__flex">
      <div class="topicsPost__date"><?php echo get_the_date('Y.m.d') ?></div>
      <?php  
        $custom_author = get_post_meta(get_the_ID(), 'custom_author_name',true);
        if($custom_author) : 
        ?>
        <div class="topicsPost__author">投稿者: <?php echo esc_html($custom_author); ?></div>
        <?php else : ?>
        <div class="topicsPost__author">投稿者: <?php the_author(); ?></div>
        <?php endif; ?>
      </div>
      <div class="topicsPost__title">
        <?php $title = get_the_title(); 
        if(mb_strlen($title) > 27){
          echo mb_strimwidth($title,0,40,'...');
        } else {
          echo esc_html($title);
        }
        ?>
      </div>
      </div>
    </a>
    </li>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    </ul>

    <!-- ページネーション -->
    <div class="galleryArchive__pagination">
      <?php  
      echo paginate_links(array(
        'total' => $the_query ->max_num_pages,
        'current' => max(1,get_query_var('paged')),
        'prev_text' => __('←'),
        'next_text' => __('→'),
      ));
      ?>
    </div>

    <?php else: ?>
      <p class="topicsPost__noPost">まだ投稿はありません。</p>
  <?php endif; ?>
  </div>
</section>


<!-- Gallery -->
<section class="gallery" id="gallery">
  <div class="inner">
    <h2 class="galleryTitle" data-en="画像集">GALLERY</h2>
    <p class="gallery__text">過去開催の写真</p>

<div class="galleryImg__list">
  <?php  
  $args = array(
    'post_type' => 'gallery',
    'posts_per_page' => 6,
    'orderby' => 'rand'//ランダムに表示
  );
  $gallery_query = new WP_Query($args);

  if($gallery_query->have_posts()) : 
    while($gallery_query->have_posts()) : $gallery_query->the_post();
    if(has_post_thumbnail()) :
  
  ?>
  <div class="galleryImg__listItem">
  <?php the_post_thumbnail('full',array('class'=>'')); ?>
  </div>
<?php  
endif;
endwhile;
wp_reset_postdata();
else :
?>
</div>
<p>ギャラリー写真はありません</p>
<?php endif; ?>
  </div>
  <p class="galleryImg__listItem__text">※クリックで拡大できます</p>
  <a class="galleryImg__link" href="<?php echo esc_url(home_url('/gallerylist')) ?>">写真をもっと見る</a>

  <!-- モーダル -->
  <div class="modal" id="imageModal" >
    <div class="modal__wrap">
     <span class="modal__close">&times;</span>
    <img class="modal__content" id="modalImage">
    <div id="caption"></div>
    </div>
  </div>

</section>

<!-- Access -->
<section class="access" id="access">
  <div class="inner">
    <h2 class="accessTitle">ACCESS</h2>
    <div class="accessSubTitle">開催場所</div>
    <h3 class="accessText">Coming Soon(東京都内予定)</h3>
    <div class="accessMap">
    <!-- <iframe class="accessMap_google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.5029226342294!2d139.70695837543224!3d35.66461667259268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca04352d389%3A0xa1e1b2faef4fa15e!2z6Z2S5bGxIOOCu-ODs-ODiOOCsOODrOODvOOCueWkp-iBluWggg!5e0!3m2!1sja!2sjp!4v1717992624529!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    </div>
  </div>
</section>



<!-- フッター -->
<?php get_footer(); ?>
