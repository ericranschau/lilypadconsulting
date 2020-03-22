<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Lily Pad Consluting
 * @since 0.0.0
 */

get_header();
?>

<main id="site-content" role="main">
    <section class="mix_nopad">
        <img id="site-logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logos/lilypad.svg" />
    </section>

    <!-- Growing Leaders -->
    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <img class="lilypad" src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypad.png" />
                    <h1 class="heading-size-2 text-center">Growing Leaders.<br /> Developing Organizations.<br />Achieving Results.</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2 class="heading-size-3">True Partners in Evolving Organizations and Developing Leaders</h2>
                    <p>For additional support in reaching your organizational goals, Lily Pad Consulting is the dedicated partner for your business.</p>
                    <p>Partnering with our brand carries the promise of unique learning experiences that drive thought-provoking visioning, impactful strategies and leader development while having fun and achieving results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seizing Opportunities -->
    <section class="graphic graphic-left graphic-solutions">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-2">
                    <h1 class="heading-size-1 withMargin">Seizing Opportunities</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-4">
                    <h2 class="heading-size-4">Solutions That Make An Organizational Impact</h2>
                    <p>Through deep business and broad industry experiences, we partner with leaders to explore solutions that develop vision and strategy, drive alignment and implementation, develop talent and facilitate change.</p>
                    <p>Below you can learn more about the solutions we provide, the clients we support and the tools that give us results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Charting Direction -->
    <section class="graphic graphic-strategy">
        <div class="container">
            <div class="row overflow-hidden">
                <div class="col-md-9 offset-md-2">
                    <h5 class="hr hr-left">Visioning &amp; Strategy</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-2">
                    <h1 class="heading-size-1 withMargin">Charting Direction</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>Charting a vision for the future of your business captures your organization’s hearts and minds. Together, we’ll leverage strategy that aligns people and priorities, strengthens leadership behaviors, broadens perspectives and drives change.</p>
                    <h6>Areas Of Focus</h6>
                    <ul>
                        <li>Visioning &amp; Dreaming Big</li>
                        <li>Strategic Planning</li>
                        <li>Implementation Strategies</li>
                        <li>Process Improvement</li>
                    </ul>
                </div>
                <div class="col-md-4 order-md-first">
                    <div class="clientsWrapper">
                        <img class="clients-bg mix_horizontal" src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypadBg_v2_horizontal.svg" />
                        <img class="clients-bg mix_vertical" src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypadBg_v2_vertical.svg" />
                        <ul class="clients">
                            <li class="clients-listItem"><img class="clients-img" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/clients/mac.svg" /></li>
                            <li class="clients-listItem"><img class="clients-img" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/clients/3m.svg" /></li>
                            <li class="clients-listItem"><img class="clients-img" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/clients/artSpace.svg" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Building Capacity -->
    <section class="graphic graphic-development">
        <div class="container">
            <div class="row overflow-hidden">
                <div class="col-md-9 offset-md-2">
                    <h5 class="hr hr-left">Organization Development</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-2">
                    <h1 class="heading-size-1 withMargin">Building Capacity</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>Effective leaders know the value of strengthening and expanding organizational capacity to affect change. Using a systemic and thoughtful approach, our goal is to increase your organization’s effectiveness – through people, processes and systems.</p>
                    <h6>Areas Of Focus</h6>
                    <ul>
                        <li>Leader Development (Including 360° Assessments, Emotional Intelligence instruments, MBTI certification and Customized Development Programs) </li>
                        <li>Team Effectiveness</li>
                        <li>Change Strategies</li>
                        <li>Executive Coaching</li>
                        <li>Performance Management</li>
                        <li>Talent Management</li>
                        <li>Succession Planning</li>
                        <li>Employee Engagement</li>
                        <li>Cultural Revitalization</li>
                    </ul>
                </div>
                <div class="col-md-4 order-md-first">
                    <div class="clientsWrapper">
                        <img class="clients-bg mix_horizontal" src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypadBg_v1_horizontal.svg" />
                        <img class="clients-bg mix_vertical" src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypadBg_v1_vertical.svg" />
                        <ul class="clients">
                            <li class="clients-listItem"><img class="clients-img" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/clients/medtronic.svg" /></li>
                            <li class="clients-listItem"><img class="clients-img" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/clients/hazelden.svg" /></li>
                            <li class="clients-listItem"><img class="clients-img" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/clients/lifetouch.svg" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipping Your Board -->
    <section class="graphic graphic-governance">
        <div class="container">
            <div class="row overflow-hidden">
                <div class="col-md-9 offset-md-2">
                    <h5 class="hr hr-left">Board of Director Governance</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-2">
                    <h1 class="heading-size-1 withMargin">Equipping Your Board</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>Your board is critical to the growth and success of your organization. Board governance involves equipping your board to strategically lead, with vision, passion, discernment and productive relationships.</p>
                    <h6>Areas Of Focus</h6>
                    <ul>
                        <li>Board Development Assessments</li>
                        <li>Comprehensive Board Engagement Plans</li>
                        <li>Board &amp; Committee Structure and Alignment</li>
                        <li>Board &amp; Committee Position Descriptions</li>
                    </ul>
                </div>
                <div class="col-md-4 order-md-first">
                    <div class="clientsWrapper">
                        <img class="clients-bg mix_horizontal" src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypadBg_v2_horizontal.svg" />
                        <img class="clients-bg mix_vertical" src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypadBg_v2_vertical.svg" />
                        <ul class="clients">
                            <li class="clients-listItem"><img class="clients-img" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/clients/shelterBox.svg" /></li>
                            <li class="clients-listItem"><img class="clients-img" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/clients/healthPartners.svg" /></li>
                            <li class="clients-listItem"><img class="clients-img" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/clients/accra.svg" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section id="ourTeam">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img class="lilypad lilypad-small" src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypad.png" />
                    <h5 class="hr">Our Team</h5>
                </div>
            </div>
            <div class="row mb-10">
                <div class="col-md-6">
                    <img class="bioPic" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/bios/grayce.png" />
                </div>
                <div class="col-md-5">
                    <h1 class="heading-size-3">Grayce Belvedere Young</h1>
                    <p>With over twenty-five years of organizational development and strategic planning expertise, Grayce is deeply passionate about strengthening the capacity of her clients across numerous industries and within the nonprofit world.</p>
                    <p>Prior to her twelve years as a consultant, Grayce held leadership roles at UnitedHealth Group and Thomson-West Group (now Thomson-Reuters).</p>
                    <p>Grayce has lived, worked or traveled in all 50 states, over 55 countries, and all 7 continents. She brings an inquisitive, thoughtful, systemic, and global perspective to all her client engagements.</p>
                    <p class="mt-4"><a class="btn btn-withIcon" href="https://www.linkedin.com/in/grayce-belvedere-young/" target="_blank">Connect</a></p>
                </div>
            </div>
            <div class="row mb-10">
                <div class="col-md-6">
                    <img class="bioPic" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/bios/grayce.png" />
                </div>
                <div class="col-md-5">
                    <h1 class="heading-size-3">Rachel Belvedere</h1>
                    <p>Rachel serves as a client services project manager at Lily Pad Consulting, utilizing her organization skills and creativity to take on tasks related to client services, technology, and business operations.</p>
                    <p>With her passion for social and environmental justice, Rachel is involved in climate justice, multifaith, and women’s leadership groups and works to empower other people to be active citizens in their communities.</p>
                    <p class="mt-4"><a class="btn btn-withIcon" href="https://www.linkedin.com/in/rachel-belvedere/" target="_blank">Connect</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Our Community -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img class="lilypad lilypad-small" src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/lilypad.png" />
                    <h5 class="hr">Support Our Community</h5>
                </div>
            </div>
            <div class="row mb-10">
                <div class="col-md-6">
                    <img class="bioPic" src="<?php echo get_template_directory_uri() ?>/assets/images/FPO/bios/culturalJambalaya.png" />
                </div>
                <div class="col-md-5">
                    <h1 class="heading-size-3">Grayce Belvedere Young</h1>
                    <p>Like years past, Lily Pad Consulting gives back to our community through pro bono services. In 2020, we are proud to be a partner of Cultural Jambalaya, a volunteer-run organization aimed to promote the understanding and respect for all people and all cultures. </p>
                    <h6>Past Partners</h6>
                    <ul>
                        <li><em>2019:</em> WYCA</li>
                        <li><em>2018:</em> WYCA</li>
                        <li><em>2017:</em> Spark-Y</li>
                        <li><em>2018:</em> Leukemia &amp; Lymphoma Society</li>
                        <li><em>2015:</em> Camp Fire</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main><!-- #site-content -->

<?php
get_footer();
?>