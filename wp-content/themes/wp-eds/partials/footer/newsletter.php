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
            <div class="col-12">
                <div class="newsletter__wrapper">
                    <div class="newsletter__left">
                        <?php echo Like\get_section_header(
                          $fields['label'],
                          $fields['title'],
                          $fields['description']
                        ); ?>
                    </div>
                    <div class="newsletter__right">
                        <p class="section__description">Wybierz interesującą Cię kategorię</p>
                        <form action="">
                            <label for="">
                                Kategoria
                                <select name="" id="">
                                    <option value="">Kategoria 1</option>
                                    <option value="">Kategoria 1</option>
                                    <option value="">Kategoria 1</option>
                                    <option value="">Kategoria 1</option>
                                </select>
                            </label>
                            <label for="">
                                E-mail*
                            </label>
                            <label>
                                <input type="checkbox" name="acceptance-1" value="1" aria-invalid="false">
                                <span class="">
                                    <span class="acceptance">Wyrażam zgodę na otrzymywanie informacji marketingowych i handlowych
                                        <span class="dots">…</span>
                                        <span class="hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit, lacus nec finibus cursus, augue mauris mollis felis, et tincidunt dui lacus vulputate nisi. Pellentesque vel gravida turpis, vel egestas massa. Quisque sed mattis nunc, sagittis volutpat massa. Phasellus ipsum metus, sollicitudin et leo vitae, placerat egestas enim.</span>
                                        <span class="show-more" data-on="Czytaj więcej" data-off="Czytaj mniej">Czytaj więcej</span>
                                    </span>
                                </span>
                            </label>
                            <label>
                                <input type="checkbox" name="acceptance-1" value="1" aria-invalid="false">
                                <span class="">
                                    <span class="acceptance">Wyrażam zgodę na otrzymywanie informacji marketingowych i handlowych
                                        <span class="dots">…</span>
                                        <span class="hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit, lacus nec finibus cursus, augue mauris mollis felis, et tincidunt dui lacus vulputate nisi. Pellentesque vel gravida turpis, vel egestas massa. Quisque sed mattis nunc, sagittis volutpat massa. Phasellus ipsum metus, sollicitudin et leo vitae, placerat egestas enim.</span>
                                        <span class="show-more" data-on="Czytaj więcej" data-off="Czytaj mniej">Czytaj więcej</span>
                                    </span>
                                </span>
                            </label>
                            <input type="submit" value="zapisz się" class="btn btn--white btn--red-bg">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>