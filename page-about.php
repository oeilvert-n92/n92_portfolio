<?php
/**
 * Template Name: Profile
 */
get_header();
?>

<main>


    <section class="left-container">
        <?php get_sidebar(); ?>
    </section>

    <section class="right-container">
        <div class="detail__box about">
            <article class="detail__text-area">
                <h1><?php the_title(); ?></h1>

                <article class="first-block">
                    <p class="profile-greeting">こんにちは、<span class="profile-name" aria-label=""></span>と申します。</p>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var nameTarget = document.querySelector('.profile-name');
                            if (!nameTarget) {
                                return;
                            }

                            var familyNameCodes = [26449, 36234];
                            var givenNameCodes = [33756, 22830];
                            var yomiCodes = [12416, 12425, 12371, 12375, 32, 12394, 12362];
                            var familyName = String.fromCharCode.apply(null, familyNameCodes);
                            var givenName = String.fromCharCode.apply(null, givenNameCodes);
                            var yomi = String.fromCharCode.apply(null, yomiCodes);
                            var name = familyName + ' ' + givenName + '（' + yomi + '）';

                            var strong = document.createElement('strong');
                            strong.textContent = name;
                            strong.setAttribute('aria-label', name);
                            strong.setAttribute('data-name', name);

                            nameTarget.replaceWith(strong);
                        });
                    </script>
                    <p>デザイン（Web・UI/UX・DTPなど）を中心に、Web開発やディレクションの仕事をしています。</p>
                </article>

                <article class="profile-block">

                    <figure class="prof01_img">
                        <img
                            src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/prof01.jpg' ); ?>"
                            alt="顔写真01"
                        >
                    </figure>

                    <figure class="prof02_img">
                        <img
                            src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/prof02.jpg' ); ?>"
                            alt="顔写真02"
                        >
                    </figure>

                    <div class="prof_text">
                        <h2>profile</h2>
                        <p>湘南地域で生まれ育ち、現在は東京都国分寺市に住んでいます。</p>
                        <p>2013年よりデザインの仕事を始めました。ITコンサルティング会社・介護施設向けのSaaS開発会社、人材派遣・紹介会社を経験し、現在は採用・バックオフィスの代行会社でインハウスデザイナーをしつつ、直近ではマーケティング施策のディレクションにも携わっています。</p>
                        <p>課題解決のためには何が最適なのか、チームメンバーと目線を合わせて一緒に考えていくことを大切にしています。</p>
                    </div>

                </article>

                <article class="strengths-block">

                    <h2>Strengths</h2>

                    <ol>

                        <li>
                            <figure>
                                <img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon_design.svg' ); ?>"
                                    data-light-src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon_design.svg' ); ?>"
                                    data-dark-src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon_design_dark.svg' ); ?>"
                                    alt="デザイン"
                                >
                            </figure>

                            <h3>
                                <em class="font-en">01</em>
                                <span>デザイン</span>
                            </h3>

                            <p>
                                課題を解決するためにはどんなデザインが最適なのか、マーケティングやエンジニアリングの観点も考慮して、効果的な案を提示いたします。もっとも得意なデザインは柔らかく誠実なデザインですが、案件に応じて可愛い系からスタイリッシュなものまで柔軟に対応・提案いたします。Webデザインはもちろん、DTP / 5m規模の壁面グラフィック / ロゴ / 資料 / システム等のインターフェース / デジタルサイネージのデザインの経験がございます。
                            </p>
                        </li>

                        <li>
                            <figure>
                                <img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon_coding.svg' ); ?>"
                                    data-light-src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon_coding.svg' ); ?>"
                                    data-dark-src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon_coding_dark.svg' ); ?>"
                                    alt="コーディング"
                                >
                            </figure>

                            <h3>
                                <em class="font-en">02</em>
                                <span>コーディング</span>
                            </h3>

                            <p>
                                HTML/CSS/JavaScriptを用いたマークアップ作業、所謂コーディングと呼ばれる工程が得意です。SEOを考慮した正しい文法でコーディングし、運用のしやすさ・メンテナンス性を配慮して構築します。JavaScriptを使ったインタラクティブな機能の実装も多く経験してきました。デザイナー目線を活かし、提案したデザインを再現することはもちろん、様々な環境でページを閲覧した際の細かいバランス調整にも配慮します。近年はAIを活用し、より踏み込んだ開発対応も行っています。
                            </p>
                        </li>

                        <li>
                            <figure>
                                <img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon_speed.svg' ); ?>"
                                    data-light-src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon_speed.svg' ); ?>"
                                    data-dark-src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon_speed_dark.svg' ); ?>"
                                    alt="スピード対応"
                                >
                            </figure>

                            <h3>
                                <em class="font-en">03</em>
                                <span>スピード対応</span>
                            </h3>

                            <p>
                                ランディングページの作成や、求人サイトやオウンドメディア等のコンバージョン率を改善する業務に長く携わっておりましたため、スピード感を持った対応も大切しています。常に課題解決までの最短ルートを考え、与えられた工数や必要なクオリティを踏まえた上で、手段を検討するようにしています。これまでに培ったノウハウと、各種ツールやAI、コーディングの技術を最大限駆使し、どの案件に対しても最善を尽くします。
                            </p>
                        </li>

                        <li>
                            <figure>
                                <img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon_support.svg' ); ?>"
                                    data-light-src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon_support.svg' ); ?>"
                                    data-dark-src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/icon_support_dark.svg' ); ?>"
                                    alt="伴走・提案"
                                >
                            </figure>

                            <h3>
                                <em class="font-en">04</em>
                                <span>伴走・提案</span>
                            </h3>

                            <p>
                                「何を作るか」だけでなく、「なぜ作るのか」「どうすれば目的を達成できるのか」まで考えて提案することを大切にしています。これまで制作だけでなく、アクセス解析やコンバージョン改善、マーケティング施策の検討、案件の進行管理などにも携わってきました。課題や要望をそのまま形にするのではなく、目的や優先順位を整理し、限られた予算・工数の中で実現可能な方法を考えながら、プロジェクトを前に進めます。
                            </p>
                        </li>

                    </ol>

                </article>

                <article class="skill_set-block">

                    <h2>Skill Set</h2>

                    <ul>
                        <li>Adobe Photoshop</li>
                        <li>Adobe Illustrator</li>
                        <li>Adobe XD</li>
                        <li>Figma</li>
                        <li>HTML</li>
                        <li>CSS / Sass</li>
                        <li>JavaScript</li>
                        <li>CMSカスタマイズ</li>
                        <li>PHP(CakePHP, Laravel)</li>
                        <li>GitHub / Sourcetree</li>
                        <li>写真・動画撮影</li>
                    </ul>

                </article>
            </article>
        </div>
    </section>

</main>

<?php get_footer(); ?>
