function filtersInit(){
    let filters = document.querySelector('.teams__filters');
    let postsFilters = document.querySelector('.featured__categories');
    if(filters){
        teamsFilters('teams');
        loadMoreButton('[data-load-more]', 'loadMorePosts', '.teams__container', 'teams');
        clearFiltersButton();
    }

    if(postsFilters){
        let excludedPosts = document.querySelector('[data-featured-ids]').dataset.featuredIds;
        loadMoreButton('[data-load-more]', 'loadMorePosts', '.posts__container', 'post', excludedPosts);
        singleFilter();
    }

}

function teamsFilters(postType){
    let filterItems = document.querySelectorAll('.teams__dropdown-item');
    if(filterItems){
        filterItems.forEach((item) => {
            item.addEventListener('click', (event) => {
                let mainFilterName = item.parentElement.parentElement.querySelector('.team__filters-name');
                let filterDropdown = item.parentElement;
                filterDropdown.dataset.currentFilter = item.dataset.filter;
                mainFilterName.innerHTML = item.innerHTML;
                ajaxLoadMorePostsByFilter(1, collectFiltersIds('.teams__dropdown'), '.teams__team', postType, '.teams__container');
            });
        });
    }
}

function singleFilter(){
    let tagFilters = document.querySelectorAll('[data-tag-filter]');
    if(tagFilters){
        tagFilters.forEach((item) => {
            item.addEventListener('click', (event) => {
                item.dataset.currentFilter = item.dataset.tagFilter;
                item.classList.toggle('active');
                ajaxLoadMorePostsByFilter(1, collectFiltersIds('[data-current-filter]'), '.article-box', 'post', '.posts__container');
            });
        });
    }
}

function collectFiltersIds(filtersClass){
    let filtersIds = [];
    let teamsDropdowns = document.querySelectorAll(filtersClass);
    teamsDropdowns.forEach((item) => {
        if(item.dataset.currentFilter){
            filtersIds.push(item.dataset.currentFilter);
        }
    });
    return JSON.stringify(filtersIds);
}
function loadMoreButton(button, action, containerClass, postType, postExcluded = null){
    let loadMoreButton = document.querySelector(button);
    if(loadMoreButton) {
        let currentPage = 1;
        if (loadMoreButton) {
            loadMoreButton.addEventListener('click', (event) => {
                currentPage++;
                ajaxLoadMorePosts(currentPage, action, containerClass, postType, postExcluded);
            });
        }
    }
}
function ajaxLoadMorePosts(currentPage, action, containerClass, postType, postExcluded){
    const ajaxData = {
        action: action,
        page: currentPage,
        type: postType,
        featured_ids: postExcluded,
    };
    $.post(settings.ajax_url, ajaxData)
        .done((response) => {
            response = JSON.parse(response);
            if(response.posts) {
                let postsContainer = document.querySelector(containerClass);
                postsContainer.innerHTML += response.posts;
            }
            hideLoadMoreButton();
        });

}

function ajaxLoadMorePostsByFilter(currentPage, filter, elementsToHideClass, postType, responseContainerClass = null){
    const ajaxData = {
        action: 'loadMorePostsByFilter',
        page: currentPage,
        filter: filter,
        type : postType,
    };
    $.post(settings.ajax_url, ajaxData)
        .done((response) => {
            response = JSON.parse(response);
            if(response.posts) {
                let teamsContainer = document.querySelector(responseContainerClass);
                teamsContainer.innerHTML = response.teams;
            } else {
                let teamsContainer = document.querySelector(responseContainerClass);
                teamsContainer.innerHTML = '<p class="teams__no-posts">Brak wyników</p>';
            }
            hideLoadMoreButton(elementsToHideClass);
        });
}

function clearFilters(){
    let teamsDropdowns = document.querySelectorAll('.teams__dropdown');
    teamsDropdowns.forEach((dropdown) => {
        dropdown.dataset.currentFilter = '';
        let mainFilterName = dropdown.parentElement.querySelector('.team__filters-name');
        mainFilterName.innerHTML = mainFilterName.dataset.mainCategory;
    });
}

function clearFiltersButton(){
    let clearFiltersButton = document.querySelector('.teams__filters-clear');
    if(clearFiltersButton){
        clearFiltersButton.addEventListener('click', (event) => {
            clearFilters();
            ajaxLoadMorePostsByFilter(1, collectFiltersIds());
        });
    }
}

function hideLoadMoreButton(elementsToCheck){
    let postsElements = document.querySelectorAll(elementsToCheck);
    let maxElements = document.querySelector('[data-max-posts]');
    if(postsElements.length >= maxElements.dataset.maxPosts) {
        let loadMoreButton = document.querySelector('[data-load-more]');
        if (loadMoreButton) {
            loadMoreButton.style.display = 'none';
        }
    }
}
export default {filtersInit};