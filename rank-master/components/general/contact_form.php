<?php
$headline = get_sub_field('headline');
$sub_heading = get_sub_field('sub_heading');
$description = get_sub_field('description');
$content = get_sub_field('content');
$email = get_sub_field('email');
$phone = get_sub_field('phone');
$form_shortcode = get_sub_field('form_shortcode');
?>
<style>
  .contact-form--title {
    text-align: center;
    margin-bottom: 25px;
  }

  .contact-form--title h2 {
    margin-bottom: 7.5px;
  }

  .contact-form--title span.line {
    display: inline-block;
    padding-top: 15px;
    position: relative;
    margin-bottom: 25px;
  }

  .contact-form--title span.line:before {
    left: 50%;
    transform: translateX(-50%);
    background-color: rgba(0, 0, 0, 0.15);
    width: 105px;
    height: 1px;
    position: absolute;
    content: "";
    bottom: 0;
  }

  .contact-form--title span.line:after {
    position: absolute;
    content: "";
    background-color: #ae00e6;
    width: 40px;
    height: 3px;
    bottom: -1px;
    transform: translateX(-50%);
    left: 50%;
  }

  .contact-form--section--left {
    background: linear-gradient(45deg, #d13a7a, #ae00e6);
    background: var(--primary);
    border-radius: 10px;
    color: var(--white);
    position: relative;
    overflow: hidden;
    padding-right: 15px;
    padding-left: 15px;
    height: 100%;
  }

  .contact-form--section--left--big-circle {
    width: 200px;
    height: 200px;
    background: #b12f08;
    background: var(--secondary);
    border-radius: 50%;
    position: absolute;
    bottom: -75px;
    right: -75px;
    opacity: 0.44;
  }

  .contact-form--section--left--small-circle {
    width: 150px;
    height: 150px;
    background: #8202ab;
    background: var(--secondary);
    border-radius: 50%;
    position: absolute;
    bottom: 50px;
    right: 70px;
    opacity: 0.44;
  }

  .contact-form--section--left--get-in-touch {
    margin-top: 20px;
  }

  .contact-form--section--left--get-in-touch h4 {
    font-size: 30px;
    font-family: var(--bold);
    text-transform: uppercase;
    line-height: 1.2;
  }

  .contact-form--section--left--get-in-touch p {
    margin-top: 0;
    margin-bottom: 1rem;
    color: inherit;
  }

  .contact-form--section--left--get-in-touch p:last-child {
    margin-bottom: 0;
  }

  .contact-form--section--left--sub-info {
    margin-top: 40px;
    position: relative;
  }

  .contact-form--section--left--sub-info ul li {
    list-style: none;
    margin-bottom: 24px;
    display: flex;
    align-items: center;
  }

  .contact-form--section--left--sub-info ul li span {
    font-size: 20px;
    margin-right: 15px;
    font-family: var(--semibold);
  }

  .contact-form--section--left--sub-info ul li a {
    color: var(--white);
    text-decoration: none;
    text-decoration: none;
    background-color: transparent;
    -webkit-transition: 0.4s;
    -o-transition: 0.4s;
    transition: 0.4s;
    font-size: 15px;
  }

  .contact-form--section--right {
    background-color: #f7f7f7;
    background: var(--white);
    box-shadow: 1px 2px 10px #ccc;
    border-radius: 10px;
    margin: 0px 10px;
    padding: 20px;
  }

  .contact-form--section--right .wpcf7-form p {
    margin-bottom: 30px;
  }

  .contact-form--section--right .wpcf7-form label {
    margin-bottom: 7.5px;
    font-size: 15px;
  }

  .contact-form--section--right .wpcf7-form label span {
    color: red;
  }

  .contact-form--section--right .wpcf7-form .form-submit-btn p {
    text-align: center;
    margin-bottom: 0;
  }

  .contact-form--section--right .wpcf7-form input,
  .contact-form--section--right .wpcf7-form select,
  .contact-form--section--right .wpcf7-form textarea {
    font-size: 16px;
    line-height: 1.5;
    border-radius: 4px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    border: 1px solid #e7e7e7;
    background-color: #e7e7e7;
    background-color: #f7f7f7;
    height: 37px;
    -webkit-transition: 0.4s;
    -o-transition: 0.4s;
    transition: 0.4s;
    padding: 0 15px;
    width: 100%;
  }

  .contact-form--section--right .wpcf7-form input:focus-visible,
  .contact-form--section--right .wpcf7-form textarea:focus-visible,
  .contact-form--section--right .wpcf7-form select:focus {
    border-color: #ae00e6;
    outline: none;
    background-color: var(--white);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
  }

  .contact-form--section--right .wpcf7-form textarea {
    padding: 15px;
    height: 134px;
    resize: none;
  }

  .contact-form--section--right .wpcf7-form .wpcf7-not-valid-tip {
    font-size: 15px;
  }

  .contact-form--section--right .wpcf7-form .wpcf7-submit {
    font-size: 15px;
    line-height: 0;
    font-family: var(--bold);
    text-transform: uppercase;
    padding: 20px 36px;
    margin: 0;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    -webkit-transition: color 0.25s ease-out;
    transition: color 0.25s ease-out;
    background-color: var(--accent);
    color: var(--white);
    width: min-content;
	transition: all 0.3s;
  }
  .contact-form--section--right .wpcf7-form .wpcf7-submit:hover {
	background: var(--accentL);
    transform: translateY(-0.2em);
  }
  @media (max-width: 991px) {
    .contact-form--section .col-lg-4 {
      margin-bottom: 25px;
    }

    .contact-form--section--right {
      margin: 0;
    }
  }

  @media (max-width: 767px) {
    .contact-form--title h2 {
      font-size: 30px;
    }
  }

  @media (max-width: 375px) {
    .contact-form--section--left--sub-info ul li {
      flex-wrap: wrap;
    }
  }
</style>

<section class="contact-form">
  <div class="container">
    <div class="contact-form--title">
      <h2><?php echo $headline; ?></h2>
      <span class="line"></span></span>
    </div>
    <div class="contact-form--section">
      <div class="row">
        <div class="col-lg-4">
          <div class="contact-form--section--left">
            <div class="contact-form--section--left--big-circle"></div>
            <div class="contact-form--section--left--small-circle"></div>
            <div class="contact-form--section--left--get-in-touch">
              <h4><?php echo $sub_heading; ?></h4>
              <div>
                <?php echo $content; ?>
              </div>
            </div>
            <div class="contact-form--section--left--sub-info">
              <ul>
                <li><span class="fa fa-envelope"></span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                <li><span class="fa fa-phone"></span><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="contact-form--section--right">
            <?php echo do_shortcode($form_shortcode); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>