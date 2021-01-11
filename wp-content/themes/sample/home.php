<?php
/* 
Template Name: Home page
*/
?>

<!-- header -->
<?php get_header(); ?>

<!-- menu -->
<?php get_template_part('content', 'menu'); ?>

<!-- メインコンテンツ -->
<div id="main">

    <!-- トップバナー -->
    <img src="img/top-baner.png" id="top-baner">

    <!-- ABOUT -->
    <section id="about" class="site-width">
        <h1 class="title">ABOUT</h1>
        <p>
            <?php echo get_post_meta($post->ID, 'about', true); ?>
        </p>
    </section>

    <!-- MERIT -->
    <section id="merit" class="site-width">
        <h1 class="title">MERIT</h1>
        <section class="panel">
            <h2>高給が期待できる！</h2>
            <p>
                T業界では、時給3000円、4000円は当たり前の世界です。<br /> 使うプログラミング言語や任されるポジションによっても変わりますが、
                PHP言語の開発なら月40万円〜、Java言語の開発なら月50万円〜という具合。 <br />収入をUPさせたいと思っている方にはとても理想的な環境です。
            </p>
        </section>
        <section class="panel">
            <h2>WEBサービスを作るための全てがある！</h2>
            <p>
                WEBプログラミングを学ぶ上で大変な事は「調べる」という作業です。<br />
                また、一つのサイトだけで全ての知識が得られないため、他のサイトを調べたり、教則本を色々買ってみたりととても非効率。<br /> しかし、「ウェブカツ!!」
                ではこのサイト１つでWEBサービスを作るための全ての知識を得られるため、とても効率的に学ぶことが出来ます。
            </p>
        </section>
        <section class="panel">
            <h2>起業に必要なことまで学べる！</h2>
            <p>
                起業に必要なのは総合力です。起業したての頃は一人で全てをこなすことになります。 プログラミング、デザイン、マーケティング、営業スキル。
                オールマイティーに全てが出来なければいけません。 ウェブカツ!!では、実際のIT起業家から集客方法・マーケティング、営業メソッドまで全て学ぶことが出来ます。
            </p>
        </section>
    </section>

    <!-- RECRUIT -->
    <section id="recruit" class="site-width">
        <table>
            <thead>
                <tr>
                    <th class="color1">RECRUIT</th>
                    <th>ウェブカツ!!講師募集</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>業務内容</th>
                    <td>プログラミング教育動画の作成・ホームページの制作</td>
                </tr>
                <tr>
                    <th>資格・経験</th>
                    <td>HTML,CSS,PHPを学んだ事がある人なら、業務経験がなくても構いません！</td>
                </tr>
                <tr>
                    <th>お給料</th>
                    <td>お気持ちだけで</td>
                </tr>
                <tr>
                    <th>勤務地</th>
                    <td>自宅で構いません</td>
                </tr>
                <tr>
                    <th>選考方法</th>
                    <td>メールでお問合せ頂いた後にSkype電話にてお話させて頂きます。</td>
                </tr>
                <tr>
                    <th>応募方法</th>
                    <td>メールでご応募ください。</td>
                </tr>
                <tr>
                    <th>応募先</th>
                    <td>info@webukatu.com</td>
                </tr>
            </tbody>
        </table>
    </section>

</div>

<!-- footer -->
<?php get_footer(); ?>