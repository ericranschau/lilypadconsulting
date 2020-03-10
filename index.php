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
    <section class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
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
    </section>

    <section class="container">
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
    </section>

    <section class="container">
        <div class="row hr">
            <div class="col-md-9 offset-md-2">
                <h5>Organization Development</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-2">
                <h1 class="heading-size-1 withMargin">Building Capacity</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-4">
                <p>Effective leaders know the value of strengthening and expanding organizational capacity to affect change. Using a systemic and thoughtful approach, our goal is to increase your organization’s effectiveness – through people, processes and systems.</p>
                <p>Areas Of Focus</p>
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
        </div>
    </section>

    <section class="container">
        <div class="row hr">
            <div class="col-md-9 offset-md-2">
                <h5>Board of Director Governance</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-2">
                <h1 class="heading-size-1 withMargin">Equipping Your Board</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-4">
                <p>Your board is critical to the growth and success of your organization. Board governance involves equipping your board to strategically lead, with vision, passion, discernment and productive relationships.</p>
                <p>Areas Of Focus</p>
                <ul>
                    <li>Board Development Assessments</li>
                    <li>Comprehensive Board Engagement Plans</li>
                    <li>Board &amp; Committee Structure and Alignment</li>
                    <li>Board &amp; Committee Position Descriptions</li>
                </ul>
            </div>
        </div>
    </section>
</main><!-- #site-content -->

<?php
get_footer();
?>