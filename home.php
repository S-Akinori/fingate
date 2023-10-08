<?php
$args = array(
  'post_type' => 'menus', // カスタム投稿タイプの名前
  'posts_per_page' => -1, // すべての投稿を表示する場合
  'tax_query' => array(
    array(
      'taxonomy' => 'menus-cat', // カスタムタクソノミーの名前
      'field'    => 'slug',
      'terms'    => 'sushi-roulette', // タームのスラッグ
    ),
  ),
);

$menus = get_posts($args);
?>
<?php get_header(); ?>
<div class="c-fv">
  <div class="c-fv__text">
    <span class="text-7xl font-bold">CREATING</span><br>
    <span class="text-6xl font-bold">A COMMUNITY</span><br>
    <span class="text-xl font-bold">WHERE PEOPLE COME AND GROW TOGETHER</span>
  </div>
</div>
<div class="p-top-blogs">
  <div class="p-top-blog c-blog-list-container">
    <div class="c-blog-list-container__titles">
      <div class="c-blog-list-container__title">NEWS</div>
      <div><a href="">一覧 ></a></div>
    </div>
    <div class="c-blog-list">
      <div class="c-blog-list__item">
        <div class="c-blog-list__item__image">
          <img src="<?= get_template_directory_uri() . '/assets/images/logo2.png' ?>" alt="">
        </div>
        <div class="c-blog-list__item__text">
          <div class="c-blog-list__item__text__date">2023.10.12</div>
          <div class="c-blog-list__item__text__title"><a href="">ウェブサイトをリニューアルしました。</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-top-blog c-blog-list-container">
    <div class="c-blog-list-container__titles">
      <div class="c-blog-list-container__title !text-accent">EVENT</div>
      <div><a href="">一覧 ></a></div>
    </div>
    <div class="c-blog-list">
      <div class="c-blog-list__item">
        <div class="c-blog-list__item__image">
          <img src="<?= get_template_directory_uri() . '/assets/images/logo2.png' ?>" alt="">
        </div>
        <div class="c-blog-list__item__text">
          <div class="c-blog-list__item__text__date">2023.10.12</div>
          <div class="c-blog-list__item__text__title"><a href="">イベント情報を公開しました。</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="c-section bg-gray">
  <div class="c-en-title">MISSION</div>
  <img class="absolute right-0 bottom-0 w-1/2 max-w-2xl" src="<?= get_template_directory_uri() . '/assets/images/image-mission.png' ?>" alt="">
  <h2 class="c-title">MISSION</h2>
  <p class="c-section__text md:w-1/2">多様な属性・立場の人が、同じチャレンジャーとして出会う”場”づくりを通し、「人が集い、投資と成長がうまれる」”コミュニティ”を創造する。</p>
  <a class="c-button" href="">FinGATEについて</a>
</section>
<section class="c-section">
  <div class="c-imageText">
    <div class="c-imageText__wrapper">
      <div class="c-imageText__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt="" />
      </div>
    </div>
    <div class="c-imageText__wrapper md:p-8">
      <div class="c-en-title">SERVICE</div>
      <h3 class="c-title">SERVICE</h3>
      <div class="font-bold">
        <p> ”FinGATE”は、資産運用会社・フィンテック等の金融系スタート
          アップを中心に、あらゆる起業家・スタートアップの起業・成長を
          支えるプラットフォームです。</p>
        <p>「オフィス」「インキュベーション」「コミュニティ」の運営を通じ、
          創業からその後の成長までをサポートいたします。</p>
      </div>
    </div>
  </div>
  <div class="c-imageText c-imageText--reverse">
    <div class="c-imageText__wrapper">
      <div class="c-imageText__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office.png" alt="" />
      </div>
    </div>
    <div class="c-imageText__wrapper md:p-8">
      <div class="c-imageText__enTitle">OFFICE</div>
      <h3 class="c-imageText__title">OFFICE</h3>
      <div class="">
        <p> 創業期のコワーキングスペースから、数名から数十名まで入居可能な個室オフィス、入退去の手間なく利用が可能なセットアップオフィス等、スタートアップの成長に併せたオフィス環境を提供しております。2023年10月時点では、5施設100社以上の受入可能なオフィスを提供しており、安全なセキュリティ環境から、リラックスできるラウンジ・コミュニティスぺース、100名以上で利用可能な専用のイベントスペース等、成長を支えるための場を提供しております。</p>
      </div>
    </div>
  </div>
  <div class="c-imageText">
    <div class="c-imageText__wrapper">
      <div class="c-imageText__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/incubation.png" alt="" />
      </div>
    </div>
    <div class="c-imageText__wrapper md:p-8">
      <div class="c-imageText__enTitle">INCUBATION</div>
      <h3 class="c-imageText__title">INCUBATION</h3>
      <div class="">
        <p>FinGATEでは、平和不動産が連携するベンチャーキャピタルによる「アクセラレータープログラム」の運営が行われており、創業前からシード期のスタートアップを対象にその起業・成長を支援しております。また、弁護士・税理士・行政書士法人やコンサル・金融情報ベンダー等、多様なパートナー企業と連携し、専門分野のプロフェッショナルの紹介から各社サービスの導入支援を行っております。</p>
      </div>
    </div>
  </div>
  <div class="c-imageText c-imageText--reverse">
    <div class="c-imageText__wrapper">
      <div class="c-imageText__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/community.png" alt="" />
      </div>
    </div>
    <div class="c-imageText__wrapper md:p-8">
      <div class="c-imageText__enTitle">COMMUNITY</div>
      <h3 class="c-imageText__title">COMMUNITY</h3>
      <div class="">
        <p>FinGATEのコミュニティには、投資家・スタートアップ・行政機関・大手企業等が参加しており、コミュニティ参加者はコミュニティラウンジの利用や、限定のイベント・交流会への参加を通じ、参加者同士のマッチングを促進。コミュニティへの参加には、オフィスへの入居又は「FinGATE CLUB」という無償の招待制会員制度に登録することで参加が可能です。</p>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>