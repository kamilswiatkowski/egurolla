<section class="casting-form">
  <form action=""> 
  <div class="container">
        <div class="row">
            <div class="col-12">
              <div class="casting-form__center">
                <span class="section__label">Casting</span>
                <h3 class="section__title">Zgłoś się do castingu i wypełnij formularz!</h3>
              </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="casting-form__left">
                <!-- miejsca na lewe pola -->
                  <label for="name">
                              <span class="label-text">Imię i nazwisko tancerza*</span>
                              <input type="text" name="name" id="name" class="name-input" required>
                  </label>

                  <label for="age">
                              <span class="label-text">Wiek tancerza*</span>
                              <input type="text" name="age" id="age" class="name-input" required>
                  </label>

                  <label for="name-sender">
                              <span class="label-text">Imię i nazwisko osoby zgłaszającej (opiekun)*</span>
                              <input type="text" name="name-sender" id="name-sender" class="name-input" required>
                  </label>

                  <label for="tel">
                              <span class="label-text">Telefon kontaktowy opiekuna*</span>
                              <input type="number" name="tel" id="tel" class="name-input" required>
                  </label>

                  <label for="email">
                              <span class="label-text">E-mail opiekuna*</span>
                              <input type="email" name="email" id="email" class="email-input" required>
                  </label>

                </div>
            </div>
            <div class="col-lg-6 col-12">
            <div class="casting-form__right">
              <!-- miejsca na prawe pola -->
              <label for="exp">
                              <span class="label-text">Doświadczenie tancerza (w latach)*</span>
                              <input type="text" name="exp" id="exp" class="name-input" required>
                  </label>

                    
                            <label for="category">
                            <span class="label-text">Skąd dowiedziałaś/eś się o castingu?*</span>
                            <select name="category" id="category" class="dropdown-arrow">
                                <option value="">Znajomy</option>
                                <option value="">Social Media</option>
                                <option value="">Internet</option>
                                <option value="">Newsletter</option>
                            </select>
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
                        
                        <label class="acceptance">
                            <input type="checkbox" name="acceptance-1" value="1" aria-invalid="false">
                            <span class="label-text">
                                Wyrażam zgodę na otrzymywanie informacji marketingowych i handlowych
                                <span class="dots">…</span>
                                <span class="hidden-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit, lacus nec finibus cursus, augue mauris mollis felis, et tincidunt dui lacus vulputate nisi. Pellentesque vel gravida turpis, vel egestas massa. Quisque sed mattis nunc, sagittis volutpat massa. Phasellus ipsum metus, sollicitudin et leo vitae, placerat egestas enim.</span>
                                <span class="show-more" data-on="Czytaj więcej" data-off="Czytaj mniej">Czytaj więcej</span>
                            </span>
                        </label>
                        
                        <input type="submit" value="Zgłoś uczestnictwo" class="btn btn--white btn--red-bg">
                    
                 
                </div>
            </div>
            <div class="col-12">
            <div class="casting-form__end">
                      <span class="info-text">Administratorem Twoich danych osobowych jest World Dance Sp. z o.o. z siedzibą w Warszawie (02-001), <a href="#">Więcej informacji</a></span>
                    
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

  </form>
</section>