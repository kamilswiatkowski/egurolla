function experienceInit(){
    toggleExperienceSlider();
}

function toggleExperienceSlider(){
    let experienceMovieButton = document.querySelector('[data-movie-toggler]');
    let experienceImageButton = document.querySelector('[data-img-toggler]');
    let experienceMovie = document.querySelector('[data-movie-slider]');
    let experienceImage = document.querySelector('[data-image-slider]');
    experienceMovieButton.addEventListener('click', function(){
        experienceMovie.classList.remove('hide-slider');
        experienceImage.classList.add('hide-slider');
        experienceMovieButton.classList.add('experience__filter--active');
        experienceImageButton.classList.remove('experience__filter--active');
    });
    experienceImageButton.addEventListener('click', function(){
        experienceMovie.classList.add('hide-slider');
        experienceImage.classList.remove('hide-slider');
        experienceMovieButton.classList.remove('experience__filter--active');
        experienceImageButton.classList.add('experience__filter--active');
    });
}

export default {experienceInit};