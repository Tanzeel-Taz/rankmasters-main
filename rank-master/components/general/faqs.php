<?php
// $faqs = get_sub_field('items');
$items = get_sub_field('items');

// var_dump($items);
?>
<style>
    .homepage-FAQS {
        /* Accordion styles */
    }

    /* .homepage-FAQS input {
        position: absolute;
        opacity: 0;
        z-index: -1;
    }

    .homepage-FAQS .tabs {
        border-radius: 8px;
        overflow: hidden;
    }

    .homepage-FAQS .tab {
        width: 100%;
        overflow: hidden;
        border-bottom: 1px solid #11093a;
    }

    .homepage-FAQS .tab-label {  */
        /* display: flex;
        justify-content: space-between;
        padding: 1.56em 0;
        font-family: var(--semibold);
        cursor: pointer;
        
    } */
/* 
    .homepage-FAQS .tab-label:hover {
        color: #fc8d55;
    }

    .homepage-FAQS .tab-label::after {
        content: "❯";
        width: 1em;
        height: 1em;
        text-align: center;
        transition: all 0.35s;
    } */

    /* .homepage-FAQS .tab-content {
        max-height: 0;
        color: #2c3e50;
        transition: all 0.35s;
    }

    .homepage-FAQS .tab-close {
        display: flex;
        justify-content: flex-end;
        padding: 1em 0;
        font-size: 0.75em;
        background: #2c3e50;
        cursor: pointer;
    } */

    /* .homepage-FAQS input:checked+.tab-label::after {
        transform: rotate(90deg);
    }

    .homepage-FAQS input:checked~.tab-content {
        max-height: 100vh;
        padding: 0 0 0.78em 0;
        margin-top: -0.78em;
    }
    .homepage-FAQS input:checked~.tab-content p{
        font-size: 1.3em;
        line-height: 1.2;
    } */
    .homepage-FAQS .accordion-button{
      font-size:18px;
      background:none;
      padding: 28px 0;
      font-family: var(--semibold);
      color: var(--black);
    }
    .homepage-FAQS .accordion-button:hover{
      color: var(--secondary);
    }
    .homepage-FAQS .accordion-item{
      border:none;
      border-bottom: 1px solid #dee2e6;
      border-bottom: 1px solid var(--accent);
      background:none;
    }
    .homepage-FAQS .accordion-header{
      border-bottom: none;
    }
    .homepage-FAQS .accordion-button:focus{
      box-shadow:none;
    }
    .homepage-FAQS  .accordion-body {
      padding: 10px 0;
      font-size:18px;
    }
    @media (max-width: 767px){
        .homepage-FAQS__heading{
            font-size:30px;
        }
    }
    @media (max-width: 450px){
      .homepage-FAQS .accordion-button{
        font-size: 14px;
      }
      .homepage-FAQS  .accordion-body {
        font-size:14px;
      }
    }
</style>
<!-- <section class="homepage-FAQS">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="homepage-FAQS__heading text-center mb-4">FAQs</h2>
                <p class="homepage-FAQS__description d-none">GOT A QUESTION? WE’VE GOT ANSWERS.</p>
                <div class="--accordian">
                    <div class="tabs">
                    <?php
                        $i = 1;
                        foreach ($items as $item) {
                        ?>
                            <div class="tab">
                                <input type="checkbox" id="chck<?php echo $i; ?>">
                                <label class="tab-label small-text" for="chck<?php echo $i; ?>"><?php echo $item['question']; ?></label>
                                <div class="tab-content">
                                    <p>
                                        <?php echo $item['answer']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php
                            $i++;
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
</section> -->
<section class="homepage-FAQS">
  <div class="container">
    <h2 class="homepage-FAQS__heading text-center mb-4">FAQs</h2>
    <p class="homepage-FAQS__description d-none">GOT A QUESTION? WE’VE GOT ANSWERS.</p>
    <div class="accordion" id="accordionPanelsStayOpenExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            How important is SEO for SaaS?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
          <div class="accordion-body">
          60% of B2B SaaS marketers state that SEO generates more leads than any other marketing channel. Meanwhile most SaaS businesses focus primarily on paid advertising because it's easier to scale up spend and have immediate results. We offer both services because we believe in immediate results and investing in the long-term organic growth and sustainability that SEO provides SaaS businesses.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
          What is the most important tactic for SEO success?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
          <div class="accordion-body">
          70% of online marketers describe content marketing as their most effective SEO tactic, and it's no different for us. We help our customers prioritize, create, optimize, update, and promote their content using our proprietary processes and machine learning algorithm which helps cluster, batch, and prioritize keyword targets your business already ranks for and should rank for. We know exactly what content to create and optimize for our customers, leading to faster results than any other SEO provider in the industry.                                    
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
          What are the benefits of SaaS SEO Services?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
          <div class="accordion-body">     
          Lorem ipsum dolor sit amet consectetur adipisicing elit. A, in!                                    
          </div>
        </div>
      </div>
    </div>
  </div>
</section>