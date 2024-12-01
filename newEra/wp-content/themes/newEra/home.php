<?php
/*
Template Name: home

*/




?>
<?php get_header();?>
    <section id="content">
        
        <div class="container content-flex">
            
           <div class="d-flex flex-wrap  justify-content-evenly ">
            <div class="content-text content-text-items">
                <p class="fs-1 fw-bold lh-lg text-center text-uppercase title">    обо мне   </p>
                <p class="fw-bold fs-5 text-wrap lh-lg text-start mw-500 text">
                Приятно познакомиться! Меня зовут Айза. Уже 5 лет успешно готовлю выпускников к ОГЭ и ЕГЭ по математике.

                Дипломированный педагог: окончила Волгоградский государственный социально-педагогический университет. А также регулярно развиваю себя как репетитор и педагог(см. Раздел «Образование»)
                
                Подготовлю тебя к экзаменам легко и эффективно
                
                Добро пожаловать🤍</p>
            </div>
            

                <img src="<?php bloginfo('template_url');?>/assets/img/wee.png" alt="" class="img-fluid">
        </div>
        </div>
    </section>
    <section id="education">
        <div class="container ">
            <p class="fs-1 fw-bold lh-lg text-center text-uppercase title">ОБРАЗОВАНИЕ</p>
            <p class="text-center fs-5 fw-lighttext-wrap educationText-bg text">Я – высококвалифицированный педагог с дипломом бакалавра педагогического дела двойной специализации из Волгоградского государственного социально-педагогического университета (2018) и магистратурой в Ростовском государственном экономическом университете по специальности "управление в образовательной сфере" (2024). Мой профессиональный рост поддерживается курсами повышения квалификации, такими как «Профессиональная деятельность преподавателя СПО по ФГОС ТОП-50» и «Инновации в подготовке к ОГЭ по математике». Я активно участвую в онлайн-семинарах, касающихся современных подходов в педагогике и мотивации учащихся, что свидетельствует о моем стремлении к инновациям и постоянному развитию.</p>
            <?php echo do_shortcode('[slick-slider design="design-5"  dots="false" arrows="false" autoplay="true" autoplay_interval="3000"  sliderheight="350" ]'); ?>

        </div>
    </section>
    <section id="price">
        <div class="container ">
            <p class="fs1 fw-bold lh-lg text-center text-uppercase title">прайс</p>
            <div class="price-item d-flex justify-content-evenly flex-wrap">
                <div class="card" style="width: 18rem;">
                    <img src="<?php bloginfo('template_url');?>/assets/img/group.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Групповые занятия</h5>
                      <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Подробнее</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img src="<?php bloginfo('template_url');?>/assets/img/indiv.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Индивидуальные занятия</h5>
                      <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Подробнее</a>
                    </div>
                  </div>
            </div>
            </div>
            
    </section>
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Групповые занятия</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Занятия проводятся в группе до 4-х человек. 
                Занятия включают в себя:
                Диагностика знаний
                Выявление пробелов в знаниях
                Определение обучаемости
                Составление плана обучения с учетом знаний каждого участника группы
                Регулярные отчеты по проделанной работе для родителей
                Подбор методических материалов
                Общие и индивидуальные домашние задания
                Проведение пробных экзаменов
                
                Мы предоставляем все необходимые материалы к занятию:
                Канцелярия для ведения конспектов (ручки, карандаши, линейки, лайнеры и т.п.)
                Тетради для теории и практики
                Методические материалы
                Авторские материалы
                Чек-лист по экзамену 
                План обучения
                Общие и индивидуальные тренажеры, рабочие листы и т.п
                
                Стоимость групповых занятий - 1000р
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Индивидуальные занятия</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Занятия включают в себя:
                Диагностика знаний
                Выявление пробелов в знаниях
                Определение обучаемости
                Составление индивидуального плана обучения с учетом знаний
                Подбор методики обучения
                Регулярные отчеты по проделанной работе для родителей
                Подбор методических материалов
                Индивидуальные домашние задания
                Проведение пробных экзаменов
                
                Мы предоставляем все необходимые материалы к занятию:
                Канцелярия для ведения конспектов (ручки, карандаши, линейки, лайнеры и т.п.)
                Тетради для теории и практики
                Методические материалы
                Авторские материалы
                Справочные материалы
                Чек-лист по экзамену 
                План обучения
                Индивидуальные тренажеры, рабочие листы и т.п
                
                
                Стоимость индивидуальных занятий - 1700р
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


<?php get_footer(); ?>