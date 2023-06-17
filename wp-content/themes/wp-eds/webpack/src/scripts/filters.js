function filtersInit(){
    let filters = document.querySelector('.teams__filters');
    if(filters){
        teamsFilters();
        loadMoreButton();
        clearFiltersButton();
    }
}

function teamsFilters(){
    let filterItems = document.querySelectorAll('.teams__dropdown-item');
    if(filterItems){
        filterItems.forEach((item) => {
            item.addEventListener('click', (event) => {
                let mainFilterName = item.parentElement.parentElement.querySelector('.team__filters-name');
                let filterDropdown = item.parentElement;
                filterDropdown.dataset.currentFilter = item.dataset.filter;
                mainFilterName.innerHTML = item.innerHTML;
                ajaxLoadMorePostsByFilter(1, collectFiltersIds());
            });
        });
    }
}

function collectFiltersIds(){
    let filtersIds = [];
    let teamsDropdowns = document.querySelectorAll('.teams__dropdown');
    teamsDropdowns.forEach((dropdown) => {
        if(dropdown.dataset.currentFilter){
            filtersIds.push(dropdown.dataset.currentFilter);
        }
    });
    return JSON.stringify(filtersIds);
}
function loadMoreButton(){
    let loadMoreButton = document.querySelector('.teams__load-more');
    if(loadMoreButton) {
        let currentPage = 1;
        if (loadMoreButton) {
            loadMoreButton.addEventListener('click', (event) => {
                currentPage++;
                ajaxLoadMorePosts(currentPage);
            });
        }
    }
}
function ajaxLoadMorePosts(currentPage){
    const ajaxData = {
        action: 'loadMoreTeams',
        page: currentPage,
    };
    $.post(settings.ajax_url, ajaxData)
        .done((response) => {
            response = JSON.parse(response);
            if(response.teams) {
                let teamsContainer = document.querySelector('.teams__container');
                teamsContainer.innerHTML += response.teams;
            }
            hideLoadMoreButton();
        });

}

function ajaxLoadMorePostsByFilter(currentPage, filter){
    const ajaxData = {
        action: 'loadMoreTeamsByFilter',
        page: currentPage,
        filter: filter
    };
    $.post(settings.ajax_url, ajaxData)
        .done((response) => {
            response = JSON.parse(response);
            if(response.teams) {
                let teamsContainer = document.querySelector('.teams__container');
                teamsContainer.innerHTML = response.teams;
            } else {
                let teamsContainer = document.querySelector('.teams__container');
                teamsContainer.innerHTML = '<p class="teams__no-posts">Brak wyników</p>';
            }
            hideLoadMoreButton();
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

function hideLoadMoreButton(){
    let teamsElements = document.querySelectorAll('.teams__team');
    let maxElements = document.querySelector('[data-max-posts]');
    if(teamsElements.length >= maxElements.dataset.maxPosts) {
        let loadMoreButton = document.querySelector('.teams__load-more');
        if (loadMoreButton) {
            loadMoreButton.style.display = 'none';
        }
    }
}
export default {filtersInit};