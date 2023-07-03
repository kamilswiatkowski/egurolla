<?php

$post = get_post();
$content = $post->post_content;
get_header();

$career = get_posts(
  [
    'post_type' => 'kariera',
  ]
);

$fields = [
  'boxes'     => [
    [
      'title'       => '30 lat na rynku',
      'description' => 'Posiadamy szkoły w: Warszawie, Łodzi, Wrocławiu, Krakowie, Katowicach, Konstancinie - Jeziornie i Grodzisku Mazowieckim',
    ],
    [
      'title'       => '30 lat na rynku',
      'description' => 'Posiadamy szkoły w: Warszawie, Łodzi, Wrocławiu, Krakowie, Katowicach, Konstancinie - Jeziornie i Grodzisku Mazowieckim',
    ],
    [
      'title'       => '30 lat na rynku',
      'description' => 'Posiadamy szkoły w: Warszawie, Łodzi, Wrocławiu, Krakowie, Katowicach, Konstancinie - Jeziornie i Grodzisku Mazowieckim',
    ],
  ],
  'boxes_new' => [
    [
      'image'       => '',
      'position'    => 'Trener tańca jazz, modern',
      'description' => '“Praca w Egurrola Dance Studio daje mi wiele możliwości rozwoju. Mogę realizować swoje marzenia i brać udział w ciekawych projektach i wydarzeniach”',
    ],
    [
      'image'       => '',
      'position'    => 'Trener tańca jazz, modern',
      'description' => '“Praca w Egurrola Dance Studio daje mi wiele możliwości rozwoju. Mogę realizować swoje marzenia i brać udział w ciekawych projektach i wydarzeniach”',
    ],
  ],
];

?>

<section class="home-hero" style="background: url('<?php echo home_url(); ?>/wp-content/themes/wp-eds/dist/images/kariera-bg.png') center center no-repeat;">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="home-hero__wrapper">
										<div class="home-hero__title">
												<h1>dołącz do zespołu egurrola dance studio</h1>
										</div>
										<div class="home-hero__subtitle">
                                        kariera
										</div>
								</div>
						</div>
				</div>
		</div>
</section>


    <section class="advantages">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <?php echo Like\get_section_header(
                      '',
                      'Dlaczego warto z nami pracować',
                      'Egurrola Dance Studio to jedne z największych 
i najnowocześniejszych szkół tańca w Polsce, założone 
i prowadzone przez Agustina Egurrolę – utytułowanego choreografa, tancerza i jurora popularnych programów telewizyjnych: “You Can Dance. Nowa Generacja” oraz 
“Dance, Dance, Dance”'
                    ); ?>
                </div>
                <div class="col-12 col-md-6">
                    <div class="advantages__slider">
                        <?php foreach ($fields['boxes'] as $box) { ?>
                            <div class="advantage-box">
                                <img src="<?php echo home_url(); ?>/wp-content/themes/wp-eds/dist/images/calendar.png"
                                     alt="<?php echo $box['title']; ?>"
                                     class="advantage-box__icon">
                                <h4 class="advantage-box__title"><?php echo $box['title']; ?></h4>
                                <p class="advantage-box__description"><?php echo $box['description']; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                    <img src="<?php echo $fields['image']; ?>" alt="" class="advantages__image">
                </div>
            </div>
        </div>
    </section>
    <div class="post-type-archive-kariera__list">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php echo Like\get_section_header(
                      'Zapoznaj się z najnowszymi ofertami i znajdź pracę dla siebie',
                      'Rozwiń z nami skrzydła',
                      ''
                    ); ?>
                </div>
            </div>
            <div class="row">
                <?php foreach ($career as $item) { ?>
                    <div class="col-12">
                        <?php Like\kariera_box($item->ID); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <section class="who-is-agustin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php echo Like\get_section_header(
                      'Opinie pracowników',
                      'Zobacz co mówią o nas inni',
                      ''
                    ); ?>

                </div>
            </div>
        </div>
        <div class="who-is-agustin__slider">
            <?php foreach ($fields['boxes_new'] as $box) { ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-md-flex align-items-md-center">
                            <img src="<?php echo home_url(); ?>/wp-content/themes/wp-eds/dist/images/zdjecie.png" alt=""
                                 class="about-agustin__main-img">
                            <div class="about-agustin__inner about-agustin__inner--slider">

                                <p class="about-agustin__quote"><?php echo $box['description']; ?></p>
                                <h3 style="font-size: 32px; color: #c03; text-transform: uppercase;line-height: 38px;">
                                    Katarzyna mieczkowska
                                </h3>
                                <span class="about-agustin__position"><?php echo $box['position']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
<?php

get_footer();