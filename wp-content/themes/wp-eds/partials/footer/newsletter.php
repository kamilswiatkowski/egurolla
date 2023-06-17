<?php

$fields = [
  'label'       => 'newsletter',
  'title'       => 'Zapisz się i otrzymaj pierwsze darmowe zajęcia',
  'description' => 'Wybierz interesującą Cię kategorię 
i bądź na bieżąco ze wszystkimi wydarzeniami w jedynej takiej szkole tańca w Polsce! <strong>Dodatkowo otrzymasz zaproszenie na darmowe zajęcia próbne.</strong>',
];
?>


<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12">
                <div class="newsletter__left">
                    <?php echo Like\get_section_header(
                    $fields['label'],
                    $fields['title'],
                    $fields['description']
                    ); ?>
                </div>
            </div>
            <div class="col-lg-7 col-12">
            <div class="newsletter__right">
                    <p class="section__description">Wybierz interesującą Cię kategorię</p>
                    <form action="">
                            <label for="category">
                            <span class="label-text">Kategoria</span>
                            <select name="category" id="category" class="dropdown-arrow">
                                <option value="">Kategoria 1</option>
                                <option value="">Kategoria 2</option>
                                <option value="">Kategoria 3</option>
                                <option value="">Kategoria 4</option>
                            </select>
                            </label>
                            <br>
                            <label for="email">
                            <span class="label-text">E-mail*</span>
                            <input type="email" name="email" id="email" class="email-input" required>
                            </label>
                        </form>
                
                        <br>
                        <label class="acceptance">
                            <input type="checkbox" name="acceptance-1" value="1" aria-invalid="false">
                            <span class="label-text">
                                Wyrażam zgodę na otrzymywanie informacji marketingowych i handlowych
                                <span class="dots">…</span>
                                <span class="hidden-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit, lacus nec finibus cursus, augue mauris mollis felis, et tincidunt dui lacus vulputate nisi. Pellentesque vel gravida turpis, vel egestas massa. Quisque sed mattis nunc, sagittis volutpat massa. Phasellus ipsum metus, sollicitudin et leo vitae, placerat egestas enim.</span>
                                <span class="show-more" data-on="Czytaj więcej" data-off="Czytaj mniej">Czytaj więcej</span>
                            </span>
                        </label>
                        
                        <label class="acceptance">
                            <input type="checkbox" name="acceptance-1" value="1" aria-invalid="false">
                            <span class="label-text">
                                Wyrażam zgodę na otrzymywanie informacji marketingowych i handlowych
                                <span class="dots">…</span>
                                <span class="hidden-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit, lacus nec finibus cursus, augue mauris mollis felis, et tincidunt dui lacus vulputate nisi. Pellentesque vel gravida turpis, vel egestas massa. Quisque sed mattis nunc, sagittis volutpat massa. Phasellus ipsum metus, sollicitudin et leo vitae, placerat egestas enim.</span>
                                <span class="show-more" data-on="Czytaj więcej" data-off="Czytaj mniej">Czytaj więcej</span>
                            </span>
                        </label>
                        <br>
                        <input type="submit" value="zapisz się" class="btn btn--white btn--red-bg">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
  document.addEventListener('DOMContentLoaded', () => {
  let showMoreBtns = document.querySelectorAll('.show-more');

  showMoreBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      let parent = btn.parentNode;
      let hiddenContent = parent.querySelector('.hidden-content');

      hiddenContent.classList.toggle('expanded');

      if (hiddenContent.classList.contains('expanded')) {
        btn.textContent = btn.getAttribute('data-off');
      } else {
        btn.textContent = btn.getAttribute('data-on');
      }
    });
  });
});
                            </script>


</section>